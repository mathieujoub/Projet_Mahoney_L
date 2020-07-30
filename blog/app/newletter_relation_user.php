<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class newletter_relation_user extends Model
{
    protected $fillable = [
       'id_users',
       'id_newsletters', 
       'subscribe',
    ];
}
