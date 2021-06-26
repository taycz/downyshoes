<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AuthModel extends Model
{
    //
    protected $table = 'users';
    protected $fillable = ['username','email','role','password'];
}