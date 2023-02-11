<?php

namespace App\Http\Controllers;

use App\Models\OurDomain;
use Illuminate\Http\Request;

class OurDomainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Domains = OurDomain::all();
       return view('pages.OurDomain.index',compact('Domains'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.OurDomain.create');

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
            'price'                   =>  'required',
            'details'                 =>  'required',

        ]);

        try {
            OurDomain::create([
                'name'            =>  $request->name,
                'Duration'        =>  $request->Duration,
                'price'           =>  $request->price,
                'details'            =>  $request->details,
            ]);

            $notification = array(
                'message_id' => ' Successfully',
                'alert-type' => 'info'
            );
            return redirect()->route('Domain.index')->with($notification);
        }catch (\Exception $e) {

            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OurDomain  $ourDomain
     * @return \Illuminate\Http\Response
     */
    public function show(OurDomain $ourDomain)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OurDomain  $ourDomain
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request ,$id)
    {
       $domain = OurDomain::findOrFail($id);
        return view('pages.OurDomain.edit',compact('domain'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OurDomain  $ourDomain
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id )
    {
        $validtion = $request->validate([
            'name'                    =>  'required',
            'Duration'                =>  'required',
            'price'                   =>  'required',
            'details'                 =>  'required',

        ]);

        try {
            $domain = OurDomain::findOrFail($id);
            $domain->update([
                'name'            =>  $request->name,
                'Duration'        =>  $request->Duration,
                'price'           =>  $request->price,
                'details'            =>  $request->details,
            ]);

            $notification = array(
                'message_id' => ' Successfully',
                'alert-type' => 'info'
            );
            return redirect()->route('Domain.index')->with($notification);
        }catch (\Exception $e) {

            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OurDomain  $ourDomain
     * @return \Illuminate\Http\Response
     */
    public function destroy(OurDomain $ourDomain,$id)
    {
        try {
            $domain = OurDomain::findOrFail($id)->delete();
            $notification = array(
                'message_id' => 'Delete Successfully',
                'alert-type' => 'wairng'
            );
            return redirect()->route('Domain.index')->with($notification);
        }catch (\Exception $e) {

            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
}
