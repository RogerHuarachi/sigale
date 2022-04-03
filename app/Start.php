<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Start extends Model
{
    protected $fillable = [
        'name', 'ci', 'exp', 'coSigner', 'ciCoS',
        'expCoS', 'direction', 'landline', 'garanteOne', 'ciGa',
        'expGa', 'garanteTwo', 'ciCoGa', 'expCoGa', 'directionGa',
        'landlineGa', 'firmCont', 'disbursement', 'defaulter', 'disMoney',
        'salCap', 'currency', 'numberOp', 'descriptionDeOne', 'descriptionDeTwo',
        'descriptionDeThree', 'contrato', 'bolDes', 'preLiq', 'croquisDom',
        'recFirm', 'planPag', 'bolPag', 'croquisGar', 'ciDeu',
        'ciGar', 'investBien', 'AnalisisCaso', 'user_id', 'created_at'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function admitted() {
        return $this->hasOne(Admitted::class);
    }

    public function rejected() {
        return $this->hasOne(Rejected::class);
    }

    public function observed() {
        return $this->hasOne(Observed::class);
    }

    public function expenses()
    {
        return $this->hasMany(Expense::class);
    }

    public function income() {
        return $this->hasOne(Income::class);
    }

    public function movements()
    {
        return $this->hasMany(Movement::class);
    }
}
