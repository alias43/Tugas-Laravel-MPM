<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;
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
Route::get('/mahasiswa', [DataController::class, 'mahasiswaIndex'])->name('mahasiswa.index');
Route::post('/mahasiswa/store', [DataController::class, 'mahasiswaStore'])->name('mahasiswa.store');
Route::get('/mahasiswa/{id}/edit', [DataController::class, 'mahasiswaEdit'])->name('mahasiswa.edit');
Route::put('/mahasiswa/{id}', [DataController::class, 'mahasiswaUpdate'])->name('mahasiswa.update');
Route::delete('/mahasiswa/{id}', [DataController::class, 'mahasiswaDestroy'])->name('mahasiswa.destroy');

Route::get('/matakuliah', [DataController::class, 'matakuliahIndex'])->name('matakuliah.index');
Route::post('/matakuliah/store', [DataController::class, 'matakuliahStore'])->name('matakuliah.store');
Route::get('/matakuliah/{id}/edit', [DataController::class, 'matakuliahEdit'])->name('matakuliah.edit');
Route::put('/matakuliah/{id}', [DataController::class, 'matakuliahUpdate'])->name('matakuliah.update');
Route::delete('/matakuliah/{id}', [DataController::class, 'matakuliahDestroy'])->name('matakuliah.destroy');

Route::get('/', function () {
    return view('dashboard');
});

