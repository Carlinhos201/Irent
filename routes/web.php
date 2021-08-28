<?php

use App\Http\Controllers\Anuncios\AnunciosController;
use App\Http\Controllers\Login\LoginController;
use App\Http\Controllers\Cidades\CidadesController;
use App\Http\Controllers\Login\LoginController as LoginLoginController;
use Illuminate\Support\Facades\Auth;
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

Route::group(['middleware' => ['auth']], function () {


    Route::get('/', function () {
        return view('anuncios.anuncios');
    });
});
// Route::get('estados', [CidadesController::class, 'pegarEstados']);
Route::get('cidades/', [CidadesController::class, 'index']);

Route::get('criar-conta', function () {
    return view('auth.register');
});

Route::get('/oi', function () {
    return view('welcome');
});


Auth::routes();
