<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = [
        'name'
    ];

    public function steps()
    {
        return $this->hasMany(Step::class);
    }

    public function incomes()
    {
        return $this->hasMany(Income::class);
    }
}
