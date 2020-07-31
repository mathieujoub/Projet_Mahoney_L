@extends('app')

@section('title', 'services')

@section('content')
    <h1 style="display:flex; justify-content:center; width:100%;">Welcome admin</h1>

    <div class="form-group">
            <label for="exampleFormControlTextarea1" class="row justify-content-center""><h2>What professional situation interest you?</h2></label>
        </div>
        <div class="form-group row justify-content-around">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck1">
                <label class="form-check-label" for="gridCheck1">Student</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck1">
                <label class="form-check-label" for="gridCheck1">
                Self Employed
                </label>
            </div>
        </div>
        <div class="form-group row justify-content-around">
            <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck1">
                    <label class="form-check-label" for="gridCheck1">
                    Employed
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck1">
                    <label class="form-check-label" for="gridCheck1">
                    Unemployed
                    </label>
                </div>
        </div>
        <div class="form-group row justify-content-around">
            <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck1">
                    <label class="form-check-label" for="gridCheck1">
                    Other
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck1">
                    <label class="form-check-label" for="gridCheck1">
                    Changing Jobs
                    </label>
                </div>
        </div>

    <form action="../public/service" method="post" style="width:100%; justify-content:center;">
        <input type="text" name="nameText" autocomplete="off">
        @csrf
        <button>Add service</button>
    </form>

    <p style="color: red;">@error('nameText') {{$message}} @enderror

    <!-- <ul>
        @forelse($services as $listresult)

            <li>{{ $listresult->nameText }}</li>
        @empty
            <li>No service available</li>
        @endforelse
    </ul> -->
@endsection