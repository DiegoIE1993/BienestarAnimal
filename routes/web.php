<?php


use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\NosotrosController;
use App\Http\Controllers\RegistrarMascotaController;
use App\Http\Controllers\EspeciesController;
use App\Http\Controllers\RazaController;
use App\Http\Controllers\TipoEntradaController;
use App\Http\Controllers\CondicionGeneralController;
use App\Http\Controllers\ActitudGeneralController;


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

Auth::routes();

Route::resource('razas', RazaController::class);

Auth::routes();

Route::resource('tipoentrada', TipoEntradaController::class);

Auth::routes();

Route::resource('condiciongeneral', CondicionGeneralController::class);

Auth::routes();

Route::resource('actitudgeneral', ActitudGeneralController::class);



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


