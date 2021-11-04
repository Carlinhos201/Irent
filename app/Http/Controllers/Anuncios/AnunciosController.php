<?php

namespace App\Http\Controllers\Anuncios;
use App\Http\Controllers\Controller;
use App\Model\Anuncios;
use App\Model\Imagens;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class AnunciosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    return Anuncios::with('imagens')->get();
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
                        'user_id'       => $request['user_id'],
                        'proprietario'  => $request['proprietario'],
                        'email'         => $request['email'],
                        'data_nasc'     => $request['data_nasc'],
                        'cpf'           => $request['cpf'],
                        'telefone'      => $request['telefone'],
                        'celular'       => $request['celular'],
                        'titulo'        => $request['titulo'],
                        'valor'         => $request['valor'],
                        'qtd_quartos'   => $request['qtd_quartos'],
                        'qtd_banh'      => $request['qtd_banh'],
                        'qtd_suites'    => $request['qtd_suites'],
                        'qtd_garag'     => $request['qtd_garag'],
                        'numero_andar'  => $request['numero_andar'],
                        'tipo'          => $request['tipo'],
                        'descricao'     => $request['descricao'],
                        'cep'           => $request['cep'],
                        'numero'        => $request['numero'],
                        'cidade_id'     => $request['cidade_id'],
                        'bairro'        => $request['bairro'],
                        'logradouro'    => $request['logradouro'],
                        'ativo'         => 1
                    ]);

                    if ($request['imagem']) {
                        foreach ($request['imagem'] as $imagem) {
                            $md5 = md5_file($imagem['imagem']);
                            $caminho = 'imagens/';
                            $nome = $md5 . '.' . explode(';', explode('/', $imagem['imagem'])[1])[0];
                            $file = explode(',', $imagem['imagem'])[1];
                            Storage::put($caminho . $nome, base64_decode($file));
                            Imagens::create([
                                'anuncio_id' => $anuncio->id,
                                'caminho' =>$caminho . $nome,
                                'nome'  => $imagem['nome'],
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
    public function show(Anuncios $anuncio)
    {
        $anuncio->cidade;
        return $anuncio;
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

    public function get_image($path){
        $imagem=Imagens::find($path);
        // if (Storage::disk('local')->exists($imagem->caminho)) {
            $path_image =  Storage::disk('public')->get($imagem->caminho);
            // Log::info(explode(',', $path_image)[1]);
            // return base64_decode(explode(',', $path_image)[1]);
            return $path_image;
        // } else {
        //     return null;
        // }
    }
}
