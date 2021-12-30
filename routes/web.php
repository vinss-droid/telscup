<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index']);

Auth::routes();

Route::get('/loginui', [HomeController::class, 'loginui'])->name('loginui');
Route::get('/regisui', [HomeController::class, 'regisui'])->name('regisui');

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/daftar-lomba', [HomeController::class, 'daftarLomba'])->name('lomba');

// Daftar Lomba
Route::get('/lomba/pubg', [HomeController::class, 'pubg'])->name('pubg');
Route::get('/lomba/ff', [HomeController::class, 'ff'])->name('ff');
Route::get('/lomba/ml', [HomeController::class, 'ml'])->name('ml');
Route::get('/lomba/poster', [HomeController::class, 'poster'])->name('poster');
Route::get('/lomba/foto', [HomeController::class, 'foto'])->name('foto');
Route::get('/lomba/musik', [HomeController::class, 'musik'])->name('musik');
Route::get('/lomba/movie', [HomeController::class, 'movie'])->name('movie');

// SETELAH LOGIN

// PENDAFTARAN LOMBA
Route::get('/pendaftaran-lomba/ff', [HomeController::class, 'pendaftaran_ff'])->name('pendaftaran_ff');
Route::get('/pendaftaran-lomba/pubg', [HomeController::class, 'pendaftaran_pubg'])->name('pendaftaran_pubg');
Route::get('/pendaftaran-lomba/ml', [HomeController::class, 'pendaftaran_ml'])->name('pendaftaran_ml');
Route::get('/pendaftaran-lomba/foto', [HomeController::class, 'pendaftaran_foto'])->name('pendaftaran_foto');
Route::get('/pendaftaran-lomba/movie', [HomeController::class, 'pendaftaran_movie'])->name('pendaftaran_movie');
Route::get('/pendaftaran-lomba/musik', [HomeController::class, 'pendaftaran_musik'])->name('pendaftaran_musik');
Route::get('/pendaftaran-lomba/poster', [HomeController::class, 'pendaftaran_poster'])->name('pendaftaran_poster');
