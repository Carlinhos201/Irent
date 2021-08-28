<?php

use App\Http\Controllers\Cidades\CidadesController;
use Illuminate\Support\Facades\Route;

Route::get('cidades/pegarCidadesPorUf/{uf}', [CidadesController::class, 'pegarCidadesPorUf']);