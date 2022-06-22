<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\CadastrosController;
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

Route::prefix('cadastros')->group(function(){
    Route::get('/', [CadastrosController::class, 'index'])->name('cadastros-index');
    Route::get('/{id}/show', [CadastrosController::class, 'show'])->name('cadastros-show');
    Route::get('/create', [CadastrosController::class, 'create'])->name('cadastros-create');
    Route::post('/', [CadastrosController::class, 'store'])->name('cadastros-store');
    Route::get('/{id}/edit', [CadastrosController::class, 'edit'])->where('id', '[0-9]+')->name('cadastros-edit');
    Route::put('/{id}', [CadastrosController::class, 'update'])->where('id', '[0-9]+')->name('cadastros-update');
    Route::delete('/{id}', [CadastrosController::class, 'destroy'])->where('id', '[0-9]+')->name('cadastros-destroy');
});
Route::get('/', [LoginController::class, 'index'])->name('login-index');

Route::fallback(function(){
    return "ERRO AO LOCALIZAR A ROTA!";
});