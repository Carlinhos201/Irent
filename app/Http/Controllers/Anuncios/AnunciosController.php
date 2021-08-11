<?php

namespace App\Http\Controllers\Anuncios;

use App\Http\Controllers\Cidades\CidadesController;
use App\Http\Controllers\Controller;
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
        // $cidades = Cidades::join('estados', 'estados.id', '=', 'cidades.estado_id')
        //                     ->select(
        //                         'cidades.name',
        //                         'estados.sigla'
        //                     )
        //                     ->orderBy('name', 'asc')
        //                     ->get();

        $estados = DB::table('estados')
                        ->orderBy('sigla', 'asc')
                        ->get();
          
        return view('anuncios.anuncios', compact('estados'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
