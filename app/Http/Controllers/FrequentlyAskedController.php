<?php

namespace App\Http\Controllers;

use App\Models\EnjoyFeature;
use App\Models\FrequentlyAsked;
use Illuminate\Http\Request;

class FrequentlyAskedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $Askeds = FrequentlyAsked::all();
       return view('pages.FrequentlyAsked.index',compact('Askeds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.FrequentlyAsked.create');
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
            'asked'                      =>  'required',
            'Answer'                     =>  'required',


        ]);

        try {
            FrequentlyAsked::create([
                'asked'            =>  $request->asked,
                'Answer'           =>  $request->Answer,

            ]);

            $notification = array(
                'message_id' => ' Successfully',
                'alert-type' => 'info'
            );
            return redirect()->route('Asked.index')->with($notification);
        }catch (\Exception $e) {

            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FrequentlyAsked  $frequentlyAsked
     * @return \Illuminate\Http\Response
     */
    public function show(FrequentlyAsked $frequentlyAsked)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FrequentlyAsked  $frequentlyAsked
     * @return \Illuminate\Http\Response
     */
    public function edit(FrequentlyAsked $frequentlyAsked,$id)
    {
      $asked = FrequentlyAsked::findOrFail($id);
        return view('pages.FrequentlyAsked.edit',compact('asked'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FrequentlyAsked  $frequentlyAsked
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, FrequentlyAsked $frequentlyAsked)
    {

        $validtion = $request->validate([
            'asked'                    =>  'required',
            'Answer'                =>  'required',


        ]);

        try {
            $asked = FrequentlyAsked::findOrFail($id);
                 $asked->update([
                    'asked'            =>  $request->asked,
                    'Answer'           =>  $request->Answer,

                ]);

                $notification = array(
                    'message_id' => ' Successfully',
                    'alert-type' => 'info'
                );
                return redirect()->route('Asked.index')->with($notification);
            }catch (\Exception $e) {

            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FrequentlyAsked  $frequentlyAsked
     * @return \Illuminate\Http\Response
     */
    public function destroy(FrequentlyAsked $frequentlyAsked ,$id)
    {
        try {
            $asked = FrequentlyAsked::findOrFail($id)->delete();


            $notification = array(
                'message_id' => ' Successfully',
                'alert-type' => 'wairng'
            );
            return redirect()->route('Asked.index')->with($notification);
        }catch (\Exception $e) {

            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
}
