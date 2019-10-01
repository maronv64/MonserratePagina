<?php

namespace App\Http\Controllers;

use App\RelacionTipoEEst;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RelacionTipoEEstController extends Controller
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
        $items=new RelacionTipoEEst();
        $items->id_tipo_estudiante=$request->id_tipo_estudiante;
        $items->id_estudiante=$request->id_estudiantes;
        $items->estado_del="A";
        $items->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\RelacionTipoEEst  $relacionTipoEEst
     * @return \Illuminate\Http\Response
     */
    public function show(RelacionTipoEEst $relacionTipoEEst)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\RelacionTipoEEst  $relacionTipoEEst
     * @return \Illuminate\Http\Response
     */
    public function edit(RelacionTipoEEst $relacionTipoEEst)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\RelacionTipoEEst  $relacionTipoEEst
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $items=RelacionTipoEEst::where("id",$request->id)->first();
        $items->id_tipo_estudiante=$request->id_tipo_estudiante;
        $items->id_estudiante=$request->id_estudiante;
        $items->update();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\RelacionTipoEEst  $relacionTipoEEst
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $items=RelacionTipoEEst::where("id",$id)->first();
        $items->estado_del="E";
        $items->update();
    }
}