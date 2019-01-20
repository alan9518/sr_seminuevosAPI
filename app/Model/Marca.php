<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Modelo;

class Marca extends Model
{
    // Add Relation With Modelo
    public function Modelos() {
        return $this->hasMany(Modelo::class);
    }
}
