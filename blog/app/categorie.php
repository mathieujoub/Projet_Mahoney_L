<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categorie extends Model
{
    protected $fillable = [
        'is',
        'categoriesName',
        'items_id',
        'id_list-results',
    ];
}
