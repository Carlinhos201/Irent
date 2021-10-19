<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Anuncios extends Model
{
    protected $guarded = [];
    protected $table = "anuncios";

    public function users()
    {
        return $this->hasOne(User::class);
    }
    public function imagem()
    {
        return $this->belongsTo(Imagens::class);
    }
}