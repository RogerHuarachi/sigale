<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AContract extends Model
{
    protected $fillable = [
        'deudor', 'deudorci', 'deudorec', 'deudoro', 'codeudor',
        'codeudorci', 'codeudorec', 'codeudoro', 'domicilio', 'zona',

        'monto', 'montolit', 'plazo', 'cuotas', 'frecdias',
        'prendauno', 'prendados', 'prendatres', 'prendacuatro', 'prendacinco',
        
        'prendaseis', 'fecha', 'encargado'
    ];
}
