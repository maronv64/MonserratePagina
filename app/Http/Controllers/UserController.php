<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\TipoUsuario;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
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
        $items=User::Where("estado_del","A")->get();
        
        $items2=TipoUsuario::Where("estado_del","A")->get();
        return view("admin.Usuario.Form_Usuario" ,["lista_usuario"=>$items,"lista_tipoUsuario"=>$items2]);
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
        // return $request;
        $items=new User();
        $items->idtipo=$request->idtipo;
        $items->name=$request->nombre;
        $items->email=$request->email;
        $items->password=Hash::make($request->contraseña);
        $items->estado_del="A";
        $items->save();
        //echo $items;
        return redirect('/users') ;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item =User::where("id",$id)->first();
        return response()->json($item);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $items =User::where("id",$request->id)->first();
        $items->name=$request->nombre;
        $items->email=$request->email;
        $items->password=bcrypt($request->contraseña);
        $items->estado_del="A";
        $items->update();
        //echo $items;
         return redirect('/users') ;
        // return $request;
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item =User::where("id",$id)->first();
        $item->estado_del="E";
        $item->update();
        return redirect('/users');  
    }
}
