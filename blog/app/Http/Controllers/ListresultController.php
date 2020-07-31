<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListresultController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() 
    {
        $services = \App\Listresult::all();

        return view('serviceinfo/index', compact('services'));
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
