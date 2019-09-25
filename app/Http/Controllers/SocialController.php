<?php

namespace App\Http\Controllers;

use App\Social;
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
         $items=Social::Where("estado_del","A")->get();
         return view("admin.Social.FormSocial" ,["lista_social"=>$items]);
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
        $social->tipoSocial=$request->tipoSocial;
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
        $item->tipoSocial=$request->tipoSocial;
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
        $item->update();
        return redirect('/social_form');
    }
}
