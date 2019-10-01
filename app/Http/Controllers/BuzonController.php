<?php

namespace App\Http\Controllers;

use App\Buzon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BuzonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items=Buzon::where("estado_del","A")->get();
        return view("admin.Buzon.TablaBuzon",["lista_buzon"=>$items]);
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
        // return $request;
        $items=new buzon ();
        $items->id=$request->id;
        $items->name=$request->nombre;
        $items->email=$request->email;
        $items->message=$request->mensage;
        $items->estado_del="A";
        $items->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Buzon  $buzon
     * @return \Illuminate\Http\Response
     */
    public function show(Buzon $buzon)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Buzon  $buzon
     * @return \Illuminate\Http\Response
     */
    public function edit(Buzon $buzon)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Buzon  $buzon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Buzon $buzon)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Buzon  $buzon
     * @return \Illuminate\Http\Response
     */
    public function destroy(Buzon $buzon)
    {
        //
    }
}
