<?php

namespace App\Model;

use GoldSpecDigital\LaravelEloquentUUID\Database\Eloquent\Uuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Imagens extends Model
{
    use Uuid;
    protected $guarded = [];
    // protected $table = 'imagens';
    // protected $fillable = [
    //     'anuncio_id',
    //     'nome',
    //     'caminho',
    //     'created_at',
    //     'updated_at',
    //     'deleted_at'
    // ];

    // public $incrementing = false;

    public function anuncio()
    {
        return $this->hasMany(Anuncios::class);
    }
}