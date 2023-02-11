<?php

namespace App\Http\Controllers;

use App\Http\Traits\AttachFilesTrait;
use App\Models\EnjoyFeature;
use Illuminate\Http\Request;

class EnjoyFeatureController extends Controller
{
    use AttachFilesTrait;
    public function index()
    {
        $features = EnjoyFeature::all();
        return view('pages.Feature.index',compact('features'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.Feature.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validtion =  $request->validate([
            'Name'               => 'required',
            'details'            => 'required',
            'image'              => 'nullable|Image|mimes:jpg,bmp,png',

        ]);



        try {
          if($request->file('image')){
              $image =   $request->file('image')->getClientOriginalName();
              $this->uploadFile($request , 'image' ,'EnjoyFeatures');

              EnjoyFeature::create([
                  'Name'                           => $request->Name,
                  'details'                        => $request->details,
                  'image'                          => $image,
              ]);
              $notification = array(
                  'message_id' => ' Successfully',
                  'alert-type' => 'info'
              );
              return redirect()->route('Features.index')->with($notification);

          }else{
              EnjoyFeature::create([
                  'Name'                           => $request->Name,
                  'details'                        => $request->details,
                 'image'                           => '',
              ]);
              $notification = array(
                  'message_id' => ' Successfully',
                  'alert-type' => 'info'
              );
              return redirect()->route('Features.index')->with($notification);
          }


        }catch (\Exception $e) {

            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EnjoyFeature  $enjoyFeature
     * @return \Illuminate\Http\Response
     */
    public function show(EnjoyFeature $enjoyFeature)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EnjoyFeature  $enjoyFeature
     * @return \Illuminate\Http\Response
     */
    public function edit(EnjoyFeature $enjoyFeature,$id)
    {
       $feature = EnjoyFeature::findOrFail($id);
    return view('pages.Feature.edit',compact('feature'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\EnjoyFeature  $enjoyFeature
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id,EnjoyFeature $enjoyFeature)
    {
        $validtion =  $request->validate([
            'Name'               => 'required',
            'details'            => 'required',
            'image'              => 'nullable|Image|mimes:jpg,bmp,png',

        ]);



        try {
            $feature= EnjoyFeature::findOrFail($id);

            if($request->file('image')){


                $image =   $request->file('image')->getClientOriginalName();
                $this->uploadFile($request , 'image' ,'EnjoyFeatures');

                $feature->update([
                    'Name'                           => $request->Name,
                    'details'                        => $request->details,
                    'image'                          => $image,
                ]);
                $notification = array(
                    'message_id' => ' Successfully',
                    'alert-type' => 'info'
                );
                return redirect()->route('Features.index')->with($notification);

            }else{
                $feature->update([
                    'Name'                           => $request->Name,
                    'details'                        => $request->details,

                ]);
                $notification = array(
                    'message_id' => ' Successfully',
                    'alert-type' => 'info'
                );
                return redirect()->route('Features.index')->with($notification);
            }


        }catch (\Exception $e) {

            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EnjoyFeature  $enjoyFeature
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request , EnjoyFeature $enjoyFeature,$id)
    {
        $oldimage= $request->oldimage;

        if($oldimage){
           $this->deletefile('oldimage','EnjoyFeatures');
            $feature= EnjoyFeature::findOrFail($id)->delete();
            $notification = array(
                'message_id' => ' Successfully',
                'alert-type' => 'warning'
            );
            return redirect()->route('Features.index')->with($notification);
        }
        $feature= EnjoyFeature::findOrFail($id)->delete();
        $notification = array(
            'message_id' => ' Successfully',
            'alert-type' => 'warning'
        );
        return redirect()->route('Features.index')->with($notification);
    }
}
