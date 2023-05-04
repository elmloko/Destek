<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\TecnicoController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\TicketController\buscar;



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

Route::get('', function () {
    return view('auth.login');
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/volver', 'HomeController@volver')->name('volver');


Auth::routes();

Route::get('/perfil/editar', 'PerfilController@editar')->name('perfil.editar');
Route::put('/perfil/actualizar', 'PerfilController@actualizar')->name('perfil.actualizar');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/tickets', 'TicketController@index')->name('tickets.index');
Route::get('/tickets/buscar', [TicketController::class, 'buscar'])->name('tickets.buscar');



Route::group(['middleware' => ['auth']], function() {
    Route::resource('/roles', RolController::class);
    Route::resource('/usuarios', UsuarioController::class);
    Route::resource('/areas', AreaController::class);
    Route::resource('/tecnicos', TecnicoController::class);
    Route::resource('/tickets', TicketController::class);
    


});