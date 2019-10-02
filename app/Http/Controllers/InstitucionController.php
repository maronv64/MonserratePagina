<?php

namespace App\Http\Controllers;

use App\Institucion;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Storage;

class InstitucionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items=Institucion::where("estado_del","A")->get();
        return view("admin.Institucion.FormInstitucion",["lista_institucion"=>$items]);
        //  return response()->json($items);
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
        
        $items=new Institucion ();
        $items->id=$request->id;
        $items->mision=$request->mision;
        $items->vision=$request->vision;
        $items->himno=$request->himno;

        //*************************GUARDAR UNA IMAGEN********************************************** */    
        //el archivo
        $file = $request->file('file');      
         //extraccion de los datos del archivo
         $extension = $file->getClientOriginalExtension();
        $name='institucion_'.date('Ymd').time();    
        $fileName = $name.'.'.$extension; 
        
        $img = Storage::disk('imgDisk')->put($fileName,\File::get($file));

        $items->file_name=$name;
        $items->file_ext=$extension;   
         //************************************************************************ */   

        $items->estado_del="A";
        $items->save();
        return redirect('/institucion');
        // return $extension;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Institucion  $institucion
     * @return \Illuminate\Http\Response
     */
    public function show(Institucion $institucion)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Institucion  $institucion
     * @return \Illuminate\Http\Response
     */
    public function edit(Institucion $institucion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Institucion  $institucion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Institucion $institucion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Institucion  $institucion
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item=institucion::where("id",$id)->first();
        $item->estado_del="E";
        //
        //************************Eliminar una imagen**************************************** */
        $fileName = $item->file_name.'.'.$item->file_ext;
        $ruta = public_path()."/img/biblioteca/".$fileName; 
        
        try {
            unlink($ruta);
        } catch (\Throwable $th) {
            //throw $th;
        }
        //************************************************************************************ */
        $item->update();
        return redirect('/institucion');
    }
}
