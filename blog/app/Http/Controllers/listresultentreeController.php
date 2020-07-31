<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class listresultentreeController extends Controller
{
    public function index() 
    {
        $services = \App\Listresult::all();

        return view('serviceentree/index', compact('services'));
    }

    public function store()
    {
        $data = request()->validate([
            'nameText' => 'required|min:5'
        ]);

        \App\Listresult::create($data);
        
        return redirect()->back();
    }
}
