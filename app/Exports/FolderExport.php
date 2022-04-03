<?php

namespace App\Exports;

use App\Folder;
use Maatwebsite\Excel\Concerns\FromCollection;

class FolderExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Folder::select(
            "name", "ci", "exp", "birthday", "stateCivil", 
            "gender", "direction", "city", "province", "landline", 

            "movilPhone", "profession", "type", "warranty_id", "nameRef", 
            "ciRef", "expRef", "landlineRef", "directionRef", "tipyRef", 

            "coSigner", "ciCoS", "expCoS", "landlineCoS", "directionCoS", 
            "garanteOne", "movilPhoneGaOne", "directionGaOne", "garanteTwo", "movilPhoneGaTwo", 
            
            "directionGaTwo", "disburnsement", "pay", "money", "state", 
            "observation", "user_id", "agency_id", "created_at"
        )->get();
    }
}
