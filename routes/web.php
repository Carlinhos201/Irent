<?php

use App\Http\Controllers\Anuncios\AnunciosController;
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

// Route::get('/anuncios', [AnunciosController::class, 'index']);

Route::prefix('anuncios')->group(function () {
        Route::get('/', [AnunciosController::class, 'index']);
});


Route::get('/home', 'HomeController@index')->name('home');
