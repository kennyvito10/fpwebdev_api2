<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $fillable = [
        'user_id', 'paymentUrl', 'status'
    ];
}
