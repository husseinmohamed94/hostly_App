<?php

namespace App\Http\Controllers;

use App\Models\webHosting;
use Illuminate\Http\Request;

class WebHostingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $webHostings = webHosting::all();
        return view('pages.webHosting.index',compact('webHostings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.webHosting.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validtion = $request->validate([
          'name'                    =>  'required',
          'Duration'                =>  'required',
          'unmeted'                 =>  'required',
          'storage'                 =>  'required',
          'support'                 =>  'required',
          'email'                   =>  'required',
          'domain'                  =>  'required',
          'builder'                 =>  'required',
          'price'                   =>  'required',
          'Discount'                =>  'nullable',
          'Status'                 =>  'required',

        ]);

        try {
            webHosting::create([
                'name'            =>  $request->name,
                'Duration'        =>  $request->Duration,
                'unmeted'         =>  $request->unmeted,
                'storage'         =>  $request->storage,
                'support'         =>  $request->support,
                'email'           =>  $request->email,
                'domain'          =>  $request->domain,
                'builder'         =>  $request->builder,
                'price'           =>  $request->price,
                'Discount'            =>  $request->Discount,
                'Status'          =>  $request->Status,


            ]);

            $notification = array(
                'message_id' => ' Successfully',
                'alert-type' => 'info'
            );
            return redirect()->route('webhosting.index')->with($notification);
        }catch (\Exception $e) {

            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\webHosting  $webHosting
     * @return \Illuminate\Http\Response
     */
    public function show(webHosting $webHosting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\webHosting  $webHosting
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request ,$id)
    {
        $webhosting = webHosting::findOrFail($id);
        return view('pages.webHosting.edit',compact('webhosting'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\webHosting  $webHosting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, webHosting $webHosting,$id)
    {
        $validtion = $request->validate([
            'name'                    =>  'required',
            'Duration'                =>  'required',
            'unmeted'                 =>  'required',
            'storage'                 =>  'required',
            'support'                 =>  'required',
            'email'                   =>  'required',
            'domain'                  =>  'required',
            'builder'                 =>  'required',
            'price'                   =>  'required',
            'Discount'                =>  'nullable',
            'Status'                 =>  'required',

        ]);
        $webhosting = webHosting::findOrFail($id);
        try {
            $webhosting->update([
                'name'            =>  $request->name,
                'Duration'        =>  $request->Duration,
                'unmeted'         =>  $request->unmeted,
                'storage'         =>  $request->storage,
                'support'         =>  $request->support,
                'email'           =>  $request->email,
                'domain'          =>  $request->domain,
                'builder'         =>  $request->builder,
                'price'           =>  $request->price,
                'Discount'            =>  $request->Discount,
                'Status'          =>  $request->Status,


            ]);
            $notification = array(
                'message_id' => ' Successfully',
                'alert-type' => 'info'
            );
            return redirect()->route('webhosting.index')->with($notification);

        }catch (\Exception $e) {

            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\webHosting  $webHosting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $webHosting ,$id)
    {
         webHosting::findOrFail($id)->delete();
        $notification = array(
            'message_id' => '  DELETE  Successfully',
            'alert-type' => 'warning'
        );
        return redirect()->route('webhosting.index')->with($notification);
    }
}
