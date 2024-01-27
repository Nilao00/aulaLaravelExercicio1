<?php

use App\Http\Controllers\ProductController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/produtos', [ProductController::class, 'index'])->name('product.index');
Route::get('/produtos/adicionar', [ProductController::class, 'add'])->name('product.add');
Route::post('/produtos/salvar', [ProductController::class, 'save'])->name('product.save');
Route::patch('/produtos/editar', [ProductController::class, 'update'])->name('product.edit');
Route::delete('/produtos/deletar', [ProductController::class, 'delete'])->name('product.delete');
Route::post('/produtos/buscar', [ProductController::class, 'buscar'])->name('product.search');