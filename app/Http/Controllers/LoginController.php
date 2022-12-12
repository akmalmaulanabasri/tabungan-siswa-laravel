<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        return view('login.login');
        //
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login')->with('success-logout', 'Berhasil logout');
    }

    public function register()
    {
        return view('login.register');
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $login = $request->validate([
            'username' => 'required|max:10|exists:users,username',
            'password' => 'required'
        ],[
            'username.required' => 'username harus diisi',
            'username.exists' => 'username tidak tersedia',
            'password.required' => 'Password is required',
            'password.min' => 'Password must be at least 6 characters'
        ]);
 
        if(Auth::attempt($login)){
             $request->session()->regenerate();
             return redirect()->route('dashboard')->with('success-login', 'Login berhasil');
         }
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
        //
    }
}
