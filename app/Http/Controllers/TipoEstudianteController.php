<?php

namespace App\Http\Controllers;

use App\TipoEstudiante;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TipoEstudianteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items=TipoEstudiante::where("estado_del","A")->get();
        return view("admin.TipoEstudiante.FormTipoEstudiante",["listaTipoEstudiante"=>$items]);
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
        $items=new TipoEstudiante();
        $items->descripcion=$request->descripcion;
        $items->estado_del="A";
        $items->save();
        return redirect('/tipo_estudiante'); 
        // $items=TipoEstudiante::where("estado_del","A")->get();
        // return view("admin.TipoEstudiante.FormTipoEstudiante",["listaTipoEstudiante"=>$items]);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TipoEstudiante  $tipoEstudiante
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item =TipoEstudiante::where("id",$id)->first();
        return response()->json($item);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TipoEstudiante  $tipoEstudiante
     * @return \Illuminate\Http\Response
     */
    public function edit(TipoEstudiante $tipoEstudiante)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TipoEstudiante  $tipoEstudiante
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $item=TipoEstudiante::where("id",$request->id)->first();
        $item->descripcion=$request->descripcion;
        $item->update();
        return redirect('/tipo_estudiante');
        
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TipoEstudiante  $tipoEstudiante
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $items=TipoEstudiante::where("id",$id)->first();
        $items->estado_del="E";
        $items->update();
        return redirect('/tipo_estudiante'); 
        // $items=TipoEstudiante::where("estado_del","A")->get();
        // return view("admin.TipoEstudiante.FormTipoEstudiante",["listaTipoEstudiante"=>$items]);
        // echo "funcion destroy";
        // return;
    }
    public function filtro($data="")
    {
        $items=TipoEstudiante::where([["estado_del","A"],["descripcion","like","%$data%"]])->get();
        return response()->json($items);
    }
}
