<?php

namespace App\Http\Controllers;

use App\Models\Dataibu;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\DB;

class DataIbuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('users')
        // ->where('jabatan', '=', 0)
        ->get();

        return view('layouts.ibu.mdataibu', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.ibu.createdataibu');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data               = new Dataibu;
        $data->nama_ibu     = $request->get('nama_ibu');
        $data->nama_suami   = $request->get('nama_suami');
        $data->tempat_lahir = $request->get('tempat_lahir');
        $data->tgl_lahir    = $request->get('tgl_lahir');
        $data->alamat       = $request->get('alamat');
        $data->rt           = $request->get('rt');
        $data->rw           = $request->get('rw');
        $data->kelurahan    = $request->get('kelurahan');
        $data->kecamatan    = $request->get('kecamatan');
        $data->No_tlp       = $request->get('No_tlp');
        $data->agama        = $request->get('agama');
        $data->NIK          = $request->get('NIK');
        $data->No_KK        = $request->get('No_KK');
        $data->No_BPJS      = $request->get('No_BPJS');
        $data->gakin        = $request->get('gakin');
        $data->email        = Str::random(10);
        $data->password     = Str::random(10);
        $data->save();


        

        // dd($request->all());

        return redirect()->route('ibus.index')->with([
            'success' => 'Data Berhasil Di Tambah'
        ]);

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
        $data = DB::table('users')
        ->where('id', $id)->get();

        return view('layouts.ibu.editibu', compact('data'));
        //return view('layouts.ibu.editibu', compact('data'));
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
        $data = Dataibu::where('id', $id)->first();
        $data->nama_ibu     = $request->get('nama_ibu');
        $data->nama_suami   = $request->get('nama_suami');
        $data->tempat_lahir = $request->get('tempat_lahir');
        $data->tgl_lahir    = $request->get('tgl_lahir');
        $data->alamat       = $request->get('alamat');
        $data->rt           = $request->get('rt');
        $data->rw           = $request->get('rw');
        $data->kelurahan    = $request->get('kelurahan');
        $data->kecamatan    = $request->get('kecamatan');
        $data->No_tlp       = $request->get('No_tlp');
        $data->agama        = $request->get('agama');
        $data->NIK          = $request->get('NIK');
        $data->No_KK        = $request->get('No_KK');
        $data->No_BPJS      = $request->get('No_BPJS');
        $data->gakin        = $request->get('gakin');
        $data->save();
        
        

        return redirect()->route('ibus.index')->with(['success' => 'Data Berhasil Di Update']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Dataibu::where('id', $id)->first();
        $data->delete();
        return redirect()->route('ibus.index')->with(['success' => 'Data Berhasil Di Hapus']);
    }
}
