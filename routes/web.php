<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\siswaController;
use App\Http\Controllers\jurusanController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('layout.master');
});

Route::get('/siswa', [siswaController::class, 'index']);
Route::get('/siswa/form/', [siswaController::class, 'create'])->name('addsiswa');
Route::post('/siswa', [siswaController::class, 'store']);
Route::get('/siswa/edit/{id}', [siswaController::class, 'edit']);
Route::put('/siswa/{id}', [siswaController::class, 'update']);
Route::delete('/siswa/{id}', [siswaController::class, 'destroy']);

Route::get('/jurusan', [jurusanController::class, 'index']);
Route::get('/jurusan/form/', [jurusanController::class, 'create'])->name('addjurusan');
Route::post('/jurusan', [jurusanController::class, 'store']);
Route::get('/jurusan/edit/{id}', [jurusanController::class, 'edit']);
Route::put('/jurusan/{id}', [jurusanController::class, 'update']);
Route::delete('/jurusan/{id}', [jurusanController::class, 'destroy']);


// Route::get('/contoh', function () {
//     $siswa = ['Andi','Budi','Susi','Linda'];
//     // $siswa = "Andi";

//     return view('contoh')->with('nama',$siswa);
// });
