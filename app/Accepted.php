<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Accepted extends Model
{
    protected $fillable = [
        'transfer_id', 'user_id'
    ];

    public function transfer()
    {
        return $this->belongsTo(Transfer::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
