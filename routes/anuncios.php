<?php

use App\Http\Controllers\Anuncios\AnunciosController;
use Illuminate\Support\Facades\Route;

Route::get('anuncios', [AnunciosController::class, 'index']);
Route::group(['middleware' => 'auth:api'], function () {
    Route::post('anuncio', [AnunciosController::class, 'store']);
});
