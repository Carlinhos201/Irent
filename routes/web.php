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

    Route::prefix('/')->group(function () {
        Route::get('/', [AnunciosController::class, 'index']);
        return view('anuncios.anuncios');
    });
    Route::get('pegarCidadesPorUf/{uf}', [CidadesController::class, 'pegarCidadesPorUf']);
});

// Route::get('/anuncios', [AnunciosController::class, 'index']);




// Route::get('/home', function () {
//     return view('home.home');
// });

// Route::get('/cidades', [CidadesController::class, 'index']);
// Route::get('/login', [LoginController::class, 'index']);
Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
