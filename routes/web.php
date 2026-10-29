<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MatakuliahController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PelangganController;

Route::resource('pelanggan', PelangganController::class);
Route::get('/dashboard', [DashboardController::class, 'index']) ->name('dashboard');
Route::post('question/store', [QuestionController::class, 'store']) ->name('question.store');
Route::get('/', function () {return view('welcome');});
Route::get('/mahasiswa/{param1}', [MahasiswaController::class, 'show']) ->name('mahasiswa.show');
Route::get('/about', function () {return view('halaman-about');});
Route::get('/home', [HomeController::class, 'index']);
Route::get('/matakuliah', [MatakuliahController::class, 'index']);
Route::get('/matakuliah/create', [MatakuliahController::class, 'create']);
Route::post('/matakuliah', [MatakuliahController::class, 'store']);
Route::get('/matakuliah/show/{kode?}', [MatakuliahController::class, 'show']);
Route::get('/matakuliah/{id}/edit', [MatakuliahController::class, 'edit']);
Route::put('/matakuliah/{id}', [MatakuliahController::class, 'update']);
Route::delete('/matakuliah/{id}', [MatakuliahController::class, 'destroy']);





