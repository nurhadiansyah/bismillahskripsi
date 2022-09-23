<?php

namespace App\Http\Controllers;

use App\Models\Timbang;
use App\Http\Requests\StoreTimbangRequest;
use App\Http\Requests\UpdateTimbangRequest;

class TimbangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreTimbangRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTimbangRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Timbang  $timbang
     * @return \Illuminate\Http\Response
     */
    public function show(Timbang $timbang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Timbang  $timbang
     * @return \Illuminate\Http\Response
     */
    public function edit(Timbang $timbang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTimbangRequest  $request
     * @param  \App\Models\Timbang  $timbang
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTimbangRequest $request, Timbang $timbang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Timbang  $timbang
     * @return \Illuminate\Http\Response
     */
    public function destroy(Timbang $timbang)
    {
        //
    }
}
