<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class newsletters extends Model
{
    protected $fillable = [
        'dateSubscribe', 
        'mail',
        'PDF',
    ];
}
