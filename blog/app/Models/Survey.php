<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class survey extends Model
{
    protected $fillable = [
        'categories_id',
        'list_results_id',
    ];

    public function categories() {
        return $this->hasMany('\App\Models\Category');
    }

    public function results() {
        return $this->hasMany('\App\Models\List_result');
    }
}
