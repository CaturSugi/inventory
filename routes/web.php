<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\BarangMasukController;
use App\Http\Controllers\BarangKeluarController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('layout.page.auth.login');
});

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/barang', [BarangController::class, 'index'])->name('barang.index');
    Route::post('/barang', [BarangController::class, 'store'])->name('barang.store');
    Route::get('/barang/create', [BarangController::class, 'create'])->name('barang.create');
    Route::get('/barang/edit/{barang}', [BarangController::class, 'edit'])->name('barang.edit');
    Route::put('/barang/update/{barang}', [BarangController::class, 'update'])->name('barang.update');
    Route::delete('/barang/delete/{barang}', [BarangController::class, 'delete'])->name('barang.delete');
    Route::get('/barang/{barang}', [BarangController::class, 'show']) ->name('barang.show');

    Route::get('/barangmasuk', [BarangMasukController::class, 'index'])->name('barangmasuk.index');
    Route::post('/barangmasuk', [BarangMasukController::class, 'store'])->name('barangmasuk.store');
    Route::get('/barangmasuk/create', [BarangMasukController::class, 'create'])->name('barangmasuk.create');
    Route::get('/barangmasuk/edit/{barangmasuk}', [BarangMasukController::class, 'edit'])->name('barangmasuk.edit');
    Route::put('/barangmasuk/update/{barangmasuk}', [BarangMasukController::class, 'update'])->name('barangmasuk.update');
    Route::delete('/barangmasuk/delete/{barangmasuk}', [BarangMasukController::class, 'delete'])->name('barangmasuk.delete');
    Route::get('/barangmasuk/{barangmasuk}', [BarangMasukController::class, 'show']) ->name('barangmasuk.show');
    // Route::get('/barangmasuk/cetak', [BarangMasukController::class, 'cetak'])->name('barangmasuk.cetak');
    // Route::get('/barangmasuk/cetakpdf', [BarangMasukController::class, 'cetakpdf'])->name('barangmasuk.cetakpdf');
    // Route::get('/barangmasuk/cetakexcel', [BarangMasukController::class, 'cetakexcel'])->name('barangmasuk.cetakexcel');
    // Route::get('/barangmasuk/cetakpdf/{id}', [BarangMasukController::class, 'cetakpdf'])->name('barangmasuk.cetakpdf');
    // Route::get('/barangmasuk/cetakexcel/{id}', [BarangMasukController::class, 'cetakexcel'])->name('barangmasuk.cetakexcel');

    Route::get('/barangkeluar', [BarangKeluarController::class, 'index'])->name('barangkeluar.index');
    Route::post('/barangkeluar', [BarangKeluarController::class, 'store'])->name('barangkeluar.store');
    Route::get('/barangkeluar/create', [BarangKeluarController::class, 'create'])->name('barangkeluar.create');
    Route::get('/barangkeluar/edit/{barangkeluar}', [BarangKeluarController::class, 'edit'])->name('barangkeluar.edit');
    Route::put('/barangkeluar/update/{barangkeluar}', [BarangKeluarController::class, 'update'])->name('barangkeluar.update');
    Route::delete('/barangkeluar/delete/{barangkeluar}', [BarangKeluarController::class, 'delete'])->name('barangkeluar.delete');
    Route::get('/barangkeluar/{barangkeluar}', [BarangKeluarController::class, 'show']) ->name('barangkeluar.show');

});