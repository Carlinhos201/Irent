<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Cidades extends Model
{

    protected $guarded = [];

    public function anuncio()
    {
        return $this->hasMany(Anuncios::class);
    }

}
