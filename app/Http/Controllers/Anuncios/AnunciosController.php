<?php

namespace App\Http\Controllers\Anuncios;

use App\Http\Controllers\Cidades\CidadesController;
use App\Http\Controllers\Controller;
use App\Model\Anuncios;
use App\Model\Cidades;
use App\Model\Estados;
use App\Model\Imagens;
use Illuminate\Database\Eloquent\Builder;
use  Response;
use Illuminate\Http\Request;
use Illuminate\Http\Response as HttpResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class AnunciosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $empresa_id = $user->pessoa->profissional->empresa_id;
        return Anuncios::with('imagem')
         ->get();
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
        $anuncio = null;

        DB::transaction(function () use ($request, $anuncio, $user) {
            $anuncio =  Anuncios::create([
                        'user_id' => $request['user_id'],
                        'titulo'  => $request['titulo'],
                        'proprietario'  => $request['proprietario'],
                        'bairro'  => $request['bairro'],
                        'logradouro'  => $request['logradouro']
                    ]);

                    if ($request['imagem']) {
                        foreach ($request['imagem'] as $imagem) {
                            $md5 = md5_file($imagem['imagem']['file']);
                            $caminho = 'imagens/';
                            $nome = $md5 . '.' . explode(';', explode('/',$imagem['imagem']['file'])[1])[0];
                            $file = explode(',', $imagem['imagem']['file'])[1];
                            Storage::put($caminho . $nome, base64_decode($file));
                            Imagens::create([
                                'anuncio_id' => $anuncio->id,
                                'caminho' => $caminho . '/' . $nome,
                                'nome'  => $imagem['imagem']['name'],
                            ]);
                        }
                    }

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
