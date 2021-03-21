<?php

namespace App\Http\Controllers;

use App\PortoFolio;
use Illuminate\Http\Request;

class PortoFolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $p['portofolio'] = PortoFolio::all();
        return view('portofolio.index', $p);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('portofolio.index');
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
     * @param  \App\PortoFolio  $portoFolio
     * @return \Illuminate\Http\Response
     */
    public function show(PortoFolio $portoFolio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PortoFolio  $portoFolio
     * @return \Illuminate\Http\Response
     */
    public function edit(PortoFolio $portoFolio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PortoFolio  $portoFolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PortoFolio $portoFolio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PortoFolio  $portoFolio
     * @return \Illuminate\Http\Response
     */
    public function destroy(PortoFolio $portoFolio)
    {
        //
    }
}
