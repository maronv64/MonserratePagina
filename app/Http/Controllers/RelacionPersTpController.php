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
        $limpieza=RelacionPersTp::where("id_personal",$request->idPersonal);
        $limpieza->delete();

        $listaTipoPersonalId = explode(",", $request->listaTipoPersonalId);
        //obtener el id del estudiante.
        foreach ($listaTipoPersonalId as $key => $value) {
            //echo $value;
            if(empty($value)){
                //echo "no tiene datos";
            }else{
                
                $items=new RelacionPersTp();
                $items->id_personal=$request->idPersonal;
                $items->id_tipopersonal=$value;
                $items->estado_del="A";
                $items->save();    
            }
            
        }
        return redirect('/personal_form');
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

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\RelacionPersTp  $relacionPersTp
     * @return \Illuminate\Http\Response
     */
    public function destroy(RelacionPersTp $relacionPersTp)
    {

    }
}
