<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Estados extends Model
{
    // protected $guarded = [];

    public function cidades()
    {
        return $this->hasMany(Cidades::class);
    }
}
