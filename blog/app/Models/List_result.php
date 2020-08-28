<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class list_result extends Model
{
    protected $fillable = [
        'nameText',
        'Value',
        'contentText',
    ];

    public function categories()
    {
        return $this->hasMany('\App\Models\Category');
    }


}
