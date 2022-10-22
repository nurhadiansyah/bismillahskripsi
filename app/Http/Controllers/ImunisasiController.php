<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Jenisimunisasi;
use App\Models\Imunisasi;
use App\Models\Datanak;

class ImunisasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('imunisasi as M')
        ->leftjoin('dataanaks as A', 'M.id_anak', '=', 'A.id_anak')
        ->leftjoin('users as I', 'A.id_ibu', '=', 'I.id')
        ->leftjoin('jenisimunisasi as J', 'M.id_j_imun', '=', 'J.id_j_imun')
        ->select('M.id_imun', 'A.nama_anak', 'J.nama_imun', 'M.tgl_imun', 'M.booster', 'M.ket_imun')
        ->orderBy('id_imun', 'asc')
        ->get();
        return view ('layouts.imunisasi.imunisasi', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = DB::table('dataanaks as A')
                ->leftjoin('users as I', 'A.id_ibu', '=', 'I.id')
                ->orderBy('nama_anak', 'asc')
                ->get();
        $data2 = jenisimunisasi::all();
        return view ('layouts.imunisasi.createimunisasi', compact('data', 'data2'));
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
        $imun = $request->get('id_j_imun');
        for ($i=0; $i < count($imun); $i++){
            $data            = new Imunisasi;
            $data->id_anak   = $request->get('id_anak');
            $data->id_j_imun = $imun[$i];
            $data->tgl_imun  = $request->get('tgl_imun');
            $data->booster   = $request->get('booster');
            $data->ket_imun  = $request->get('ket_imun');
            $data->save();
        }

        return redirect()->route('Imunisasis.index')->with(['success' => 'Data Berhasil Di Tambah']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = DB::table('imunisasi as M')
        ->leftjoin('dataanaks as A', 'M.id_anak', '=', 'A.id_anak')
        ->leftjoin('users as I', 'A.id_ibu', '=', 'I.id')
        ->leftjoin('jenisimunisasi as J', 'M.id_j_imun', '=', 'J.id_j_imun')
        ->select('M.id_imun', 'A.nama_anak', 'J.nama_imun', 'M.tgl_imun', 'M.booster', 'M.ket_imun')
        ->orderBy('id_imun', 'asc')
        ->get();
        return view ('layouts.imunisasi.cetakimunisasi', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = DB::table('imunisasi as M')
        ->leftjoin('dataanaks as A', 'M.id_anak', '=', 'A.id_anak')
        ->leftjoin('users as I', 'A.id_ibu', '=', 'I.id')
        ->leftjoin('jenisimunisasi as J', 'M.id_j_imun', '=', 'J.id_j_imun')
        ->where('M.id_imun', $id)
        ->get();
        $data1 = DB::table('dataanaks as A')
        ->leftjoin('users as I', 'A.id_ibu', '=', 'I.id')
        ->orderBy('nama_anak', 'asc')
        ->get();
        $data2 = jenisimunisasi::all();
        return view('layouts.imunisasi.editimunisasi', compact('data', 'data1', 'data2'));
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
        $data = Imunisasi::where('id_imun', $id)->first();
        $data->id_anak   = $request->get('id_anak');
        $data->id_j_imun = $request->get('id_j_imun');
        $data->tgl_imun  = $request->get('tgl_imun');
        $data->booster   = $request->get('booster');
        $data->ket_imun  = $request->get('ket_imun');
        $data->save();

        return redirect()->route('Imunisasis.index')->with(['success' => 'Data Berhasil Di Update']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Imunisasi::where('id_imun', $id)->first();
        $data->delete();
        return redirect()->route('Imunisasis.index')->with(['success' => 'Data Berhasil Di Hapus']);
    
    }
}
