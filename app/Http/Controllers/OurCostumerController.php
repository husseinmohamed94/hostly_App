<?php

namespace App\Http\Controllers;

use App\Models\OurCostumer;
use Illuminate\Http\Request;

class OurCostumerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $costumers = OurCostumer::all();
        return view('pages.OurCostumer.index',compact('costumers'));
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
     * @param  \App\Models\OurCostumer  $ourCostumer
     * @return \Illuminate\Http\Response
     */
    public function show(OurCostumer $ourCostumer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OurCostumer  $ourCostumer
     * @return \Illuminate\Http\Response
     */
    public function edit(OurCostumer $ourCostumer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OurCostumer  $ourCostumer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OurCostumer $ourCostumer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OurCostumer  $ourCostumer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request ,$id)
    {
        OurCostumer::findOrFail($id)->delete();
        $notification = array(
            'message_id' => 'Product update  Successfully',
            'alert-type' => 'info'
        );
        return redirect()->back()->with($notification);;
    }
}
