<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transfer extends Model
{
    protected $fillable = [
        'document', 'name', 'direction', 'landline', 'originals', 'copies',
        'user_id', 'created_at'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function accepted() {
        return $this->hasOne(Accepted::class);
    }
}
