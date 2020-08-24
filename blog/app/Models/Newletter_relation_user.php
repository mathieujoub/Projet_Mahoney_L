<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class newletters_relation_user extends Model
{
    protected $fillable = [
       'users_id',
       'newsletters_id', 
       'subscribe',
    ];
}
