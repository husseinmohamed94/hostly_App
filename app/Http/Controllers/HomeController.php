<?php

namespace App\Http\Controllers;

use App\Models\OrderPayment;
use App\Models\OurDomain;
use App\Models\webHosting;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (auth()->user()->is_admin ==1){
            $orders = OrderPayment::all();
            return view('pages.Dashbord.dashboard',compact('orders'));
        }else{

        return view('home');
        }

    }

    public function welcome(){

        $hostings = webHosting::all();

        return view('welcome',compact('hostings'));
    }

    public function Dashbord(){

        if ( auth()->user()->status == 1){

            return view('Dashbord');
        }else{

            return view('home');
        }


    }

    public function search(Request $request){
     $request->validate(['search' => 'required']);
        $search  = $request->search;
        $exdi =
        $filtersearch = OurDomain::where('name','like','%' . $search .'%')->get();
        if($filtersearch){
            foreach ($filtersearch as $filtersear){

                    return 'the name is ardy  '  . $search . $filtersear->name ,  ' ' , . $search . $filtersear->name;


            }

        }
    }
}
