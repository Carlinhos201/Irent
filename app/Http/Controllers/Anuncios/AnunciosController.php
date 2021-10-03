<?php

namespace App\Http\Controllers\Anuncios;

use App\Http\Controllers\Cidades\CidadesController;
use App\Http\Controllers\Controller;
use App\Model\Anuncios;
use App\Model\Cidades;
use App\Model\Estados;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AnunciosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
     return Anuncios::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = $request->user()->user_id;
        // $user_id = $user->user_id;

        DB::transaction(function () use ($request){
            $anuncio = new Anuncios();
            $anuncio->user_id       = $request->user_id;
            $anuncio->titulo        = $request->titulo;
            $anuncio->descricao     = $request->descricao;
            $anuncio->quartos       = $request->quartos;
            $anuncio->proprietario  = $request->proprietario;
            $anuncio->bairro        = $request->bairro;
            $anuncio->logradouro    = $request->logradouro;
            $anuncio->numero        = $request->numero;
            $anuncio->cep           = $request->cep;
            $anuncio->tipo          = $request->tipo;
            // $anuncio->valor         = null;
            $anuncio->save();
        });
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
