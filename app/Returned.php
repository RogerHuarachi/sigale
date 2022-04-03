<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Returned extends Model
{
    protected $fillable = [
        'name', 'ci', 'exp', 'documentOne',
        'documentTwo', 'documentThree', 'documentFour', 'documentFive', 'documentSix',
        'documentSeven', 'documentEight', 'user_id', 'created_at'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
