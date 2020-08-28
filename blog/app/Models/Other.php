<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class other extends Model
{
    // protected $fillable = [
        // 'description',
    // ];

    public function profession()
    {
        return $this->belongsTo('\App\Models\Professional_situation');
    }

}
