<?php

use App\Http\Controllers\ProductionController;
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

Route::get('/', function () {
    return redirect(route('produksi.index'));
});

Route::get('/produksi', [ProductionController::class, 'index'])->name('produksi.index');
Route::get('/produksi/create', [ProductionController::class, 'create'])->name('produksi.tambah');
Route::post('/produksi/store', [ProductionController::class, 'store'])->name('produksi.store');
Route::get('/produksi/{id}', [ProductionController::class, 'show'])->name('produksi.show');
Route::get('/produksi/{id}/edit', [ProductionController::class, 'edit'])->name('produksi.edit');
Route::put('/produksi/{id}/update', [ProductionController::class, 'update'])->name('produksi.update');
Route::delete('produksi/{id}', [ProductionController::class, 'destroy'])->name('produksi.destroy');
