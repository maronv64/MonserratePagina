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
        return view("admin.Buzon.TablaBuzon");
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
        //
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
