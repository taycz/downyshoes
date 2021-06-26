<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerModel extends Model
{
    //
    protected $table = 'customer';
    protected $fillable = ['customer','phonenumber','email','address'];
}
