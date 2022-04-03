<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    protected $fillable = [
        'nurej', 'webid', 'judged', 'number', 'judge', 
        'secretary', 'secPhone', 'assistant', 'assPhone', 'diligence', 
        'dilPhone', 'date', 'subject_id', 'start_id'
    ];

    public function start()
    {
        return $this->belongsTo(Start::class);
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }
}
