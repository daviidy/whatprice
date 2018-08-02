<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    const ADMIN_TYPE = 'admin';
    const MARCHAND_TYPE = 'marchand';
    const DEFAULT_TYPE = 'default';

    public function isAdmin()
    {
    return $this->type === self::ADMIN_TYPE;
    }

    public function isMarchand()
    {
    return $this->type === self::MARCHAND_TYPE;
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];



}
