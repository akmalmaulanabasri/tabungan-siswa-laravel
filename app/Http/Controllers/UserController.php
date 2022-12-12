<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('dashboard.user.index', compact('users'));
    }

    public function store(Request $request)
    {
        $form_data = $request->validate(
            [
                'nis' => 'required|numeric|unique:users,nis',
                'name' => 'required',
                'email' => 'required|email:dns|unique:users,email',
            ],[
                'nis.required' => 'NIS tidak boleh kosong',
                'nis.numeric' => 'NIS harus berupa angka',
                'nis.unique' => 'NIS sudah terdaftar',
                'name.required' => 'Nama tidak boleh kosong',
                'email.required' => 'Email tidak boleh kosong',
                'email.email' => 'Email tidak valid',
                'email.unique' => 'Email sudah terdaftar',
            ]
        );

        // nis = 12108292
        // name = akmal maulana basri
        // user_id = akma8292

        $form_data['user_id'] = strtolower(substr($form_data['name'], 0, 4)) . substr($form_data['nis'], -4); 
        $form_data['username'] = strtolower(substr($form_data['name'], 0, 4)) . substr($form_data['nis'], -4); 
        $form_data['password'] = strtolower(substr($form_data['name'], 0, 4)) . substr($form_data['nis'], -4); 


        User::create($form_data);

        return redirect()->route('dashboard.user')->with('success', 'User berhasil ditambahkan');

    }
}
