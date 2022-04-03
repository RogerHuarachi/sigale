<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    protected $fillable = [
        'start_id', 'date', 'invoice',  'detail',  'amount',
    ];

    public function start()
    {
        return $this->belongsTo(Start::class);
    }
}
