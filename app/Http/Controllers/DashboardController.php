<?php

namespace App\Http\Controllers;

use App\Models\Datanak;
use App\Models\Timbang;
use App\Models\Imunisasi;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreTimbangRequest;
use App\Http\Requests\UpdateTimbangRequest;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data1 = DB::table('users')
        ->where('jabatan', '=', 0)
        ->count();
        $data2 = Datanak::count();
        $data3 = Imunisasi::count();
        $data4 = DB::table('users')
                ->where('user', '=', 1)
                ->count();
            
        return view('layouts.dasboard.dasboard', compact( 'data1', 'data2', 'data3', 'data4'));
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
