<?php

namespace App\Http\Controllers;

use App\RelacionMatTP;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RelacionMatTPController extends Controller
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
        $item =new RelacionMatTP();
        $item->id_materia=$request->id_materia;
        $item->id_tipopersonal=$request->id_tipopersonal;
        $item->estado_del="A";
        $item->save();
        return redirect('/materia_control');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\RelacionMatTP  $relacionMatTP
     * @return \Illuminate\Http\Response
     */
    public function show(RelacionMatTP $relacionMatTP)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\RelacionMatTP  $relacionMatTP
     * @return \Illuminate\Http\Response
     */
    public function edit(RelacionMatTP $relacionMatTP)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\RelacionMatTP  $relacionMatTP
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RelacionMatTP $relacionMatTP)
    {
        $item=RelacionMatTP::where("id",$request->id)->first();
        $item->id_materia=$request->id_materia;
        $item->id_tipopersonal=$request->id_tipopersonal;
         $item->update();
         return redirect('/materia_control');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\RelacionMatTP  $relacionMatTP
     * @return \Illuminate\Http\Response
     */
    public function destroy(RelacionMatTP $relacionMatTP)
    {
        $item =RelacionMatTP::where("id",$id)->first();
        $item->estado_del="E";
        $item->update();
        return redirect('/materia_control');
    }
}
