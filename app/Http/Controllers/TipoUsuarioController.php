<?php

namespace App\Http\Controllers;

use App\TipoUsuario;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TipoUsuarioController extends Controller
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
        $items=TipoUsuario::Where("estado_del","A")->get();
        
      
        return view("admin.Tipo_Usuario.Form_TipoUsuario" ,["lista_tipoUsuario"=>$items]);
        //return view ("admin.Tipo_Usuario.Form_Tipousuario");
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
        $items=new TipoUsuario();
        $items->descripcion=$request->descripcion;
        $items->estado_del="A";
        $items->save();
        //echo $items;
        return redirect('/tipo_usuario') ;
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TipoUsuario  $tipoUsuario
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item =TipoUsuario::where("id",$id)->first();
        return response()->json($item);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TipoUsuario  $tipoUsuario
     * @return \Illuminate\Http\Response
     */
    public function edit(TipoUsuario $tipoUsuario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TipoUsuario  $tipoUsuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $item =TipoUsuario::where("id",$request->id)->first();
        $item->descripcion=$request->descripcion;
        $item->update();
        return redirect('/tipo_usuario');   
        return $request;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TipoUsuario  $tipoUsuario
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item =TipoUsuario::where("id",$id)->first();
        $item->estado_del="E";
        $item->update();
        return redirect('/tipo_usuario');  
    } 
}
