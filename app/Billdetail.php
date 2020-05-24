<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Billdetail extends Model
{
    protected $fillable = [
        'bill_id', 'product_id','qty'
    ];
}
