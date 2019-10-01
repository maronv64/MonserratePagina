<?php

namespace App\Http\Controllers;

use App\TipoPersonal;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TipoPersonalController extends Controller
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
        $items=TipoPersonal::Where("estado_del","A")->get();
        return view("admin.TipoPersonal.FormTipoPersonal" ,["lista_tipo_personal"=>$items]);
        // return response()->json($items);
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
        $tipoPersonal=new TipoPersonal();
        $tipoPersonal->descripcion=$request->descripcion;
        $tipoPersonal->estado_del="A";
        $tipoPersonal->save();
       
        return redirect('/tipopersonal_form');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TipoPersonal  $tipoPersonal
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item =TipoPersonal::where("id",$id)->first();
        return response()->json($item);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TipoPersonal  $tipoPersonal
     * @return \Illuminate\Http\Response
     */
    public function edit(TipoPersonal $tipoPersonal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TipoPersonal  $tipoPersonal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $item=TipoPersonal::where("id",$request->id)->first();
        $item->descripcion=$request->descripcion;
        $item->update();
       return redirect('/tipopersonal_form');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TipoPersonal  $tipoPersonal
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item=TipoPersonal::where("id", $id)->first();
        $item->estado_del="E";
        $item->update();
       
        return redirect('/tipopersonal_form');
    }
}
