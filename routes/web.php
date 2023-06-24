<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\siswaController;

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

// Route::get('/siswa', function () {
//     // return view('siswa.index');
// });

Route::get('/siswa', [siswaController::class, 'index']);
Route::get('/siswa/form/', [siswaController::class, 'create'])->name('addsiswa');


Route::get('/contoh', function () {
    $siswa = ['Andi','Budi','Susi','Linda'];
    // $siswa = "Andi";

    return view('contoh')->with('nama',$siswa);
});
