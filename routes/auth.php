<?php

use App\Http\Controllers\Autenticacao\AutenticacaoController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'auth'], function () {
    Route::post('login', [AutenticacaoController::class, 'login'])->name('login');
    Route::group(['middleware' => 'auth:api'], function () {
        Route::post('update', [AutenticacaoController::class, 'update']);
        Route::get('logout', [AutenticacaoController::class, 'logout']);
        Route::get('user',  [AutenticacaoController::class, 'user']);
    });
});
Route::post('register', [AutenticacaoController::class, 'register']);