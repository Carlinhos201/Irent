<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Cidades extends Model
{
    protected $table = ['cidades'];
    protected $fillable = ['nome', 'estado_id'];

    public function estados()
    {
        return $this->belongsTo(Estados::class);
    }

    public static function cidade($uf)
    {
        return Cidades::where('estado_id', '=', $uf)
        ->get();
    } 
}
