<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class survey extends Model
{
    protected $fillable = [
        'id_catergorys',
        'id_liste_resulte',
    ];
}
