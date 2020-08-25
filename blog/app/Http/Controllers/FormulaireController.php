<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormulaireController extends Controller
{
    public function formulaire()
    {
        return view('formulaire');
    }

    public function traitement()
    {
        request()->validate([
            'firstname' => ['required', 'firstname'],
            'lastname' => ['required', 'lastname'],
            'birth' => ['required', 'birth'],
            'why_survey' => ['required', 'why_survey']
            
        ]);

        $utilisateur = User_mahonney::create([
            'firstname' => request('firstname'),
            'lastname' => request('lastname'),
            'birth' => request('birth'),
            /*'nationnality' => request('nationnality'),*/
            'why_survey' => request('why_survey')
            /*'professional_situation_id' => request('professional_situation_id'),*/
        ]);
        return view('survey');
    }
}
