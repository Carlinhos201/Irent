<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Cidades extends Model
{
    protected $guarded = [];

    public function estados()
    {
        return $this->belongsTo(Estados::class);
    }
}
