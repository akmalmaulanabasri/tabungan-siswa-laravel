<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RayonController;
use App\Http\Controllers\RombelController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Route::middleware('guest')->group(function () {
    Route::get('/', [LoginController::class, 'index'])->name('login');
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login/auth', [LoginController::class, 'login'])->name('login.auth');
});

Route::middleware('isLogin')->group(function () {
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('/dashboard', [StudentController::class, 'index'])->name('dashboard');

    Route::get('/dashboard/rayon', [RayonController::class, 'index'])->name('dashboard.rayon');
    Route::post('/dashboard/rayon/add', [RayonController::class, 'store'])->name('dashboard.rayon.store');

    Route::get('/dashboard/rombel', [RombelController::class, 'index'])->name('dashboard.rombel');
    Route::post('/dashboard/rombel/add', [RombelController::class, 'store'])->name('dashboard.rombel.store');

    Route::get('/dashboard/student', [StudentController::class, 'index'])->name('dashboard.student');
    Route::post('/dashboard/student/add', [StudentController::class, 'store'])->name('dashboard.student.store');
    Route::get('/dashboard/student/destroy/{id}', [StudentController::class, 'destroy'])->name('dashboard.student.destroy');
    Route::post('/dashboard/student/update/{id}', [StudentController::class, 'update'])->name('dashboard.student.update');

    Route::post('/dashboard/student/simpan/{id}', [StudentController::class, 'simpan'])->name('dashboard.student.simpan');
    Route::post('/dashboard/student/ambil/{id}', [StudentController::class, 'ambil'])->name('dashboard.student.ambil');
});