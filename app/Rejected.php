<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rejected extends Model
{
    protected $fillable = [
        'start_id', 'user_id', 'description'
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
