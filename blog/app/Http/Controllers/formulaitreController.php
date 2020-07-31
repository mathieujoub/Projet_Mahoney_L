<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class formulaitreController extends Controller
{
    public function store(){
        $data = request()->validate([
            'firstname',
            'lastename',
            'birth',
            'nationnality',
            'why_survey', 
        ]);
        \App\user_mahonney::create($data);

        return redirect()->back();
    }
}
