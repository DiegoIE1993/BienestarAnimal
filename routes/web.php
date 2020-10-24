<?php


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RazaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EventosController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\EspeciesController;
use App\Http\Controllers\NosotrosController;
use App\Http\Controllers\EducacionController;
use App\Http\Controllers\RequisitosController;
use App\Http\Controllers\TipoEntradaController;
use App\Http\Controllers\ActitudGeneralController;
use App\Http\Controllers\AnimalesAdopcionController;
use App\Http\Controllers\CondicionGeneralController;
use App\Http\Controllers\RegistrarMascotaController;
use App\Http\Controllers\SolicitudAdopcionesController;

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

Route::get('/',[WelcomeController::class,'get_welcome']);

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

Route::resource('eventos', EventosController::class);

Auth::routes();

Route::resource('educacion', EducacionController::class);

Auth::routes();

Route::resource('animalesadopcion', AnimalesAdopcionController::class);

Auth::routes();

Route::resource('solicitudadopciones', SolicitudAdopcionesController::class);


