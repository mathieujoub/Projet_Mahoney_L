<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class failed_job extends Model
{
    protected $fillable = [
            'connection',
            'queue',
            'payload',
            'exception',
            'failed_at',
            ];
    
}
