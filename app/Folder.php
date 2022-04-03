<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Folder extends Model
{
    protected $fillable = [
        'name', 'ci', 'exp', 'birthday', 'stateCivil',
        'gender', 'direction', 'city', 'province', 'landline',
        'movilPhone', 'profession', 'type', 'warranty_id', 'nameRef',
        'ciRef', 'expRef', 'landlineRef', 'directionRef', 'tipyRef',
        'coSigner', 'ciCoS', 'expCoS', 'landlineCoS', 'directionCoS',
        'garanteOne', 'movilPhoneGaOne', 'directionGaOne', 'garanteTwo', 'movilPhoneGaTwo',
        'directionGaTwo', 'disburnsement', 'pay', 'money', 'state',
        'observation', 'user_id', 'agency_id', 'created_at'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function approved() {
        return $this->hasOne(Approved::class);
    }

    public function motions()
    {
        return $this->hasMany(Motion::class);
    }

    public function warranty()
    {
        return $this->belongsTo(Warranty::class);
    }
}
