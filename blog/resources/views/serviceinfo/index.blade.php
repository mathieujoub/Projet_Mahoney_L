@extends('app')

@section('title')

@section('content')
    <h1>Welcome admin</h1>
    <div class='d-md-flex justify-content-around'>

        <form class="mt-2" method="get">
            <input type="text" name="nationality" value="{{ old('nationality') }}" placeholder="the nationality search" autocomplete="off">
            <button type="submit">Search</button>
        </form>

        <form class="mt-2" method="get">
            <input type="text" name="Professional" value="{{ old('Professional') }}" placeholder="the Professional situation search" autocomplete="off">
            <button type="submit">Search</button>
        </form>

        <form class="mt-2" method="get">
            <input type="text" name="Email" value="{{ old('Email') }}" placeholder="press button to see all Email" autocomplete="off" disable>
            <button type="submit">Search</button>
        </form>

        <form class="mt-2" method="get">
            <input type="text" name="scoreGmin" value="{{ old('scoreGmin') }}" placeholder="the score global min search" autocomplete="off">
            <button type="submit">Search</button>
        </form>

        <form class="mt-2" method="get">
            <input type="text" name="scoreGmax" value="{{ old('scoreGmax') }}" placeholder="the score global max search" autocomplete="off">
            <button type="submit">Search</button>
        </form>

    </div>

    <div class='d-md-flex justify-content-around'>

        <form class="mt-2" method="get">
            <input type="text" name="scoreCmin" value="{{ old('scoreCmin') }}" placeholder="the score per categories min search" autocomplete="off">
            <button type="submit">Search</button>
        </form>

        <form class="mt-2" method="get">
            <input type="text" name="scoreCmax" value="{{ old('scoreCmax') }}" placeholder="the score per categories max search" autocomplete="off">
            <button type="submit">Search</button>
        </form>
        
        <form class="mt-2" method="get">
            <input type="text" name="updatedTimeMax" value="{{ old('updatedTimeMax') }}" placeholder="the updated before this date" autocomplete="off">
            <button type="submit">Search</button>
        </form>

        <form class="mt-2" method="get">
            <input type="text" name="updatedTimeMin" value="{{ old('updatedTimeMin') }}" placeholder="the updated after this date" autocomplete="off">
            <button type="submit">Search</button>
        </form>

        <form class="mt-2" method="get">
            <input type="text" name="subscribe" value="{{ old('subscribe') }}" placeholder="press button to see all Subs" autocomplete="off">
            <button type="submit">Search</button>
        </form>
    </div>

    <div class='d-md-flex justify-content-around mt-5'>
    
        <ul>
            <li class="border border-dark list-unstyled form-control-sm">N°</li>
            @forelse($otherdb as $user)
                <li class="border border-dark list-unstyled form-control-sm">{{ $user->id }}</li>
            @empty
                <li class="border border-dark list-unstyled form-control-sm">No service available</li>
            @endforelse
        </ul>


        <ul>
            <li class="border border-dark list-unstyled form-control-sm">lastname</li>
            @forelse($otherdb as $user)
                <li class="border border-dark list-unstyled form-control-sm">{{ $user->lastname }}</li>
            @empty
                <li class="border border-dark list-unstyled form-control-sm">No service available</li>
            @endforelse
        </ul>


        <ul>
            <li class="border border-dark list-unstyled form-control-sm">firstname</li>
            @forelse($otherdb as $user)
                <li class="border border-dark list-unstyled form-control-sm">{{ $user->firstname }}</li>
            @empty
                <li class="border border-dark list-unstyled form-control-sm">No service available</li>
            @endforelse
        </ul>


        <ul>
            <li class="border border-dark list-unstyled form-control-sm">nationality</li>
            @forelse($otherdb as $user)
                <li class="border border-dark list-unstyled form-control-sm">{{ $user->nationality }}</li>
            @empty
                <li class="border border-dark list-unstyled form-control-sm">No service available</li>
            @endforelse
        </ul>


        <ul>
            <li class="border border-dark list-unstyled form-control-sm">Professional situation</li>
            @forelse($otherdb as $Professional_situation)
                @if ($Professional_situation->Student == 1)
                    <li class="border border-dark list-unstyled form-control-sm">Student</li>
                @elseif ($Professional_situation->Self_employed == 1)
                    <li class="border border-dark list-unstyled form-control-sm">Self_employed</li>
                @elseif ($Professional_situation->Employed == 1)
                    <li class="border border-dark list-unstyled form-control-sm">Employed</li>
                @elseif ($Professional_situation->Unemployed == 1)
                    <li class="border border-dark list-unstyled form-control-sm">Unemployed</li>
                @elseif ($Professional_situation->Changing_jobs == 1)
                    <li class="border border-dark list-unstyled form-control-sm">Changing_jobs</li>
                @else
                    <li class="border border-dark list-unstyled form-control-sm">{{$Professional_situation->Description_other }}</li>
                @endif
            @empty
            @endforelse
        </ul>


        <ul>
            <li class="border border-dark list-unstyled form-control-sm">E-mail adress</li>
            @forelse($otherdb as $users)
                <li class="border border-dark list-unstyled form-control-sm">{{ $users->email }}</li>
            @empty
                <li class="border border-dark list-unstyled form-control-sm">No service available</li>
            @endforelse
        </ul>


        <ul>
            <li class="border border-dark list-unstyled form-control-sm">his score global</li>
            @forelse($otherdb as $user)
                <li class="border border-dark list-unstyled form-control-sm">{{ $user->score_survey }}</li>
            @empty
                <li class="border border-dark list-unstyled form-control-sm">No service available</li>
            @endforelse
        </ul>


        <ul>
            <li class="border border-dark list-unstyled form-control-sm">his score categories</li>
            @forelse($otherdb as $user)
                <li class="border border-dark list-unstyled form-control-sm">{{ $user->score_categories }}</li>
            @empty
                <li class="border border-dark list-unstyled form-control-sm">No service available</li>
            @endforelse
        </ul>
    </div>

@endsection
