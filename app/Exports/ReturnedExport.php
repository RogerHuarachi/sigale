<?php

namespace App\Exports;

use App\Returned;
use Maatwebsite\Excel\Concerns\FromCollection;

class ReturnedExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Returned::select(
            "name", "ci", "exp", "documentOne", "documentTwo", 
            "documentThree", "documentFour", "documentFive", "documentSix", "documentSeven", 
            
            "documentEight", "user_id", "created_at"
        )->get();
    }
}
