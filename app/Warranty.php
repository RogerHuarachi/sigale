<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Warranty extends Model
{
    protected $fillable = [
        'name'
    ];

    public function folders()
    {
        return $this->hasMany(Folder::class);
    }
}
