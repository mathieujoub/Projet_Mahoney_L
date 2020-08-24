@extends('layout_formulaire')

@section('contenu')
<<<<<<< HEAD
<header>
        <div class="containeur">
            <div class="titleMaster">
                <h1>Titre du test</h1>
            </div>
        </div>
    </header>
    <section>
        <div class="containeur">
            <form action="formulaire.php" method="post" class="userInfoFirst">
                <div class="user">
                    <label for="firstname">Firstname:</label>
                    <input type="text" name="firstname" id="firstname">
                </div>
                <div class="user">
                    <label for="lastname">Lastname:</label>
                    <input type="text" name="lastname" id="lastname">
                </div>
                <div class="user">
                    <label for="birth">Years of birth:</label>
                    <input type="date" name="birth" id="birth">
                </div>
                <div class="user">
                    <label for="nationality">Nationality:</label>
                    <input type="text" name="nationality" id="nationality">
                    <div class="would">
                        <label for="whySurvey"><h2>Would you like to tell us why you are interested in this test?</h2></label>
                        <textarea name="whySurvey" id="whysurvey" cols="30 " rows="6 " maxlength="180"></textarea>
                    </div>
                </div>
                <input type="submit" value="Envoyer" class="btn btn-start">
            </form>
        </div>
    </section>
    <section>
        <div class="containeur ">
            <from class="would ">
                
            </from>
        </div>
    </section>
    <section>
        <div class="containeur">
            
                
                    <div class="titlePro">
                        <h2>Your profesional situation?</h2>
                    </div>
                
                <from class="checked">
                    <div class="radioLeft">
                        <div class="radio">
                            <input type="checkbox" name="check" id="">
                            <label for="">Studying</label></br>
                        </div>
                        <div class="radio">
                            <input type="checkbox" name="check" id="">
                            <label for="">Self employed</label></br>
                        </div>
                        <div class="radio">
                            <input type="checkbox" name="check" id="">
                            <label for="">Employed</label></br>
                        </div>
                    </div>
                    <div class="radioRight">
                        <div class="radio">
                            <input type="checkbox" name="check" id="">
                            <label for="">Unemployed</label></br>
                        </div>
                        <div class="radio">
                            <input type="checkbox" name="check" id="">
                            <label for="">Changing jobs</label></br>
                        </div>
                        <div class="radio">
                            <input type="checkbox" name="check" id="">
                            <label for="">Other</label></br>
                        </div>
                    </div>
            
            <div class="form-btn">
                <label for="">please describe your current situation</label></br>
                <textarea name="" id="" cols="30" rows="1" maxlength="80"></textarea>

            </div>


    </from>
    </div>
    </section>

    @endsection
=======
<div class="container">
    <div class="row justify-content-center">
        <h1>Survey title</h1>
    </div>
    <form action="/formulaire" method="POST">
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
                <input type="text" class="form-control" id="nationality" name="nationnality">
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
>>>>>>> mathieu
