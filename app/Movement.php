<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movement extends Model
{
    protected $fillable = [
        'term', 'obs', 'start_id', 'step_id'
    ];

    public function start()
    {
        return $this->belongsTo(Start::class);
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

    public function court()
    {
        return $this->belongsTo(Court::class);
    }

    public function step()
    {
        return $this->belongsTo(Step::class);
    }
    
    public function full()
    {
        return $this->hasOne(Full::class);
    }
}
