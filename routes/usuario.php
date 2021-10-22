<?php

use App\Http\Controllers\Usuario\UsuarioController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'auth:api'], function () {
    Route::prefix('usuario')->group(function () {
        Route::get('minhaConta', [UsuarioController::class, 'minhaConta']);
        Route::get('usuario/{usuario}', [UsuarioController::class, 'show']);
    });
});
