<?php

namespace App\Http\Controllers;

use App\Models\Dataibu;
use App\Models\Pengguna;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Hash;

class PenggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('users')
        ->where('user', '=', 1)
        ->orderBy('level', 'desc')
        ->get();
        return view('layouts.user.datauser', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = DB::table('users')
                ->where('user', '=', 0)
                ->get();
        return view('layouts.user.tambahuser', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = $request->get('id');
        $data = User::where('id', $id)->first();
        $data->email    = $request->get('email');
        $data->password = Hash::make($request->password);
        $data->level    = $request->get('level');
        $data->user     = 1;
        $data->save();

        return redirect()->route('pengguna.index')->with(['success' => 'Data Berhasil Di Update']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pengguna  $pengguna
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pengguna  $pengguna
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = User::where('id', $id)->get();
        $data2 = User::select('id', 'nama_ibu', 'nama_suami')->get();
        return view('layouts.user.edit', compact('data', 'data2'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pengguna  $pengguna
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $data = Dataibu::where('id', $id)->first();
        $data->email   = $request->get('email');
        $data->level = $request->get('level');
        $data->save();

        return redirect()->route('pengguna.index')->with('success', 'Data Berhasil Diupdate');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pengguna  $pengguna
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $data = User::where('id', $id)->update([
            'email'=> 'example@gmail',
            'level'=>0,
            'user'=>0
        ]);
        
        return redirect()->route('pengguna.index')->with('success', 'Data Berhasil Dihapus');
    }
}
