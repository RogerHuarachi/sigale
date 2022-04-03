<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Full extends Model
{
    protected $fillable = [
        'moviment_id'
    ];

    public function moviment()
    {
        return $this->belongsTo(Moviment::class);
    }
}
