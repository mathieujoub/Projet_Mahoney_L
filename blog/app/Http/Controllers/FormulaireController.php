<?php

namespace App\Http\Controllers;


use App\Models\User;
use App\Models\Professional_situation;


class FormulaireController extends Controller
{


    public function index () {
        return view ('/formulaire');
    }

    
    public function postForm() {

        request()->validate([

            'firstname' => ['required'],
            'lastname' => ['required'],
            'birth' => ['required', 'date'],
            'nationality' => ['required']
        ]);

        $utilisateur = User::create([

            'firstname' => request('firstname'),
            'lastname' => request('lastname'),
            'birth' => request('birth'),
            'nationality' => request('nationality'),
            'why_survey' => request('why_survey')
        ]);

        $professional = Professional_situation::create([
            
            'Student' => request('student'),
            'Self_employed' => request('selfEmployed'),
            'Employed' => request('employed'),
            'Unemployed' => request('unemployed'),
            'Other' => request('other'),
            'Changing_jobs' => request('changingJobs'),
            'Description_other' =>request('description_other')
        ]);

        

        return view('/survey');
    }

        
        
}

