<?php

namespace App\Http\Controllers;

use App\Enlace;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EnlaceController extends Controller
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
        $items=Enlace::Where("estado_del","A")->get();
        
      
        return view("admin.Enlaces.Form_Enlace" ,["lista_Enlace"=>$items]);
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
        $items=new Enlace();
        $items->name=$request->nombre;
        $items->url=$request->url;
        $items->estado_del="A";
        $items->save();
        //echo $items;
        return redirect('/enlace') ;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Enlace  $enlace
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item =Enlace::where("id",$id)->first();
        return response()->json($item);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Enlace  $enlace
     * @return \Illuminate\Http\Response
     */
    public function edit(Enlace $enlace)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Enlace  $enlace
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Enlace $enlace)
    {
        // return $request;
        $item =Enlace::where("id",$request->id)->first();
        $item->name=$request->nombre;
        $item->url=$request->url;
        $item->update();
        return redirect('/enlace');   
        // return $request;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Enlace  $enlace
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item =Enlace::where("id",$id)->first();
        $item->estado_del="E";
        $item->update();
        return redirect('/enlace'); 
    }
}
