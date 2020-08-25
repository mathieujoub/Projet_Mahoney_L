@extends('layout_formulaire')
​
@section('contenu')
<div class="container">
    <div class="row justify-content-center">
        <h1>Survey title</h1>
    </div>
    <form action="/formulaire" method="post">
        <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">First name:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="firstname" name="firstname">
            </div>
        </div>
        <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Last name:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="lastname" name="lastname">
            </div>
        </div>
        <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Birth:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="birth" name="birth">
            </div>
        </div>
        <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Nationality:</label>
            <div class="col-sm-10">
            <select class="nationality" name="country" placeholder="France">
            
        </select> 
            </div>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1" class="row justify-content-center""><h2>Would you like to tell us why you are interested in this test?</h2></label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" maxlength="180" name="why_survey"></textarea>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1" class="row justify-content-center""><h2>Your professional situation?</h2></label>
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
        <div class="form-group">
                <label for="exampleFormControlTextarea1" class="row justify-content-center""><h2>please describe your current situation:</h2></label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="1" maxlength="80"></textarea>
        </div>
            
        <div class="form-group row justify-content-end">    
            <button type="submit" class="btn btn-primary">Start the survey</button>
        </div>   
    </form>
@endsection