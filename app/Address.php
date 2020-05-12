<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = [
        'province', 'city', 'address','postalCode','notes'
    ];
}
