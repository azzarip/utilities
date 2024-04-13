<?php

namespace Azzarip\AdminPanel\Tests\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class User extends Authenticatable implements AuthenticatableContract, MustVerifyEmail
{
    protected $guarded = "";

    public $timestamps = false;

    protected $table = 'users';
}
