<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Step extends Model
{
    protected $fillable = [
        'name', 'subject_id'
    ];

    public function moviment()
    {
        return $this->hasOne(Movement::class);
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }
}
