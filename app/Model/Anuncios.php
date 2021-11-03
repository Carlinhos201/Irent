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
        return $this->belongsTo(User::class);
    }
    public function imagens()
    {
        return $this->hasMany(Imagens::class, 'anuncio_id');
    }
    public function cidade()
    {
        return $this->belongsTo(Cidades::class);
    }
}
