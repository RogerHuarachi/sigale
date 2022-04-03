<?php

namespace App\Imports;

use App\Returned;
use Maatwebsite\Excel\Concerns\ToModel;

class ReturnedImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Returned([
            'name'              => $row[0],
            'ci'                => $row[1],
            'exp'               => $row[2],
            'documentOne'       => $row[3],
            'documentTwo'       => $row[4],
        
            'documentThree'     => $row[5],
            'documentFour'      => $row[6],
            'documentFive'      => $row[7],
            'documentSix'       => $row[8],
            'documentSeven'     => $row[9],
            
            'documentEight'     => $row[10],
            'user_id'           => $row[11],
            'created_at'        => $row[12]
        ]);
    }
}
