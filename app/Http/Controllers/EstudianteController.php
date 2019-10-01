<?php

namespace App\Http\Controllers;

use App\Estudiante;
use App\TipoEstudiante;
use App\Especialidades;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EstudianteController extends Controller
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
        $items=Estudiante::with(["lista_tipos","especialidad"])->where("estado_del","A")->get();
        // return response()->json($items);

        $items2=Especialidades::Where("estado_del","A")->get();
        $items3=TipoEstudiante::where("estado_del","A")->get();

        return view("admin.Estudiantes.FormEstudiante",["listaEstudiante"=>$items,"lista_TipoEspecialidad"=>$items2,"lista_TipoEstudiante"=>$items3]);
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
        $items=new Estudiante();
        $items->nombre=$request->nombre;
        $items->apellido=$request->apellido;
        $items->cedula=$request->cedula;
        $items->idEspecialidad=$request->idespecialidad;
        $items->estado_del="A";
        $items->save();
        return redirect('/estudiante'); 
        // echo $items;
        // return;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item =Estudiante::with(["lista_tipos","especialidad"])->where("id",$id)->first();
        return response()->json($item);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function edit(Estudiante $estudiante)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    //update
    public function update(Request $request,$id)
    {
        $items=Estudiante::where("id",$request->id)->first();
        $items->nombre=$request->nombre;
        $items->apellido=$request->apellido;
        $items->cedula=$request->cedula;
        $items->idEspecialidad=$request->idespecialidad;
        $items->update();
        return redirect('/estudiante');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $items=Estudiante::where("id",$id)->first();
        $items->estado_del="E";
        $items->update();
        return redirect('/estudiante');
    
    }
}
