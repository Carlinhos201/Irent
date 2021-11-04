<?php

namespace App\Model;

use GoldSpecDigital\LaravelEloquentUUID\Database\Eloquent\Uuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Imagens extends Model
{

    
    protected $keyType = 'string';
    protected $guarded = [];

    public function anuncio()
    {
        return $this->hasMany(Anuncios::class);
    }
}