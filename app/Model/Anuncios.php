<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Anuncios extends Model
{
    protected $guarded = [];

    public function users()
    {
        return $this->hasOne(User::class);
    }
}
