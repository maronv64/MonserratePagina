<?php

namespace App\Http\Controllers;

use App\MateriaController;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MateriaControllerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $items=MateriaController::Where("estado_del","A")->get();
        return view("admin.Materias.FormMaterias" ,["lista_materias"=>$items]);
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
        $materia =new MateriaController();
        $materia->descripcion=$request->descripcion;
        $materia->estado_del="A";
        $materia->save();
        //$items=Especialidades::Where("estado_del","A")->get();
        return redirect('/materia_control');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MateriaController  $materiaController
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item =MateriaController::where("id",$id)->first();
        return response()->json($item);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MateriaController  $materiaController
     * @return \Illuminate\Http\Response
     */
    public function edit(MateriaController $materiaController)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MateriaController  $materiaController
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $item=MateriaController::where("id",$request->id)->first();
        $item->descripcion=$request->descripcion;
        $item->update();
        return redirect('/materia_control');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MateriaController  $materiaController
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item =MateriaController::where("id",$id)->first();
        $item->estado_del="E";
        $item->update();
        return redirect('/materia_control');
    }
}