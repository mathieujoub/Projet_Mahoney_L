<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class professional_situation extends Model
{
    protected $fillable = [
        'inactivity',
        'activity',
        'retraining',
        'freelance',
        'others_id',
    ];
}