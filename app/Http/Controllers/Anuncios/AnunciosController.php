<?php

namespace App\Http\Controllers\Anuncios;

use App\Http\Controllers\Cidades\CidadesController;
use App\Http\Controllers\Controller;
use App\Model\Anuncios;
use App\Model\Cidades;
use App\Model\Estados;
use App\Model\Imagens;
use  Response;
use Illuminate\Http\Request;
use Illuminate\Http\Response as HttpResponse;
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
        $file = $request['imagem'];
        $request = json_decode($request->data, true);
        $anuncio = null;

        DB::transaction(function () use ($request, $anuncio, $file) {
                    $anuncio = Anuncios::create([
                        'user_id' => $request['user_id'],
                        'titulo'  => $request['titulo'],
                        'proprietario'  => $request['proprietario'],
                        'bairro'  => $request['bairro'],
                        'logradouro'  => $request['logradouro']
                    ]);

                if($request['imagem']){
                    foreach ($request['imagem'] as $key => $imagem) {
                        if ($file && $file->isValid()) {
                                $md5 = md5_file($file);
                                $caminho = 'imagens/';
                                $nome = $md5 . '.' . $file->extension();
                                $upload = $file->storeAs($caminho, $nome);
                                $nomeOriginal = $file->getClientOriginalName();
                                if ($upload) {
                                         Imagens::create([
                                            'anuncio_id'   => $anuncio->id,
                                            'caminho'      => $caminho . '/' . $nome,
                                            'nome'         => $nomeOriginal,
                                        ]);
                                  
                                }
                            }
                        
                    }
                }
                
            // });

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
