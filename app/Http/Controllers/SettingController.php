<?php

namespace App\Http\Controllers;

use App\Http\Traits\AttachFilesTrait;
use App\Models\setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    use AttachFilesTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $colletion = setting::all();
        $setting['setting'] = $colletion->flatMap(function ($colletion){
           return [$colletion->key => $colletion->vlaue] ;

        });

        return view('pages.Setting.index',$setting);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function show(setting $setting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function edit(setting $setting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, setting $setting)
    {
        try {
            $info = $request->except('_token','_method','logo');
            foreach ($info as $key=> $value){
                setting::where('key',$key)->update(['vlaue'=> $value]);
            }
          if($request->hasFile('logo') ){
                $logo_name = $request->file('logo')->getClientOriginalName();
                setting::where('key','logo')->update(['vlaue'=> $logo_name]);
               $this->uploadFile($request,'logo','logo');

            }
          if( $request->hasFile('Cloud_Host_image')){
                $Cloud_Host_image = $request->file('Cloud_Host_image')->getClientOriginalName();
                setting::where('key','Cloud_Host_image')->update(['vlaue'=> $Cloud_Host_image]);
               $this->uploadFile($request,'Cloud_Host_image','CloudHosting');

            }




            $notification = array(
                'message_id' => ' Successfully',
                'alert-type' => 'info'
            );
            return redirect()->back()->with($notification);

        }catch (\Exception $e) {

            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function destroy(setting $setting)
    {
        //
    }
}
