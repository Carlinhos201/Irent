<?php

use App\Http\Controllers\Autenticacao\AutenticacaoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth;
Route::group([
    'prefix' => 'auth'
], function () {
    Route::post('login', [AutenticacaoController::class, 'login'])->name('login');
    // Route::post('register', [AutenticacaoController::class, 'login']);
    Route::post('reset', 'Auth\AuthController@reset');
    Route::post('change', 'Auth\AuthController@change');

    
    Route::group(['middleware' => 'auth:api'], function () {
        Route::get('logout', 'Auth\AuthController@logout');
        Route::get('user', 'Auth\AuthController@user');
    });
});