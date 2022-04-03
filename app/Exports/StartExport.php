<?php

namespace App\Exports;

use App\Start;
use Maatwebsite\Excel\Concerns\FromCollection;

class StartExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Start::select("name", "ci", "exp", "coSigner", "ciCoS",
                            "expCoS", "direction", "landline", "garanteOne", "ciGa",
                            "expGa", "garanteTwo", "ciCoGa", "expCoGa", "directionGa",
                            "landlineGa", "firmCont", "disbursement", "defaulter", "disMoney",
                            "salCap", "currency", "numberOp", "descriptionDeOne", "descriptionDeTwo",
                            "descriptionDeThree", "contrato", "bolDes", "preLiq", "croquisDom",
                            "recFirm", "planPag", "bolPag", "croquisGar", "ciDeu",
                            "ciGar", "investBien", "AnalisisCaso", "user_id", "created_at"
                            )->get();
    }
}
