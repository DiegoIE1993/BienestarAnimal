<?php


use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\NosotrosController;
use App\Http\Controllers\RegistrarMascotaController;
use App\Http\Controllers\EspeciesController;

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

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Auth::routes();

Route::resource('usuarios', UserController::class);

Auth::routes();

Route::resource('nosotros', NosotrosController::class);

Auth::routes();

Route::resource('registrarmascota', RegistrarMascotaController::class);

Auth::routes();

Route::resource('especies', EspeciesController::class);

