<?php

namespace App\Http\Controllers;

use App\Models\Dataibu;
use App\Models\Timbang;
use Illuminate\Http\Request;
use Illuminate\Auth\SessionGuard;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreTimbangRequest;
use App\Http\Requests\UpdateTimbangRequest;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('layouts.login.login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $req)
    {
       

        if (Auth::attempt($request->only('email','password'))){
            return redirect('/dashboard');
        }
        return redicert('/');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if ($request->email == null or $request->password == null) {
            return redirect()->back()->with(['login error' => 'Masukkan Email atau Password !']);
            
        } else {
            if (Auth::attempt([ 'email' => $request->email, 'password' => $request->password ])) {
                // $user = Dataibu::id();
                $user = DB::table('users')->where('email', $request->email)->get();
                // $user = Auth::attempt();
                // $id = Auth::id();
                // dd($user[0]->level);
                if($user[0]->level == 1){
                    return redirect()->intended('dashboard');
                    // return redirect('/dashboard');
                    // dd(1);
                } else {
                    return redirect()->intended('/pemakai');
                    // dd(2);
                }
            } else {
                return back()->with('login error','login failed');
            }
        }
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
