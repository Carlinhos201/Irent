<?php

namespace App\Http\Controllers\Cidades;

use App\Http\Controllers\Controller;
use App\Model\Cidades;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CidadesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cidades = Cidades::all();

        return $cidades;
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

    public function pegarCidadesPorUf(Request $request, $uf)
    {
        // $cidades = DB::table('cidades')
        //             ->where('estado_id', '=', $uf)
        //             ->orderBy('name', 'asc')
        //             ->get();

        // return $cidades;      
        
        if($request->ajax())
        {
            $cidades = Cidades::cidade($uf);
            return response()->json($cidades);
        }
        return view('anuncios.anuncios');
    }
}
