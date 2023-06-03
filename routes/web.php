<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\Guru\SoalController;
use App\Http\Controllers\Guru\NilaiController;
use App\Http\Controllers\Siswa\KuisController;
use App\Http\Controllers\Guru\HomeGuruController;
use App\Http\Controllers\Siswa\HomeSiswaController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::resource('/siswa', [App\Http\Controllers\SiswaController::class]);

// Route::resource('admin', [App\Http\Controllers\AdminController::class])->only([
//     'show'
// ]);

Route::get('/pageAdmin', [App\Http\Controllers\PageController::class, 'admin'])->middleware('auth:admin');
Route::get('/pageGuru', [App\Http\Controllers\PageController::class, 'guru'])->middleware('auth:guru');
Route::get('/pageSiswa', [App\Http\Controllers\PageController::class, 'siswa'])->middleware('auth:siswa');

// Route::resource('/guru', GuruController::class)->middleware('auth:admin');
// Route::resource('/siswa', SiswaController::class)->middleware('auth:admin');
// Route::resource('/kelas', KelasController::class)->middleware('auth:admin');

Route::get('/login',[AuthController::class, 'login'])->name('login');
Route::post('/login',[AuthController::class, 'proccessLogin']);
Route::get('/logout',[AuthController::class, 'logout'])->name('logout');

Route::group(['prefix' => 'admin'], function () {
    Route::get('/', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.index')->middleware('auth:admin');
    Route::resource('/data-guru', GuruController::class)->middleware('auth:admin');
    Route::resource('/data-siswa', SiswaController::class)->middleware('auth:admin');
    Route::resource('/data-kelas', KelasController::class)->middleware('auth:admin');
});

//Guru
Route::group(['prefix' => 'guru'], function () {
    Route::get('/', [HomeGuruController::class, 'index'])->name('guru.dashboard')->middleware('auth:guru');
    Route::get('/kategori', [SoalController::class, 'createKategori'])->name('soal.createKategori')->middleware('auth:guru');
    Route::resource('/soal', SoalController::class)->middleware('auth:guru');
    Route::get('nilai/cetak', [NilaiController::class, 'cetak_pdf'])->name('nilai.cetak_pdf')->middleware('auth:guru');
    Route::resource('/nilai', NilaiController::class)->middleware('auth:guru');
});

//Siswa
Route::group(['prefix' => 'siswa'], function () {
    Route::get('/', [HomeSiswaController::class, 'index'])->name('siswa.dashboard')->middleware('auth:siswa');
    Route::get('kuis/home', [KuisController::class, 'tampil_kuis'])->name('kuis.tampil_kuis')->middleware('auth:siswa');
    Route::resource('/kuis', KuisController::class)->middleware('auth:siswa');
    // Route::get('/kuis', KuisController::class,'store')->name('siswa.kuis.store');

    Route::get('/materi', function () {
        return view('siswa.materi');
    });

});

