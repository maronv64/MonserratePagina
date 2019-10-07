<?php

namespace App\Http\Controllers;

use App\Personal;
use App\TipoPersonal;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Storage;

class PersonalController extends Controller
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
        $items=Personal::with("lista_tipo_personal")->Where("estado_del","A")->get();
        $items1=TipoPersonal::Where("estado_del","A")->get();
        return view("admin.Personal.FormPersonal" ,["lista_personal"=>$items, "lista_tipo_personal"=>$items1]);
        //return response()->json($items);
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
        $personal=new Personal();

        $file = $request->file('file');
        //extraccion de los datos del archivo
        $extension = $file->getClientOriginalExtension();
        $name='personal_'.date('Ymd').time();
        $fileName = $name.'.'.$extension;

           $img = Storage::disk('imgDisk')->put($fileName,\File::get($file));            

           $personal->file_name=$name;
           $personal->file_ext=$extension;

        $personal->nombres=$request->nombres;
        $personal->apellidos=$request->apellidos;
        $personal->cedula=$request->cedula;
        $personal->titulo=$request->titulo;
        $personal->telefono=$request->telefono;
        $personal->estado_del="A";
        $personal->save();
        return redirect('/personal_form');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Personal  $personal
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item =Personal::with("lista_tipo_personal")->where("id",$id)->first();
        return response()->json($item);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Personal  $personal
     * @return \Illuminate\Http\Response
     */
    public function edit(Personal $personal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Personal  $personal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $item=Personal::where("id",$request->id)->first();
        $item->nombres=$request->nombres;
        $item->apellidos=$request->apellidos;
        $item->cedula=$request->cedula;
        $item->titulo=$request->titulo;
        $item->telefono=$request->telefono;
        $item->update();
       return redirect('/personal_form');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Personal  $personal
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item=Personal::where("id", $id)->first();
        $item->estado_del="E";

        $fileName = $item->file_name.'.'.$item->file_ext;
        $ruta = public_path()."/img/biblioteca/".$fileName; 
        
        try {
            unlink($ruta);
        } catch (\Throwable $th) {
            //throw $th;
        }

        $item->update();
        return redirect('/personal_form');
    }
}
