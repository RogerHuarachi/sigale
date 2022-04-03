<?php

namespace App\Exports;

use App\Transfer;
use Maatwebsite\Excel\Concerns\FromCollection;

class TransferExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Transfer::select(
            "document", "name", "direction", "landline", "originals", 
            "copies", "user_id", "created_at"
        )->get();
    }
}
