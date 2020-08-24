<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class survey extends Model
{
    protected $fillable = [
        'categories_id',
        'list_results_id',
    ];
}
