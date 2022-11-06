<?php

namespace App\Http\Controllers;

use Chart;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class PemakaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $id = Auth::user()->id;
        $data = DB::table('dataanaks as A')
                ->leftjoin('users as I', 'A.id_ibu', '=', 'I.id')
                ->where('id_ibu','=',$id)
                ->orderBy('nama_anak', 'asc')
                ->get();

        
        return view('layouts.pemakai.dataanak.mdataanak', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
   {
        $id = Auth::user()->id;
        $data = DB::table('dataanaks as A')
        ->leftjoin('users as I', 'A.id_ibu', '=', 'I.id')
        ->where('A.id_anak', $id)->first();
       
        $data1 = DB::table('dataanaks as A')
                ->leftjoin('imunisasi as M', 'A.id_anak', '=', 'M.id_anak')
                ->leftjoin('jenisimunisasi as J', 'M.id_j_imun', '=', 'J.id_j_imun')
                ->where('A.id_anak', $id)->get();
        // Grafik umur 1 - 24 bulan
        $t = DB::table('dataanaks as A')
                ->leftjoin('timbangs as T', 'A.id_anak', '=', 'T.id_anak')
                ->select('A.id_anak', 'A.nama_anak', 'T.umur', 'T.berat_badan', 'T.tinggi_badan', 'T.tgl_timbang')
                ->where('A.id_anak', $id)
                ->get();
        $data2 = DB::table('timbangs as T')
                ->leftjoin('dataanaks as A', 'T.id_anak', '=', 'A.id_anak')
                ->where('A.id_anak', $id)
                ->get();
        
        return view('layouts.pemakai.dataanak.viewank', compact('data', 'data1','data2'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
   {

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
        //
    }
}
