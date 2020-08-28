<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class professional_situation extends Model
{
    protected $fillable = [
        'Student' ,
        'Self_employed' ,
        'Employed' ,
        'Unemployed' ,
        'Other' ,
        'Changing_jobs' ,
        'Description_other' 

        // 'others_id',
    ];

    public function user()
    {
        return $this->belongsTo('\App\Models\User');
    }
}
