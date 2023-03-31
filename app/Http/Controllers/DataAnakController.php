<?php

namespace App\Http\Controllers;

use app\Models\Dataibu;
use App\Models\Datanak;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class DataAnakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('dataanaks as A')
                ->leftjoin('users as I', 'I.id', '=', 'A.id_ibu')
                ->get();

        return view ('layouts.anak.mdataanak',compact('data'));
    }
    /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
    
    
    public function create()
    {
        $data = DB :: table('users')->select('id', 'nama_ibu', 'nama_suami')
                        ->orderBy('nama_ibu', 'asc')->get();
        return view ('layouts.anak.createanak', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data                    = new Datanak;
        $data->nama_anak         = $request->get('nama_anak');
        $data->id_ibu            = $request->get('id_ibu');
        $data->tempat_lhr        = $request->get('tempat_lhr');
        $data->tgl_lhr           = $request->get('tgl_lhr');
        $data->bb_lahir          = $request->get('bb_lahir');
        $data->tb_lahir          = $request->get('tb_lahir');
        $data->jenis_kelamin     = $request->get('jenis_kelamin');
        $data->anak_ke           = $request->get('anak_ke');
        $data->jenis_persalinan  = $request->get('jenis_persalinan');
        $data->tempat_persalinan = $request->get('tempat_persalinan');
        $data->dokter            = $request->get('dokter');
        $data->NIK_anak          = $request->get('NIK_anak');
        $data->BPJS_anak         = $request->get('BPJS_anak');
        $data->save();


        
        return redirect()->route('anaks.index',compact('data'))->with(['success' => 'Data Berhasil Di Update']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = DB::table('dataanaks as A')
                ->leftjoin('users as I', 'I.id', '=', 'A.id_ibu')
                ->get();

        return view ('layouts.anak.cetakanak',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = DB::table('dataanaks as A')
        ->leftjoin('users as I', 'I.id', '=', 'A.id_ibu')
        ->where('A.id_anak', $id)->first();
        $data2 = DB::table('users')->select('id', 'nama_ibu', 'nama_suami')->get();

        return view('layouts.anak.editanak', compact('data', 'data2'));
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
        $data = Datanak::where('id_anak', $id)->first();
        $data->nama_anak         = $request->get('nama_anak');
        $data->id_ibu            = $request->get('id_ibu');
        $data->tempat_lhr        = $request->get('tempat_lhr');
        $data->tgl_lhr           = $request->get('tgl_lhr');
        $data->bb_lahir          = $request->get('bb_lahir');
        $data->tb_lahir          = $request->get('tb_lahir');
        $data->jenis_kelamin     = $request->get('jenis_kelamin');
        $data->anak_ke           = $request->get('anak_ke');
        $data->jenis_persalinan  = $request->get('jenis_persalinan');
        $data->tempat_persalinan = $request->get('tempat_persalinan');
        $data->dokter            = $request->get('dokter');
        $data->NIK_anak          = $request->get('NIK_anak');
        $data->BPJS_anak         = $request->get('BPJS_anak');
        $data->KMS               = $request->get('KMS');
        $data->save();

        return redirect()->route('anaks.index')->with(['success' => 'Data Berhasil Di Update']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Datanak::where('id', $id)->first();
        $data->delete();
        return redirect()->route('anaks.index')->with(['success' => 'Data Berhasil Di Hapus']);
    }

    public function CetakAnak()
    {
        
    }
    public function detail($id)
    {
       
        
    }
     /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    
}
