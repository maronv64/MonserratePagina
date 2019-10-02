<?php

namespace App\Http\Controllers;

use App\Social;
use App\TipoSocial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SocialController extends Controller
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
         $items=Social::With("tiposocial")->Where("estado_del","A")->get();
        //  return response()->json( $items);

         $items2=TipoSocial::Where("estado_del","A")->get();
         return view("admin.Social.FormSocial" ,["lista_social"=>$items, "lista_tipo_social"=>$items2]);

        //  $items=Social::Where("estado_del","A")->get();
        // //  echo $items2;
        // //  return;
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
        $social=new Social();

        //*************************GUARDAR UNA IMAGEN********************************************** */    
        //el archivo
        $file = $request->file('file');
        //extraccion de los datos del archivo
        $extension = $file->getClientOriginalExtension();
        $name='social_'.date('Ymd').time();
        $fileName = $name.'.'.$extension;
        $ruta = public_path()."/img/".$fileName; 

           $img = Storage::disk('imgDisk')->put($fileName,\File::get($file));            

           $social->file_name=$name;
           $social->file_ext=$extension;
        //************************************************************************ */

        $social->idtipo=$request->idtipo;
        $social->titulo=$request->titulo;
        $social->descripcion=$request->descripcion;
        $social->estado_del="A";
        $social->save();

        return redirect('/social_form');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Social  $social
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item =Social::where("id",$id)->first();
        return response()->json($item);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Social  $social
     * @return \Illuminate\Http\Response
     */
    public function edit(Social $social)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Social  $social
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $item=Social::where("id",$request->id)->first();
        $item->idtipo=$request->idtipo;
        $item->titulo=$request->titulo;
        $item->descripcion=$request->descripcion;
        $item->update();
       return redirect('/social_form');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Social  $social
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item=Social::where("id", $id)->first();
        $item->estado_del="E";

        //************************Eliminar una imagen**************************************** */
        $name = $item->file_name.'.'.$item->file_ext;
        $ruta = public_path()."/img/".$fileName; 
        
        try {
            unlink($ruta);
        } catch (\Throwable $th) {
            //throw $th;
        }
        //************************************************************************************ */
        $item->update();
        return redirect('/social_form');
    }
}
