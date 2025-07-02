<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('mahasiswa', MahasiswaController::class);
Route::get('mahasiswa/pdf', [MahasiswaController::class, 'exportPdf'])->name('mahasiswa.pdf');

Route::get('/mahasiswa/pdf-preview', function () {
    $mahasiswas = Mahasiswa::all();
    return view('mahasiswa.pdf', compact('mahasiswas'));
});