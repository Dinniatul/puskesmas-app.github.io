<?php

use Illuminate\Support\Facades\Route; 
use App\Http\Controllers\PasienController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\PoliAnakController;
use App\Http\Controllers\PoliUmumController;
use App\Http\Controllers\PoliLansiaController;
use App\Http\Controllers\SakitController;
use App\Http\Controllers\SehatController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PasienFrontEndController;

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

Route::get('/home', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('auth');

Route::resource('pasien', PasienController::class)->middleware('auth');
Route::resource('dokter', DokterController::class)->middleware('auth');
Route::resource('polianak', PoliAnakController::class)->middleware('auth');
Route::resource('poliumum', PoliUmumController::class)->middleware('auth');
Route::resource('polilansia', PoliLansiaController::class)->middleware('auth');
Route::resource('sakit', SakitController::class)->middleware('auth');
Route::resource('sehat', SehatController::class)->middleware('auth');
Route::resource('pasienFE', PasienFrontEndController::class);


Route::post('/login', [LoginController::class,'authenticate']);
Route::get('/login', [LoginController::class,'login'])->name('login')->middleware('guest');
Route::post('/logout', [LoginController::class,'logout']);
Route::get('laporan_pasien',[PasienController::class,'cetak']);
Route::get('laporan_dokter',[DokterController::class,'cetak']);