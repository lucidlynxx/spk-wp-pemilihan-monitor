<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataHasilAkhir;
use App\Http\Controllers\DataPerhitungan;
use App\Http\Controllers\KriteriaController;
use App\Http\Controllers\PenilaianController;
use App\Http\Controllers\AlternatifController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SubKriteriaController;
use App\Http\Controllers\SubKriteriaController1;
use App\Http\Controllers\SubKriteriaController2;
use App\Http\Controllers\SubKriteriaController3;
use App\Http\Controllers\SubKriteriaController4;
use App\Http\Controllers\SubKriteriaController5;
use App\Http\Controllers\SubKriteriaController6;
use App\Http\Controllers\UserController;

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

Route::controller(LoginController::class)->group(function () {
    Route::get('/login', 'index')->name('login')->middleware('guest');
    Route::post('/login', 'authenticate');
    Route::post('/logout', 'logout');
});

Route::controller(RegisterController::class)->group(function () {
    Route::get('/register', 'index')->middleware('guest');
    Route::post('/register', 'store');
});

Route::get('/dashboard', [HomeController::class, 'index'])->middleware('auth');

Route::resource('/dashboard/data-kriteria', KriteriaController::class)->only('index', 'edit', 'update')->middleware('auth');

Route::resource('/dashboard/data-sub-kriteria', SubKriteriaController::class)->only('index', 'edit', 'update')->middleware('auth');
Route::resource('/dashboard/data-sub-kriteria1', SubKriteriaController1::class)->only('edit', 'update')->middleware('auth');
Route::resource('/dashboard/data-sub-kriteria2', SubKriteriaController2::class)->only('edit', 'update')->middleware('auth');
Route::resource('/dashboard/data-sub-kriteria3', SubKriteriaController3::class)->only('edit', 'update')->middleware('auth');
Route::resource('/dashboard/data-sub-kriteria4', SubKriteriaController4::class)->only('edit', 'update')->middleware('auth');
Route::resource('/dashboard/data-sub-kriteria5', SubKriteriaController5::class)->only('edit', 'update')->middleware('auth');
Route::resource('/dashboard/data-sub-kriteria6', SubKriteriaController6::class)->only('edit', 'update')->middleware('auth');

Route::resource('/dashboard/data-alternatif', AlternatifController::class)->except('show', 'destroy')->middleware('auth');

Route::resource('/dashboard/data-penilaian', PenilaianController::class)->except('show', 'destroy')->middleware('auth');

Route::controller(DataPerhitungan::class)->group(function () {
    Route::get('/dashboard/data-perhitungan', 'index')->middleware('auth');
    Route::get('/dashboard/data-perhitungan/hitung', 'hitung')->middleware('auth');
});

Route::controller(DataHasilAkhir::class)->group(function () {
    Route::get('/dashboard/data-hasil-akhir', 'index')->middleware('auth');
    Route::get('/dashboard/data-hasil-akhir/print', 'printDataHasil')->middleware('auth');
});

Route::resource('/dashboard/data-user', UserController::class)->only('index')->middleware('admin');
