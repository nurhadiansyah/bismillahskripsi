<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jenisimunisasi;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class JenisImunisasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('jenisimunisasi')
                ->orderBy('umur', 'asc')
                ->get();

        return view('layouts.jenisimunisasi.mjenisimunisasi',  compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.jenisimunisasi.mjenisimunisasi');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data             = new Jenisimunisasi;
        $data->nama_imun  = $request->get('nama_imun');
        $data->umur       = $request->get('umur');
        $data->save();

        return redirect()->route('Jimunisasi.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Jenisimunisasi::where('id_j_imun', $id)->first();
        $data->delete();
        return redirect()->route('Jimunisasi.index')->with(['success' => 'Data Berhasil Di Hapus']);
    }
    
}
