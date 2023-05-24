<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\AuthController;

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

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::resource('/siswa', [App\Http\Controllers\SiswaController::class]);

// Route::resource('admin', [App\Http\Controllers\AdminController::class])->only([
//     'show'
// ]);

Route::get('/pageAdmin', [App\Http\Controllers\PageController::class, 'admin'])->middleware('auth:admin');
Route::get('/pageGuru', [App\Http\Controllers\PageController::class, 'guru'])->middleware('auth:guru');
Route::get('/pageSiswa', [App\Http\Controllers\PageController::class, 'siswa'])->middleware('auth:siswa');

Route::resource('/guru', GuruController::class)->middleware('auth:admin');
Route::resource('/siswa', SiswaController::class)->middleware('auth:admin');
Route::resource('/kelas', KelasController::class)->middleware('auth:admin');
// Route::get('siswa/kuis', [App\Http\Controllers\SiswaController::class, 'kuis']);
// Route::resource('/siswa', SiswaController::class);
// Route::get('/kuis1',function(){
//     return view('siswa.kuis1');
// });

Route::get('/materi',function(){
    return view('siswa.materi');
});

Route::get('/login',[AuthController::class, 'login'])->name('login');
Route::post('/login',[AuthController::class, 'proccessLogin']);
Route::get('/logout',[AuthController::class, 'logout']);
