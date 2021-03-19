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
//Vistas sin loguearse
Route::get('login', [UsuarioController::class, 'login']);
Route::get('register', [UsuarioController::class, 'register']);
Route::get('preferences', [CategoriaController::class, 'preferences']);

//Vistas con logueo
Route::get('home', [UsuarioController::class, 'home']);
Route::get('viewProduct/{id}', [ProductoController::class, 'viewProduct']);
Route::get('myArticules', [ProductoController::class, 'myArticules']);
Route::get('sell', [ProductoController::class, 'sell']);
Route::get('/user/edit', [UsuarioController::class, 'editUser']);
Route::get('/user/phone', [TelefonoController::class, 'editPhone']);

//Rutas DEL CPANEL
Route::get('/admin/viewUsers', [UsuarioController::class, 'viewUsers']);
Route::get('/admin/category', [CategoriaController::class, 'admon']);
Route::get('/admin/complaint', [DenunciaController::class, 'admon']);
Route::get('/admin/viewsPage', [VisitasController::class, 'viewsPage']);

//VistasExtras despues de algun formulario
Route::get('/admin/editCategory', [CategoriaController::class, 'editCategory']); //Formulario luego de la ruta /admin/category
Route::get('/user/editPhone', [TelefonoController::class, 'modifiedPhone']); //Formulario luego de la ruta /user/phone'
Route::get('editProduct', [ProductoController::class, 'editProduct']); //Formulario luego de la ruta /myArticules
Route::get('cover', [UsuarioController::class, 'cover']); //Seleccionar imagen /sell

//Vistas->FOOTER
Route::get('serviceConditions', [VisitasController::class, 'conditions']);
Route::get('privacyPolicy', [VisitasController::class, 'privacy']);
Route::get('conductingBusiness', [VisitasController::class, 'conducting']);
Route::get('cars', [VisitasController::class, 'cars']);
Route::get('platformUsage', [VisitasController::class, 'platform']);
Route::get('classified', [VisitasController::class, 'classified']);

//programacion
Route::post('loginRegister/', [UsuarioController::class, 'loginRegister'])->name('user.loginregister'); //Proceso del primer input en la vista welcome
Route::post('plogin/', [UsuarioController::class, 'plogin'])->name('user.plogin'); //Proceso de login
Route::post('Pregister/', [UsuarioController::class, 'Pregister'])->name('user.Pregister'); //Proceso del registro
Route::post('admonPreferences/', [CategoriaController::class, 'admonPreferences'])->name('categorie.admonPreferences'); //Proceso de las preferencias (crear cookies)

//Proteccion de rutas de programacion
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
