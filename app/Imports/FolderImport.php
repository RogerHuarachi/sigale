<?php

namespace App\Imports;

use App\Folder;
use Maatwebsite\Excel\Concerns\ToModel;

class FolderImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Folder([
            'name'              => $row[0],
            'ci'                => $row[1],
            'exp'               => $row[2],
            'birthday'          => $row[3],
            'stateCivil'        => $row[4],
        
            'gender'            => $row[5],
            'direction'         => $row[6],
            'city'              => $row[7],
            'province'          => $row[8],
            'landline'          => $row[9],
            
            'movilPhone'        => $row[10],
            'profession'        => $row[11],
            'type'              => $row[12],
            'warranty_id'       => $row[13],
            'nameRef'           => $row[14],
            
            'ciRef'             => $row[15],
            'expRef'            => $row[16],
            'landlineRef'       => $row[17],
            'directionRef'      => $row[18],
            'tipyRef'           => $row[19],
            
            'coSigner'          => $row[20],
            'ciCoS'             => $row[21],
            'expCoS'            => $row[22],
            'landlineCoS'       => $row[23],
            'directionCoS'      => $row[24],
        
            'garanteOne'        => $row[25],
            'movilPhoneGaOne'   => $row[26],
            'directionGaOne'    => $row[27],
            'garanteTwo'        => $row[28],
            'movilPhoneGaTwo'   => $row[29],
            
            'directionGaTwo'    => $row[30],
            'disburnsement'     => $row[31],
            'pay'               => $row[32],
            'money'             => $row[33],
            'state'             => $row[34],
        
            'observation'       => $row[35],
            'user_id'           => $row[36],
            'agency_id'         => $row[37],
            'created_at'        => $row[38]
        ]);
    }
}
