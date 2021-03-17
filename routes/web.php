<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\DenunciaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\TelefonoController;
use App\Http\Controllers\VisitasController;


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
Route::get('home', [UsuarioController::class, 'home']);
Route::get('/admin/viewUsers', [UsuarioController::class, 'viewUsers']);
Route::get('preferences', [CategoriaController::class, 'preferences']);
Route::get('/admin/category', [CategoriaController::class, 'admon']);
Route::get('/admin/complaint', [DenunciaController::class, 'admon']);
Route::get('viewProduct', [ProductoController::class, 'viewProduct']);
Route::get('/user/edit', [UsuarioController::class, 'editUser']);
Route::get('/user/phone', [TelefonoController::class, 'editPhone']);
Route::get('/admin/viewsPage', [VisitasController::class, 'viewsPage']);

