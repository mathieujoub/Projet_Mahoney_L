<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\http\Requests;
use Illuminate\support\Facades\DB;

class ListresultController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request) 
    {
        // $people = \App\Models\user_mahoneys::all();
        // $results = \App\Models\List_result::all();
        // $test = \App\Models\Item::all();
        // $professional = \App\Models\Professional_situation::all();
        // $other = \App\Models\Other::all();

        
        if ($request->has('nationality')) {
            $nationality = $request->input('nationality');

            $otherdb = DB::table('Professional_situations')
            ->join('users', 'users.professional_situations_id', 'professional_situations.id')
            ->LeftJoin('newsletters_relation_users', 'newsletters_relation_users.users_id', 'users.id')
            ->orderBy('users.id', 'asc')
            ->where('users.nationality', '=', $nationality)
            ->get();

        } elseif ($request->has('Professional')) {
            $professional = $request->input('Professional');

            if ($professional == 'student') {
                $professional = 'Student';
            } elseif ($professional == 'self employed' || $professional == 'Self employed' || $professional == 'self_employed') {
                $professional = 'Self_employed';
            } elseif ($professional == 'employed') {
                $professional = 'Employed';
            } elseif ($professional == 'unemployed') {
                $professional = 'Unemployed';
            } elseif ($professional == 'other') {
                $professional = 'Other';
            } elseif ($professional == 'changing jobs' || $professional == 'Changing jobs' || $professional == 'changing_jobs') {
                $professional = 'Changing_hobs';
            }

            if($professional == 'Student' || $professional == 'Self_employed' || $professional == 'Employed' || $professional == 'Unemployed' || $professional == 'Other' || $professional == 'Changing_jobs') {
                $otherdb = DB::table('Professional_situations')
                ->join('users', 'users.professional_situations_id', 'professional_situations.id')
                ->LeftJoin('newsletters_relation_users', 'newsletters_relation_users.users_id', 'users.id')
                ->orderBy('users.id', 'asc')
                ->where("professional_situations.$professional", '=', 1)
                ->get();

            } else {

                $otherdb = DB::table('Professional_situations')
                ->join('users', 'users.professional_situations_id', 'professional_situations.id')
                ->LeftJoin('newsletters_relation_users', 'newsletters_relation_users.users_id', 'users.id')
                ->orderBy('users.id', 'asc')
                ->get();

            }

        } elseif ($request->has('Email')) {
            $Email = $request->input('Email');

            $otherdb = DB::table('Professional_situations')
            ->join('users', 'users.professional_situations_id', 'professional_situations.id')
            ->LeftJoin('newsletters_relation_users', 'newsletters_relation_users.users_id', 'users.id')
            ->orderBy('users.id', 'asc')
            ->where('users.email', '!=', null)
            ->get();

        } elseif ($request->has('scoreGmin')) {
            $scoreGmin = $request->input('scoreGmin');

            $otherdb = DB::table('Professional_situations')
            ->join('users', 'users.professional_situations_id', 'professional_situations.id')
            ->LeftJoin('newsletters_relation_users', 'newsletters_relation_users.users_id', 'users.id')
            ->orderBy('users.id', 'asc')
            ->where('users.score_survey', '>=', $scoreGmin)
            ->get();

        } elseif ($request->has('scoreGmax')) {
            $scoreGmax = $request->input('scoreGmax');

            $otherdb = DB::table('Professional_situations')
            ->join('users', 'users.professional_situations_id', 'professional_situations.id')
            ->LeftJoin('newsletters_relation_users', 'newsletters_relation_users.users_id', 'users.id')
            ->orderBy('users.id', 'asc')
            ->where('users.score_survey', '<=', $scoreGmax)
            ->get();

        } elseif ($request->has('scoreCmin')) {
            $scoreCmin = $request->input('scoreCmin');

            $otherdb = DB::table('Professional_situations')
            ->join('users', 'users.professional_situations_id', 'professional_situations.id')
            ->LeftJoin('newsletters_relation_users', 'newsletters_relation_users.users_id', 'users.id')
            ->orderBy('users.id', 'asc')
            ->where('users.score_categories', '>=', $scoreCmin)
            ->get();

        } elseif ($request->has('scoreCmax')) {
            $scoreCmax = $request->input('scoreCmax');

            $otherdb = DB::table('Professional_situations')
            ->join('users', 'users.professional_situations_id', 'professional_situations.id')
            ->LeftJoin('newsletters_relation_users', 'newsletters_relation_users.users_id', 'users.id')
            ->orderBy('users.id', 'asc')
            ->where('users.score_categories', '<=', $scoreCmax)
            ->get();

        } elseif ($request->has('updatedTimeMax')) {
            $updatedTimeMax = $request->input('updatedTimeMax');

            $otherdb = DB::table('Professional_situations')
            ->join('users', 'users.professional_situations_id', 'professional_situations.id')
            ->LeftJoin('newsletters_relation_users', 'newsletters_relation_users.users_id', 'users.id')
            ->orderBy('users.id', 'asc')
            ->where('users.updated_at', '<=', $updatedTimeMax)
            ->get();

        } elseif ($request->has('updatedTimeMin')) {
            $updatedTimeMin = $request->input('updatedTimeMin');

            $otherdb = DB::table('Professional_situations')
            ->join('users', 'users.professional_situations_id', 'professional_situations.id')
            ->LeftJoin('newsletters_relation_users', 'newsletters_relation_users.users_id', 'users.id')
            ->orderBy('users.id', 'asc')
            ->where('users.updated_at', '>=', $updatedTimeMin)
            ->get();

        } elseif ($request->has('subscribe')) {

            $otherdb = DB::table('Professional_situations')
            ->join('users', 'users.professional_situations_id', 'professional_situations.id')
            ->LeftJoin('newsletters_relation_users', 'newsletters_relation_users.users_id', 'users.id')
            ->orderBy('users.id', 'asc')
            ->where('newsletters_relation_users.subscribe', '=', 1)
            ->get();

        } else {

            $otherdb = DB::table('Professional_situations')
            ->join('users', 'users.professional_situations_id', 'professional_situations.id')
            ->LeftJoin('newsletters_relation_users', 'newsletters_relation_users.users_id', 'users.id')
            ->orderBy('users.id', 'asc')
            ->get();

        }


        // $newsletterdb = DB::table('newsletters')
        // ->join('users', 'users.newsletters_id', 'newsletters.id')
        // ->orderBy('users.id', 'asc')
        // ->get();

        // $listresultsdb = DB::table('list_results')
        // ->join('categories', 'categories.list_results_id', 'list_results.id')
        // ->leftJoin('items', 'items.category_id', 'categories.id')
        // ->join('surveys', 'surveys.categories_id', 'categories.id')
        // ->join('users', 'users.surveys_id', 'surveys.id')
        // ->orderBy('users.id', 'asc')
        // ->get();

    return view('serviceinfo/index', compact('otherdb',/* 'newsletterdb',   'listresultsdb'*/));
    }
}
