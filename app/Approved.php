<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Approved extends Model
{
    protected $fillable = [
        'folder_id', 'user_id'
    ];

    public function folder()
    {
        return $this->belongsTo(Folder::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
