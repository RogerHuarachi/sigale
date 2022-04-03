<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admitted extends Model
{
    protected $fillable = [
        'start_id', 'user_id'
    ];

    public function start()
    {
        return $this->belongsTo(Start::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
