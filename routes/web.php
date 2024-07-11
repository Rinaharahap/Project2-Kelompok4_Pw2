<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\JenisController;
use App\Http\Controllers\KampusController;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\AreaParkirController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome2');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/jenis', [JenisController::class, 'index'])->name('jenis.index')->middleware('auth','admin');
Route::post('/jenis/store', [JenisController::class, 'store'])->name('jenis.store')->middleware('auth','admin');
Route::post('/jenis/update/{id}', [JenisController::class, 'update'])->name('jenis.update')->middleware('auth','admin');
Route::get('/jenis/edit/{id}', [JenisController::class, 'edit'])->name('jenis.edit')->middleware('auth','admin');
Route::get('/jenis/delete/{id}', [JenisController::class, 'destroy'])->name('jenis.destroy')->middleware('auth','admin');
Route::get('/jenis/show/{id}', [JenisController::class, 'show'])->name('jenis.show')->middleware('auth','admin');

Route::get('/kampus', [KampusController::class, 'index'])->name('kampus.index')->middleware('auth','admin');
Route::post('/kampus/store', [KampusController::class, 'store'])->name('kampus.store')->middleware('auth','admin');
Route::post('/kampus/update/{id}', [KampusController::class, 'update'])->name('kampus.update')->middleware('auth','admin');
Route::get('/kampus/edit/{id}', [KampusController::class, 'edit'])->name('kampus.edit')->middleware('auth','admin');
Route::delete('/kampus/delete/{id}', [KampusController::class, 'destroy'])->name('kampus.destroy')->middleware('auth','admin');
Route::get('/kampus/show/{id}', [KampusController::class, 'show'])->name('kampus.show')->middleware('auth','admin');

Route::get('/kendaraan', [KendaraanController::class, 'index'])->name('kendaraan.index')->middleware('auth','admin');
Route::post('/kendaraan/store', [KendaraanController::class, 'store'])->name('kendaraan.store')->middleware('auth','admin');
Route::put('/kendaraan/update/{id}', [KendaraanController::class, 'update'])->name('kendaraan.update')->middleware('auth','admin');
Route::get('/kendaraan/edit/{id}', [KendaraanController::class, 'edit'])->name('kendaraan.edit')->middleware('auth','admin');
Route::delete('/kendaraan/delete/{id}', [KendaraanController::class, 'destroy'])->name('kendaraan.destroy')->middleware('auth','admin');
Route::get('/kendaraan/show/{id}', [KendaraanController::class, 'show'])->name('kendaraan.show')->middleware('auth','admin');

Route::get('/transaksi', [TransaksiController::class, 'index'])->name('transaksi.index')->middleware('auth','admin');
Route::post('/transaksi/store', [TransaksiController::class, 'store'])->name('transaksi.store')->middleware('auth','admin');
Route::get('/transaksi/edit/{id}', [TransaksiController::class, 'edit'])->name('transaksi.edit')->middleware('auth','admin');
Route::put('/transaksi/update/{id}', [TransaksiController::class, 'update'])->name('transaksi.update')->middleware('auth','admin');
Route::delete('/transaksi/delete/{id}', [TransaksiController::class, 'destroy'])->name('transaksi.destroy')->middleware('auth','admin');
Route::get('/transaksi/show/{id}', [TransaksiController::class, 'show'])->name('transaksi.show')->middleware('auth','admin');

Route::get('/area_parkir', [AreaParkirController::class, 'index'])->name('area_parkir.index')->middleware('auth');
Route::get('/area_parkir/create', [AreaParkirController::class, 'create'])->name('area_parkir.create')->middleware('auth','admin');
Route::put('/area_parkir/update/{id}', [AreaParkirController::class, 'update'])->name('area_parkir.update')->middleware('auth','admin');
Route::post('/area_parkir/store', [AreaParkirController::class, 'store'])->name('area_parkir.store')->middleware('auth');
Route::get('/area_parkir/edit/{id}', [AreaParkirController::class, 'edit'])->name('area_parkir.edit')->middleware('auth','admin');
Route::get('/area_parkir/show/{id}', [AreaParkirController::class, 'show'])->name('area_parkir.show')->middleware('auth','admin');
Route::delete('/area_parkir/destroy/{id}', [AreaParkirController::class, 'destroy'])->name('area_parkir.destroy')->middleware('auth','admin');



