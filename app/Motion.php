<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Motion extends Model
{
    protected $fillable = [
        'action', 'result', 'folder_id'
    ];

    public function folder()
    {
        return $this->belongsTo(Folder::class);
    }
}
