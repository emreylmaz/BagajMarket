<?php

namespace App;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    protected $fillable=[
        'name','email', 'is_admin' ,'password'
    ];

    public static function where(string $string, $email)
    {
    }

}
