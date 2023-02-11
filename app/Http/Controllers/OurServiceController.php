<?php

namespace App\Http\Controllers;

use App\Http\Traits\AttachFilesTrait;
use App\Models\OurService;
use App\Models\setting;
use Illuminate\Http\Request;

class OurServiceController extends Controller
{
    use AttachFilesTrait;
    public function index()
    {
        $OurServices = OurService::all();
        return view('pages.OutSevrice.index',compact('OurServices'));
    }


    public function create()
    {
        return view('pages.OutSevrice..create');
    }


    public function store(Request $request)
    {
        $validtion =  $request->validate([

            'image'              => 'Image|mimes:jpg,bmp,png',
            'name_servic'        => 'required',
            'details_servic'    => 'required',
        ]);

     //   $image = $request->file('image')->getClientOriginalName();

        try {
         // $image =   $request->file('image')->getClientOriginalName();


          $image = $request->file('image');
            $name_image = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            \Intervention\Image\Facades\Image::make($image)->resize(900,350)->save('upload/ourserives/' . $name_image);
            $save_url  = 'upload/ourserives/'.  $name_image;


           $oursevrice =  OurService::create([
                'name_servic'                    => $request->name_servic,
                'details_servic'                 => $request->details_servic,
                'image'                          => $save_url,
            ]);
            $notification = array(
                'message_id' => ' Successfully',
                'alert-type' => 'info'
            );
            return redirect()->back()->with($notification);


        }catch (\Exception $e) {

            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }

    }


    public function show(OurService $ourService)
    {
        //
    }


    public function edit(Request $request ,$id)
    {
        $ourservice  = OurService::findOrFail($id);
         return view('pages.OutSevrice..edit',compact('ourservice'));
    }

    public function update(Request $request, OurService $ourService,$id)
    {
        $validtion =  $request->validate([

            'image'              => 'Image|mimes:jpg,bmp,png',
            'name_servic'        => 'required',
            'details_servic'    => 'required',
        ]);

        //   $image = $request->file('image')->getClientOriginalName();

        try {

            $ourservice  = OurService::findOrFail($id);
            $oldimage = $request->oldimage;
            if ($request->file('image')) {
                if(!empty($oldimage)) {
                    unlink($oldimage);
                }
                $image = $request->file('image');
                $name_image = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
                \Intervention\Image\Facades\Image::make($image)->resize(900, 350)->save('upload/ourserives/' . $name_image);
                $save_url = 'upload/ourserives/' . $name_image;

                $ourservice->update([

                    'image' => $save_url,
                    'name_servic' => $request->name_servic,
                    'details_servic' => $request->details_servic,
                ]);

                $notification = array(
                    'message_id' => ' Successfully',
                    'alert-type' => 'info'
                );
                return redirect()->back()->with($notification);

            }else{
                $ourservice->update([

                    'name_servic' => $request->name_servic,
                    'details_servic' => $request->details_servic,
                ]);
                $notification = array(
                    'message_id' => ' Successfully',
                    'alert-type' => 'info'
                );
                return redirect()->back()->with($notification);

            }
        }catch (\Exception $e) {

            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }

    }


    public function destroy(Request $request ,$id)
    {

        $oldimage = $request->oldimage;
        if(!empty($oldimage)){
           OurService::findOrFail($id)->delete();
            session()->flash('status', 'تم الحذف بنجاح');
            return redirect()->route('OurService.index');
        }else{

            unlink($oldimage);
            OurService::findOrFail($id)->delete();
            $notification = array(
                'message_id' => ' Successfully',
                'alert-type' => 'warning'
            );
            return redirect()->back()->with($notification);

        }

    }
}
