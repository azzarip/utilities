<?php

namespace App\Http;

use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements AuthenticatableContract, MustVerifyEmail
{
    protected $guarded = '';

    public $timestamps = false;

    protected $table = 'users';
}
