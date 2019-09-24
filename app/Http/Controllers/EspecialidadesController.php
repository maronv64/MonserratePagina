<?php

namespace App\Http\Controllers;

use App\Especialidades;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EspecialidadesController extends Controller
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
        $items=Especialidades::Where("estado_del","A")->get();
        // echo $items;
        // return;
      
        return view("admin.Especialidades.FormEspecialidades" ,["lista_especialidades"=>$items]);
       
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
        $especialidad =new Especialidades();
        $especialidad->descripcion=$request->descripcion;
        $especialidad->estado_del="A";
        $especialidad->save();
        $items=Especialidades::Where("estado_del","A")->get();
        return view("admin.Especialidades.FormEspecialidades" ,["lista_especialidades"=>$items]);
        // echo $especialidad;
        // return;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Especialidades  $especialidades
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $item =Especialidades::where("id",$id)->first();
        return response()->json($item);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Especialidades  $especialidades
     * @return \Illuminate\Http\Response
     */
    public function edit(Especialidades $especialidades)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Especialidades  $especialidades
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        return $request;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Especialidades  $especialidades
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          $item =Especialidades::where("id",$id)->first();
          $item->estado_del="E";
          $item->update();
        //   echo $item;
          return redirect('/Especialidades_control');
          //return view("admin.Especialidades.FormEspecialidades" ,["lista_especialidades"=>$items]);
        // echo "funcion destroy";
    //    return;
    }
}
