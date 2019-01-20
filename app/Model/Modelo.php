<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Marca;

class Modelo extends Model
{
    // Add Relation with Marca
    public function Marca() {
        return $this->belongsTo(Marca::class);
    }
}
