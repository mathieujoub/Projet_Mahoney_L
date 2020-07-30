<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class newsletters extends Model
{
    protected $fillable = [
        'dateSubscribe', 
        'mail',
        'PDF',
    ];
}
