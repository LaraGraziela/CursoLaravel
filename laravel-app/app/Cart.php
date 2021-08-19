<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = [
        'id_buyer',
        'id_product',
        'quantity'
    ];
}
