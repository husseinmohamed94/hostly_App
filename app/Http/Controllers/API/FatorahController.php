<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Services\fatorahServices;
use App\Models\OrderPayment;
use App\Models\User;
use App\Models\webHosting;
use Illuminate\Http\Request;

class FatorahController extends Controller
{
    private $fatorahServices;
    public function __construct(fatorahServices $fatorahServices){
        $this->fatorahServices = $fatorahServices;
    }
    public function payorder($id){

        $payment = new OrderPayment();


        $webHosting= webHosting::findOrFail($id);
        $price=  $webHosting->price;

       $data = [


            'CustomerName'       => auth()->user()->name,
            'NotificationOption' => 'Lnk',
            'InvoiceValue'       => $webHosting->price,
            'CustomerEmail'      => auth()->user()->email,
            'CallBackUrl'        => env('success_url'),
            'ErrorUrl'           =>env('Error_url'),
            'Language'           => 'en',
            'DisplayCurrencyIso' => 'EGP',
        ];

        $response =  $this->fatorahServices->sendPayment($data);

           // return $response;
        if(isset($response['IsSuccess']))
            if($response['IsSuccess']==true){

                $InvoiceId  = $response['Data']['InvoiceId']  ; // save this id with your order table
                $InvoiceURL = $response['Data']['InvoiceURL'] ;

           $payment->create([

                    'InvoiceId'             => $InvoiceId,
                    'InvoiceURL'            => $InvoiceURL,
                    'user_id'               => auth()->user()->id ,
                    'price'                 => $price ,
                    'web_hosting_id'        => $id,
                    'IsSuccess'             => 'null',
                    'InvoiceStatus'         => 'null' ,
                    'TransactionDate'       => now(),
                ]);
            }
        return redirect($response['Data']['InvoiceURL']); // redirect for this link to view payment page



}

   public function callback(Request $request)
    {
        $data = [];
        $data['Key'] = $request->paymentId;
        $data['KeyType'] = 'paymentId';

        $response =   $this->fatorahServices->getPaymentStatus($data);



        if(!isset($response['Data']['InvoiceId']))
            return response()->json(["error" => 'error','status' =>false],404);
        $payment = OrderPayment::where(['InvoiceId'  => $response['Data']['InvoiceId'] ])->first(); // get your order by payment_id



       if($response['IsSuccess'] == true){
            if($response['Data']['InvoiceStatus']=="Paid")//|| $response->Data->InvoiceStatus=='Pending'
               // if($payment->price  ==  $response['Data']['InvoiceValue'] ){

                    $payment->IsSuccess = 'true';
                    $payment->InvoiceStatus = 'Paid';
                    $payment->TransactionDate = $response['Data']['CreatedDate'];
                    $payment->save();
                    User::where('id',$payment->user_id)->update(['status' =>1]);

                    $notification = array(
                        'message_id' => ' Successfully',
                        'alert-type' => 'info'
                    );
                    return redirect()->route('dashbord')->with($notification);

               // }
        }

        return redirect()->route('error');


    }





    public function error(){

        return view('pages.payment.ErrorPayment');
    }
}
