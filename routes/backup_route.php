<?php
use App\Http\Controllers\JenisController;
use App\Http\Controllers\KampusController;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\AreaParkirController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/jenis', [JenisController::class, 'index'])->name('jenis.index');
Route::post('/jenis/store', [JenisController::class, 'store'])->name('jenis.store');

Route::get('/kampus', [KampusController::class, 'index'])->name('kampus.index');
Route::post('/kampus/store', [KampusController::class, 'store'])->name('kampus.store');

Route::get('/kendaraan', [KendaraanController::class, 'index'])->name('kendaraan.index');
Route::post('/kendaraan/store', [KendaraanController::class, 'store'])->name('kendaraan.store');

Route::get('/transaksi', [TransaksiController::class, 'index'])->name('transaksi.index');
Route::post('/transaksi/store', [TransaksiController::class, 'store'])->name('transaksi.store');

Route::get('/area_parkir', [AreaParkirController::class, 'index'])->name('area_parkir.index');
Route::post('/area_parkir/store', [AreaParkirController::class, 'store'])->name('area_parkir.store');


