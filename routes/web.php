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
//Vistas
Route::get('login', [UsuarioController::class, 'login']);
Route::get('register', [UsuarioController::class, 'register']);
Route::get('preferences', [UsuarioController::class, 'preferences']);
Route::get('home', [UsuarioController::class, 'home']);
Route::get('/admin/viewUsers', [UsuarioController::class, 'viewUsers']);
Route::get('preferences', [CategoriaController::class, 'preferences']);
Route::get('/admin/category', [CategoriaController::class, 'admon']);
Route::get('myArticules', [ProductoController::class, 'myArticules']);
Route::get('sell', [ProductoController::class, 'sell']);
Route::get('cover', [UsuarioController::class, 'cover']);
Route::get('/admin/complaint', [DenunciaController::class, 'admon']);
Route::get('viewProduct/{id}', [ProductoController::class, 'viewProduct']);
Route::get('/user/edit', [UsuarioController::class, 'editUser']);
Route::get('/user/phone', [TelefonoController::class, 'editPhone']);
Route::get('/admin/viewsPage', [VisitasController::class, 'viewsPage']);
Route::get('/serviceConditions', [VisitasController::class, 'conditions']);
Route::get('privacyPolicy', [VisitasController::class, 'privacy']);
Route::get('conductingBusiness', [VisitasController::class, 'conducting']);
Route::get('cars', [VisitasController::class, 'cars']);
Route::get('platformUsage', [VisitasController::class, 'platform']);
Route::get('classified', [VisitasController::class, 'classified']);
Route::get('/admin/editCategory', [CategoriaController::class, 'editCategory']);
Route::get('/user/editPhone', [TelefonoController::class, 'modifiedPhone']);
Route::get('editProduct', [ProductoController::class, 'editProduct']);

//programacion
Route::post('loginRegister/', [UsuarioController::class, 'loginRegister'])->name('user.loginregister');
Route::post('plogin/', [UsuarioController::class, 'plogin'])->name('user.plogin');
Route::post('Pregister/', [UsuarioController::class, 'Pregister'])->name('user.Pregister');
Route::post('admonPreferences/', [CategoriaController::class, 'admonPreferences'])->name('categorie.admonPreferences');

//PRoteccion de rutas de programacion
Route::get('loginRegister', function () {
    return view('errors.404');
});
Route::get('plogin', function () {
    return view('errors.404');
});
Route::get('Pregister', function () {
    return view('errors.404');
});
Route::get('admonPreferences', function () {
    return view('errors.404');
});
