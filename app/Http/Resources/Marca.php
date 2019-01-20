<?php

    /* ==========================================================================
    ** Handle API Data
    ** php artisan make:Resource name
    ** 19/01/2019
    ** Alan Medina Silva
    ** ========================================================================== */

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Marca extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return parent::toArray($request);
    }


    // --------------------------------------
    // Add Metadata
    // --------------------------------------
    public function with($request) {
        return [
            'version' => '1.0.0'
        ];
    }
}
