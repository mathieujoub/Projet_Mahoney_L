<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $fillable = [
        'is',
        'categoriesName',
        'list_results_id',
    ];

    public function survey()
    {
        return $this->belongsTo('\App\Models\Survey');
    }

    public function items()
    {
        return $this->hasMany('\App\Models\Item');
    }

}