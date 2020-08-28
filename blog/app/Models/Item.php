<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class item extends Model
{
    protected $fillable = [
        'content',
        'nature',
        'answerValue',
        'category_id',
    ];

    public function categories()
    {
        return $this->belongsTo('\App\Models\Category');
    }

}
