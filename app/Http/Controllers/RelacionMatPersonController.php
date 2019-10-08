<?php

namespace App\Http\Controllers;

use App\RelacionMatPerson;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RelacionMatPersonController extends Controller
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
        $limpieza=RelacionMatPerson::where("id_materia",$request->idMaterias);
        $limpieza->delete();

        $listaPersonalId = explode(",", $request->listaPersonalId);
        //obtener el id del estudiante.
        foreach ($listaPersonalId as $key => $value) {
            //echo $value;
            if(empty($value)){
                //echo "no tiene datos";
            }else{
                
                $items=new RelacionMatPerson();
                $items->id_materia=$request->idMaterias;
                $items->id_personal=$value;
                $items->estado_del="A";
                $items->save();    
            }
            
        }
        return redirect('/materia_control');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\RelacionMatPerson  $relacionMatPerson
     * @return \Illuminate\Http\Response
     */
    public function show(RelacionMatPerson $relacionMatPerson)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\RelacionMatPerson  $relacionMatPerson
     * @return \Illuminate\Http\Response
     */
    public function edit(RelacionMatPerson $relacionMatPerson)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\RelacionMatPerson  $relacionMatPerson
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RelacionMatPerson $relacionMatPerson)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\RelacionMatPerson  $relacionMatPerson
     * @return \Illuminate\Http\Response
     */
    public function destroy(RelacionMatPerson $relacionMatPerson)
    {
        //
    }
}
