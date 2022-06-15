<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GeneroController;

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
    return view('demo');
});

Route::get('/admin', [AdminController::class, 'admin']);
Route::get('/books', [AdminController::class, 'books']);
Route::get('/users', [AdminController::class, 'users']);

//Generos
Route::get('/generos', [GeneroController::class, 'generos'])->name('generos'); //name: es para poder acceder desde cualquier parte
Route::get('/generos/nuevo', [GeneroController::class, 'create'])->name('generoNuevo');
Route::post('/generos/storeGenero', [GeneroController::class, 'store'])->name('createGenero');
Route::get('/generos/{cod_gen}', [GeneroController::class, 'view'])->name('viewGenero');
Route::post('/generos/updateGenero', [GeneroController::class, 'update'])->name('updateGenero');
Route::get('/delete/{cod_gen}', [GeneroController::class, 'delete'])->name('deleteGenero');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
