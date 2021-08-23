<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientPremium extends Model
{
    protected $fillable = [
        'user_id',
        'cpf'
    ];

    
}
