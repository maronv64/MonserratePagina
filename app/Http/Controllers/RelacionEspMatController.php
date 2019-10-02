<?php

namespace App\Http\Controllers;

use App\RelacionEspMat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RelacionEspMatController extends Controller
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
        $limpieza=RelacionEspMat::where("id_especialidad",$request->idEspecialidades);
        $limpieza->delete();

        $idMaterias = explode(",", $request->listaMateriasId);
        //obtener el id del estudiante.
        foreach ($idMaterias as $key => $value) {
            //echo $value;
            if(empty($value)){
                echo "no tiene datos";
            }else{
                    $item =new RelacionEspMat();
                    $item->id_especialidad=$request->idEspecialidades;
                    $item->id_materia= $value;
                    $item->estado_del="A";
                    $item->save();
            }
        }
        return redirect('/Especialidades_control');
        // return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\RelacionEspMat  $relacionEspMat
     * @return \Illuminate\Http\Response
     */
    public function show(RelacionEspMat $relacionEspMat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\RelacionEspMat  $relacionEspMat
     * @return \Illuminate\Http\Response
     */
    public function edit(RelacionEspMat $relacionEspMat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\RelacionEspMat  $relacionEspMat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RelacionEspMat $relacionEspMat)
    {
        $item=RelacionEspMat::where("id",$request->id)->first();
        $item->id_especialidad=$request->id_especialidad;
        $item->id_materia=$request->id_materia;
         $item->update();
         return redirect('/Especialidades_control');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\RelacionEspMat  $relacionEspMat
     * @return \Illuminate\Http\Response
     */
    public function destroy(RelacionEspMat $relacionEspMat)
    {
        $item =RelacionEspMat::where("id",$id)->first();
        $item->estado_del="E";
        $item->update();
        return redirect('/Especialidades_control');
    }
}
