<?php

namespace App\Imports;

use App\Transfer;
use Maatwebsite\Excel\Concerns\ToModel;

class TransferImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Transfer([
            'document'          => $row[0],
            'name'              => $row[1],
            'direction'         => $row[2],
            'landline'          => $row[3],
            'originals'         => $row[4],
            'copies'            => $row[5],
            'user_id'           => $row[6],
            'created_at'        => $row[7]
        ]);
    }
}
