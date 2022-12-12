<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Rayon;
use App\Models\Rombel;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = Student::all();
        $rayon = Rayon::all();
        $rombel = Rombel::all();
        return view('dashboard.student.index', compact('users', 'rayon', 'rombel'));
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $form_data = $request->validate(
            [
                'nis' => 'required|numeric|unique:students,nis',
                'name' => 'required',
                'rombel_id' => 'required|numeric',
                'rayon_id' => 'required|numeric',
            ],
            [
                'nis.required' => 'NIS tidak boleh kosong',
                'nis.numeric' => 'NIS harus berupa angka',
                'nis.unique' => 'NIS sudah terdaftar',
                'name.required' => 'Nama tidak boleh kosong',
                'rombel_id.required' => 'Rombel tidak boleh kosong',
                'rayon_id.required' => 'Rayon tidak boleh kosong',
            ]
        );

        $form_data['user_id'] = strtolower(substr($form_data['name'], 0, 4)) . substr($form_data['nis'], -4);
        $form_data['username'] = strtolower(substr($form_data['name'], 0, 4)) . substr($form_data['nis'], -4);
        $form_data['password'] = strtolower(substr($form_data['name'], 0, 4)) . substr($form_data['nis'], -4);


        User::create([
            'user_id' => $form_data['user_id'],
            'username' => $form_data['username'],
            'name' => $form_data['name'],
            'password' => bcrypt($form_data['password']),
        ]);
        Student::create($form_data);

        return redirect()->route('dashboard.student')->with('success', 'User berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' =>'required',
            'rombel_id' =>'required',
            'rayon_id' =>'required',
        ]);

        $student = Student::where('nis', $id)->update($validated);
        // $student->update($validated);;
        return redirect(route('dashboard'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::where('user_id', $id);
        $user = User::where('user_id', $id);
        $user->delete();
        $student->delete();

        return redirect(route('dashboard'));
    }

    public function simpan(Request $request, $id){

        $request->validate([
            'nominal' =>'required',
        ]);

        $student = Student::where('nis', $id)->first();
        $saldo_tabungan = $student->saldo_tabungan + $request->nominal;

        $student->update([
            'saldo_tabungan' => $saldo_tabungan
        ]);
        return redirect(route('dashboard'));
    }

    public function ambil(Request $request, $id){

        $request->validate([
            'nominal' =>'required',
        ]);

        $student = Student::where('nis', $id)->first();
        $saldo_tabungan = $student->saldo_tabungan - $request->nominal;

        $student->update([
            'saldo_tabungan' => $saldo_tabungan
        ]);
        return redirect(route('dashboard'));
    }
}
