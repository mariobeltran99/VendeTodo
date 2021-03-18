<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\UsuarioController;
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
    return view('welcome');
});

Route::get('login', [UsuarioController::class, 'login']);
Route::get('register', [UsuarioController::class, 'register']);
Route::get('preferences', [UsuarioController::class, 'preferences']);
Route::get('home', [UsuarioController::class, 'home']);
Route::get('/admin/viewUsers', [UsuarioController::class, 'viewUsers']);
Route::get('preferences', [CategoriaController::class, 'preferences']);
Route::get('/admin/category', [CategoriaController::class, 'admon']);
Route::get('myArticules', [UsuarioController::class, 'myArticules']);
Route::get('sell', [UsuarioController::class, 'sell']);
Route::get('cover', [UsuarioController::class, 'cover']);