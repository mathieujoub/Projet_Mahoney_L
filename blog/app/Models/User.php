<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'password',
        'birth',
        'nationality',
        'why_survey',
        'date_survey',
        'professional_situation_id',
        'newsletters_id',
        'survey_id',
        'score_survey',
        'score_categories',
        'result_survey_text',
        'result_category_test',
        'started_at',
        'ended_at',
        
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function survey()
    {
        return $this->hasOne('\App\Models\Survey');
    }

    public function newsletter()
    {
        return $this->hasOne('\App\Models\Newsletter_relation_user');
    }

    public function mail()
    {
        return $this->hasOne('\App\Models\Newsletter');
    }

    public function professional_situation()
    {
        return $this->hasOne('\App\Models\Professional_situation');
    }
}
