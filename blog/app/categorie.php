<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categorie extends Model
{
    protected $fillable = [
        'is',
        'namecategories',
        'idItems',
        'idListResults',
    ];
}
