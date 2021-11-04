<?php

use App\Http\Controllers\Anuncios\AnunciosController;
use App\Http\Controllers\Imagem\ImagemController;
use Illuminate\Support\Facades\Route;

Route::get('anuncios', [AnunciosController::class, 'index']);
Route::get('anuncio/{anuncio}', [AnunciosController::class, 'show']);
Route::group(['middleware' => 'auth:api'], function () {
    Route::post('anuncio', [AnunciosController::class, 'store']);
    Route::get('anunciosbyuser', [AnunciosController::class, 'getAnunciosByUserId']);
});
Route::get('imagem/{path}', [AnunciosController::class, 'get_image']);