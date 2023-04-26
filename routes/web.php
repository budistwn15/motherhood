<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
//front
Route::get('/',\App\Http\Controllers\front\HomeController::class)->name('home');
Route::prefix('diagnosis')->group(function () {
    Route::get('/create',[\App\Http\Controllers\front\DiagnosisController::class,'create'])->name('diagnosis.create');
    Route::post('/create',[\App\Http\Controllers\front\DiagnosisController::class,'store'])->name('diagnosis.store');
    Route::get('/{kode_identitas}/gejala-penyakit',[\App\Http\Controllers\front\DiagnosisController::class,'gejala'])->name('diagnosis.gejala');
    Route::post('/{kode_identitas}/gejala-penyakit',[\App\Http\Controllers\front\DiagnosisController::class,'update'])->name('diagnosis.update');
});
Route::get('/artikel',[\App\Http\Controllers\front\ArtikelController::class,'index'])->name('front.artikel.index');
Route::get('/informasi',[\App\Http\Controllers\front\InformasiController::class,'index'])->name('front.informasi.index');

//Login
Route::get('login', [\App\Http\Controllers\Auth\LoginController::class,'showLoginForm'])->name('login');
Route::post('login', [\App\Http\Controllers\Auth\LoginController::class,'login']);
Route::post('logout', [\App\Http\Controllers\Auth\LoginController::class,'logout'])->name('logout');

//Back
Route::prefix('admin/')->middleware('auth')->group(function () {
    Route::get('/dashboard',\App\Http\Controllers\Back\DashboardController::class)->name('dashboard');

    Route::resource('gejalas', \App\Http\Controllers\Back\GejalaController::class);
    Route::resource('penyakits',\App\Http\Controllers\Back\PenyakitController::class);
    Route::resource('solusis',\App\Http\Controllers\Back\SolusiController::class);
    Route::resource('artikels', \App\Http\Controllers\Back\ArticleController::class);
    Route::resource('informasis', \App\Http\Controllers\Back\InformasiController::class);

    Route::resource('admins', \App\Http\Controllers\Back\AdminController::class)->except(['edit','update']);
    Route::get('admins/{user}/edit',[\App\Http\Controllers\Back\AdminController::class,'edit'])->name('admins.edit');
    Route::put('admins/{user}/edit',[\App\Http\Controllers\Back\AdminController::class,'update'])->name('admins.update');
    Route::delete('admins/{user}/destroy',[\App\Http\Controllers\Back\AdminController::class,'destroy'])->name('admins.destroy');

    Route::prefix('relasi')->group(function () {
        Route::get('/gejala',[\App\Http\Controllers\Back\RelasiGejalaController::class,'index'])->name('relasi-gejala.index');
        Route::get('/gejala/create',[\App\Http\Controllers\Back\RelasiGejalaController::class,'create'])->name('relasi-gejala.create');
        Route::post('/gejala/store',[\App\Http\Controllers\Back\RelasiGejalaController::class,'store'])->name('relasi-gejala.store');
        Route::get('/gejala/{gejala}/sync',[\App\Http\Controllers\Back\RelasiGejalaController::class,'sync'])->name('relasi-gejala.sync');
        Route::put('/gejala/{gejala}/update',[\App\Http\Controllers\Back\RelasiGejalaController::class,'update'])->name('relasi-gejala.update');

        Route::get('/solusi',[\App\Http\Controllers\Back\RelasiSolusiController::class,'index'])->name('relasi-solusi.index');
        Route::get('/solusi/create',[\App\Http\Controllers\Back\RelasiSolusiController::class,'create'])->name('relasi-solusi.create');
        Route::post('/solusi/store',[\App\Http\Controllers\Back\RelasiSolusiController::class,'store'])->name('relasi-solusi.store');
        Route::get('/solusi/{solusi}/sync',[\App\Http\Controllers\Back\RelasiSolusiController::class,'sync'])->name('relasi-solusi.sync');
        Route::put('/solusi/{solusi}/update',[\App\Http\Controllers\Back\RelasiSolusiController::class,'update'])->name('relasi-solusi.update');
    });
});
