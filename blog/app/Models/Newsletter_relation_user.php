<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class newsletter_relation_user extends Model
{
    protected $fillable = [
       'users_id',
       'newsletters_id', 
       'subscribe',
    ];

    public function mail()
    {
        return $this->hasOne('\App\Models\Newsletter');
    }

    public function user()
    {
        return $this->BelongsTo('\App\Models\User_mahoney');
    }

}
