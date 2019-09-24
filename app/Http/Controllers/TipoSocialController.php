<?php

namespace App\Http\Controllers;

use App\TipoSocial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TipoSocialController extends Controller
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
        $items=TipoSocial::Where("estado_del","A")->get();
        // echo $items;
        // return;
      
        return view("admin.TipoSocial.FormTipoSocial" ,["lista_tipo_social"=>$items]);
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
        $tipoSocial=new TipoSocial();
        $tipoSocial->descripcion=$request->descripcion;
        $tipoSocial->estado_del="A";
        $tipoSocial->save();
        // echo $tipoSocial;
        // return;
        return redirect('/tiposocial_form');
        // $items=TipoSocial::where("estado_del","A")->get();
        // return view("admin.TipoSocial.FormTipoSocial", ["lista_tipo_social"=>$items]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TipoSocial  $tipoSocial
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $item =TipoSocial::where("id",$id)->first();
        return response()->json($item);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TipoSocial  $tipoSocial
     * @return \Illuminate\Http\Response
     */
    public function edit(TipoSocial $tipoSocial)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TipoSocial  $tipoSocial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //echo $request;
        // return $request;
         $item=TipoSocial::where("id",$request->id)->first();
          $item->descripcion=$request->descripcion;
          $item->update();
        //   return $item;
         return redirect('/tiposocial_form');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TipoSocial  $tipoSocial
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item=TipoSocial::where("id", $id)->first();
        $item->estado_del="E";
        $item->update();
        // echo $item;
        return redirect('/tiposocial_form');
        // $items=TipoSocial::where("estado_del","A")->get();
        // return view("admin.TipoSocial.FormTipoSocial", ["lista_tipo_social"=>$items]);
        // echo "funcion destroy";
        // return;
    }
}
