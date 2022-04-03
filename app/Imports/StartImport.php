<?php

namespace App\Imports;

use App\Start;
use Maatwebsite\Excel\Concerns\ToModel;

class StartImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Start([
            'name'              => $row[0],
            'ci'                => $row[1],
            'exp'               => $row[2],
            'coSigner'          => $row[3],
            'ciCoS'             => $row[4],
            
            'expCoS'            => $row[5],
            'direction'         => $row[6],
            'landline'          => $row[7],
            'garanteOne'        => $row[8],
            'ciGa'              => $row[9],
            
            'expGa'             => $row[10],
            'garanteTwo'        => $row[11],
            'ciCoGa'            => $row[12],
            'expCoGa'           => $row[13],
            'directionGa'       => $row[14],
            
            'landlineGa'        => $row[15],
            'firmCont'          => $row[16],
            'disbursement'      => $row[17],
            'defaulter'         => $row[18],
            'disMoney'          => $row[19],
            
            'salCap'            => $row[20],
            'currency'          => $row[21],
            'numberOp'          => $row[22],
            'descriptionDeOne'  => $row[23],
            'descriptionDeTwo'  => $row[24],
            
            'descriptionDeThree'=> $row[25],
            'contrato'          => $row[26],
            'bolDes'            => $row[27],
            'preLiq'            => $row[28],
            'croquisDom'        => $row[29],
            
            'recFirm'           => $row[30],
            'planPag'           => $row[31],
            'bolPag'            => $row[32],
            'croquisGar'        => $row[33],
            'ciDeu'             => $row[34],
        
            'ciGar'             => $row[35],
            'investBien'        => $row[36],
            'AnalisisCaso'      => $row[37],
            'user_id'           => $row[38],
            'created_at'        => $row[39]
        ]);
    }
}
