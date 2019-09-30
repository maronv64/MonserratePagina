<?php

namespace App\Http\Controllers;

use App\RelacionPersTp;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RelacionPersTpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $item =new RelacionPersTp();
        $item->id_TipoPersonal=$request->id_TipoPersonal;
        $item->id_personal=$request->id_personal;
        $item->estado_del="A";
        $item->save();
        return redirect('/tipopersonal_form');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\RelacionPersTp  $relacionPersTp
     * @return \Illuminate\Http\Response
     */
    public function show(RelacionPersTp $relacionPersTp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\RelacionPersTp  $relacionPersTp
     * @return \Illuminate\Http\Response
     */
    public function edit(RelacionPersTp $relacionPersTp)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\RelacionPersTp  $relacionPersTp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RelacionPersTp $relacionPersTp)
    {
        $item=RelacionPersTp::where("id",$request->id)->first();
        $item->id_tipopersonal=$request->id_tipopersonal;
        $item->id_personal=$request->id_personal;
         $item->update();
         return redirect('/tipopersonal_form');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\RelacionPersTp  $relacionPersTp
     * @return \Illuminate\Http\Response
     */
    public function destroy(RelacionPersTp $relacionPersTp)
    {
        $item =RelacionPersTp::where("id",$id)->first();
        $item->estado_del="E";
        $item->update();
        return redirect('/tipopersonal_form');
    }
}
