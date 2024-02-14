<?php

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

 
 
use App\Http\Controllers\LibrosController;
Route::get('/', [LibrosController::class, 'index'])->name('libros.index');

Route::get('/create', [LibrosController::class, 'create'])->name('libros.create');
Route::post('/store', [LibrosController::class, 'store'])->name('libros.store');
 