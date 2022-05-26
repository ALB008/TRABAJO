<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\Controller_name;

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
    return view('index');
});

Route::get('/admin', [AdminController::class, 'admin']);
Route::get('/books', [AdminController::class, 'books']);
Route::get('/users', [AdminController::class, 'users']);


