<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use Notifiable;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'agency_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function agency()
    {
        return $this->belongsTo(Agency::class);
    }

    public function transfers()
    {
        return $this->hasMany(Transfer::class);
    }

    public function accepteds()
    {
        return $this->hasMany(Accepted::class);
    }

    public function returneds()
    {
        return $this->hasMany(Returned::class);
    }

    public function folders()
    {
        return $this->hasMany(Folder::class);
    }

    public function approveds()
    {
        return $this->hasMany(Approved::class);
    }

    public function starts()
    {
        return $this->hasMany(Start::class);
    }

    public function admitteds()
    {
        return $this->hasMany(Admitted::class);
    }

    public function Observeds()
    {
        return $this->hasMany(observed::class);
    }

    public function rejecteds()
    {
        return $this->hasMany(Rejected::class);
    }
}
