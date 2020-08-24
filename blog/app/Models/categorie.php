<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class categorie extends Model
{
    protected $fillable = [
        'is',
        'categoriesName',
        'items_id',
        'list_results_id',
    ];
}
