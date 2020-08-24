<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class user_mahoney extends Model
{
    protected $fillable = [
        
            'firstname',
            'lastename',
            'birth',
            'nationnality',
            'why_survey',
            'date_survey',
            'professional_situation_id',
            'newsletters_id',
            'survey_id',
            'score_survey',
            'score_catergories',
            'result_surevey_text',
            'result_categoty_test',
            'started_at',
            'ended_at',
    ];
}
