@extends('app')

@section('title')

@section('content')
    <div class='d-md-flex justify-content-around'>
        <h1>Welcome admin</h1>
    </div>
    <div class='d-md-flex justify-content-around'>

        <form class="mt-2" method="get">
            <input type="text" name="nationality" value="{{ old('nationality') }}" placeholder="the nationality search" autocomplete="off">
            <button type="submit" class="rounded-pill border-0 bg-secondary">Search</button>
        </form>

        <form class="mt-2" method="get">
            <input type="text" name="Professional" value="{{ old('Professional') }}" placeholder="the Professional situation search" autocomplete="off">
            <button type="submit" class="rounded-pill border-0 bg-secondary">Search</button>
        </form>

        <form class="mt-2" method="get">
            <input type="text" name="Email" value="{{ old('Email') }}" placeholder="press button to see all Email" autocomplete="off" disable>
            <button type="submit" class="rounded-pill border-0 bg-secondary">Search</button>
        </form>

        <form class="mt-2" method="get">
            <input type="text" name="scoreGmin" value="{{ old('scoreGmin') }}" placeholder="the score global min search" autocomplete="off">
            <button type="submit" class="rounded-pill border-0 bg-secondary">Search</button>
        </form>

        <form class="mt-2" method="get">
            <input type="text" name="scoreGmax" value="{{ old('scoreGmax') }}" placeholder="the score global max search" autocomplete="off">
            <button type="submit" class="rounded-pill border-0 bg-secondary">Search</button>
        </form>

    </div>

    <div class='d-md-flex justify-content-around'>

        <form class="mt-2" method="get">
            <input type="text" name="scoreCmin" value="{{ old('scoreCmin') }}" placeholder="the score per categories min search" autocomplete="off">
            <button type="submit" class="rounded-pill border-0 bg-secondary">Search</button>
        </form>

        <form class="mt-2" method="get">
            <input type="text" name="scoreCmax" value="{{ old('scoreCmax') }}" placeholder="the score per categories max search" autocomplete="off">
            <button type="submit" class="rounded-pill border-0 bg-secondary">Search</button>
        </form>
        
        <form class="mt-2" method="get">
            <input type="text" name="updatedTimeMax" value="{{ old('updatedTimeMax') }}" placeholder="the updated before this date" autocomplete="off">
            <button type="submit" class="rounded-pill border-0 bg-secondary">Search</button>
        </form>

        <form class="mt-2" method="get">
            <input type="text" name="updatedTimeMin" value="{{ old('updatedTimeMin') }}" placeholder="the updated after this date" autocomplete="off">
            <button type="submit" class="rounded-pill border-0 bg-secondary">Search</button>
        </form>

        <form class="mt-2" method="get">
            <input type="text" name="subscribe" value="{{ old('subscribe') }}" placeholder="press button to see all Subs" autocomplete="off">
            <button type="submit" class="rounded-pill border-0 bg-secondary">Search</button>
        </form>
    </div>

    <!-- <div class='d-md-flex p-5 justify-content-center'>
    
        <ul class="m-0 p-0">
            <li class="m-0 p-0 border border-dark list-unstyled form-control-md p-3 mt-2 user-select-all">N°</li>
            @forelse($otherdb as $user)
                <li class="border border-dark list-unstyled form-control-md p-3 mt-2 user-select-all">{{ $user->id }}</li>
            @empty
                <li class="border border-dark list-unstyled form-control-md p-3 mt-2 user-select-all">No service available</li>
            @endforelse
        </ul>


        <ul class="m-0 p-0">
            <li class="m-0 p-0 border border-dark list-unstyled form-control-md p-3 mt-2 user-select-all">lastname</li>
            @forelse($otherdb as $user)
                <li class="border border-dark list-unstyled form-control-md p-3 mt-2 user-select-all">{{ $user->lastname }}</li>
            @empty
                <li class="border border-dark list-unstyled form-control-md p-3 mt-2 user-select-all">No service available</li>
            @endforelse
        </ul>


        <ul class="m-0 p-0">
            <li class="m-0 p-0 border border-dark list-unstyled form-control-md p-3 mt-2 user-select-all">firstname</li>
            @forelse($otherdb as $user)
                <li class="border border-dark list-unstyled form-control-md p-3 mt-2 user-select-all">{{ $user->firstname }}</li>
            @empty
                <li class="border border-dark list-unstyled form-control-md p-3 mt-2 user-select-all">No service available</li>
            @endforelse
        </ul>


        <ul class="m-0 p-0">
            <li class="m-0 p-0 border border-dark list-unstyled form-control-md p-3 mt-2 user-select-all">nationality</li>
            @forelse($otherdb as $user)
                <li class="border border-dark list-unstyled form-control-md p-3 mt-2 user-select-all">{{ $user->nationality }}</li>
            @empty
                <li class="border border-dark list-unstyled form-control-md p-3 mt-2 user-select-all">No service available</li>
            @endforelse
        </ul>


        <ul class="m-0 p-0">
            <li class="m-0 p-0 border border-dark list-unstyled form-control-md p-3 mt-2 user-select-all">Professional situation</li>
            @forelse($otherdb as $Professional_situation)
                @if ($Professional_situation->Student == 1)
                    <li class="border border-dark list-unstyled form-control-md p-3 mt-2 user-select-all">Student</li>
                @elseif ($Professional_situation->Self_employed == 1)
                    <li class="border border-dark list-unstyled form-control-md p-3 mt-2 user-select-all">Self_employed</li>
                @elseif ($Professional_situation->Employed == 1)
                    <li class="border border-dark list-unstyled form-control-md p-3 mt-2 user-select-all">Employed</li>
                @elseif ($Professional_situation->Unemployed == 1)
                    <li class="border border-dark list-unstyled form-control-md p-3 mt-2 user-select-all">Unemployed</li>
                @elseif ($Professional_situation->Changing_jobs == 1)
                    <li class="border border-dark list-unstyled form-control-md p-3 mt-2 user-select-all">Changing_jobs</li>
                @else
                    <li class="border border-dark list-unstyled form-control-md p-3 mt-2 user-select-all">{{$Professional_situation->Description_other }}</li>
                @endif
            @empty
            @endforelse
        </ul>


        <ul class="m-0 p-0">
            <li class="m-0 p-0 border border-dark list-unstyled form-control-md p-3 mt-2 user-select-all">E-mail adress</li>
            @forelse($otherdb as $users)
                <li class="border border-dark list-unstyled form-control-md p-3 mt-2 user-select-all">{{ $users->email }}</li>
            @empty
                <li class="border border-dark list-unstyled form-control-md p-3 mt-2 user-select-all">No service available</li>
            @endforelse
        </ul>


        <ul class="m-0 p-0">
            <li class="m-0 p-0 border border-dark list-unstyled form-control-md p-3 mt-2 user-select-all">his score global</li>
            @forelse($otherdb as $user)
                <li class="border border-dark list-unstyled form-control-md p-3 mt-2 user-select-all">{{ $user->score_survey }}</li>
            @empty
                <li class="border border-dark list-unstyled form-control-md p-3 mt-2 user-select-all">No service available</li>
            @endforelse
        </ul>


        <ul class="m-0 p-0">
            <li class="m-0 p-0 border border-dark list-unstyled form-control-md p-3 mt-2 user-select-all">his score categories</li>
            @forelse($otherdb as $user)
                <li class="border border-dark list-unstyled form-control-md p-3 mt-2 user-select-all">{{ $user->score_categories }}</li>
            @empty
                <li class="border border-dark list-unstyled form-control-md p-3 mt-2 user-select-all">No service available</li>
            @endforelse
        </ul>
    </div> -->

    <table class="w-100 mt-5">

        <thead class="w-100">
            <tr  class="w-100 justify-content-between ">
                <th class="p-2 border">N°</th>
                <th class="p-2 border">lastname</th>
                <th class="p-2 border">firstname</th>
                <th class="p-2 bordaer">nationality</th>
                <th class="p-2 border">Professional situation</th>
                <th class="p-2 border">E-mail adress</th>
                <th class="p-2 border">his score global</th>
                <th class="p-2 border ">his score categories</th>
            </tr>
        </thead>

        <tbody class="w-100">
            @forelse($otherdb as $user)
                <tr class="w-100 justify-content-between">
                    <th class="p-2 border">{{$user->id}}</th>
                    <th class="p-2 border">{{$user->lastname}}</th>
                    <th class="p-2 border">{{$user->firstname}}</th>
                    <th class="p-2 border">{{$user->nationality}}</th>
                    @if ($Professional_situation->Student == 1)
                        <th class="p-2 border">Student</th>
                    @elseif ($Professional_situation->Self_employed == 1)
                        <th class="p-2 border">Self_employed</th>
                    @elseif ($Professional_situation->Employed == 1)
                        <th class="p-2 border">Employed</th>
                    @elseif ($Professional_situation->Unemployed == 1)
                        <th class="p-2 border">Unemployed</th>
                    @elseif ($Professional_situation->Changing_jobs == 1)
                        <th class="p-2 border">Changing_jobs</th>
                    @else
                        <th class="p-2 border">{{$Professional_situation->Description_other }}</th>
                    @endif
                    <th class="p-2 border">{{$user->email}}</th>
                    <th class="p-2 border">{{$user->score_survey}}</th>
                    <th class="p-2 border">{{$user->score_categories}}</th>
                </tr>
            @empty
            @endforelse
        </tbody>

    </table>

@endsection
