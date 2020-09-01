@extends('layout_formulaire')

@section('contenu')
<div class="container">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth

                    <a href="{{ url('/serviceinfo') }}"">Info services</a>
                    
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            <div class="row justify-content-center">
                <h1>Survey title</h1>
            </div>
            <form action="/formulaire" method="post">
    
    {{ csrf_field() }}

        <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">First name:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="firstname" name="firstname" value="{{ old('firstname') }}">
                @if($errors->has('firstname'))
                    <p>Le champ « First name » a une erreur </p>
                @endif
            </div>
        </div>
        <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Last name:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="lastname" name="lastname" value="{{ old('lastname') }}">
                @if($errors->has('lastname'))
                    <p>Le champ « Last name » a une erreur</p>
                @endif
            </div>
        </div>
        <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Birth:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="birth" name="birth" value="{{ old('birth') }}">
                @if($errors->has('birth'))
                    :
                @endif
            </div>
        </div>
        <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Nationality:</label>
            <div class="col-sm-10">
            <select name="nationality" class="form-control">
                <option value="France" selected="selected">France </option>

                <option value="Afghanistan">Afghanistan </option>
                <option value="Afrique_Centrale">Afrique_Centrale </option>
                <option value="Afrique_du_sud">Afrique_du_Sud </option>
                <option value="Albanie">Albanie </option>
                <option value="Algerie">Algerie </option>
                <option value="Allemagne">Allemagne </option>
                <option value="Andorre">Andorre </option>
                <option value="Angola">Angola </option>
                <option value="Anguilla">Anguilla </option>
                <option value="Arabie_Saoudite">Arabie_Saoudite </option>
                <option value="Argentine">Argentine </option>
                <option value="Armenie">Armenie </option>
                <option value="Australie">Australie </option>
                <option value="Autriche">Autriche </option>
                <option value="Azerbaidjan">Azerbaidjan </option>

                <option value="Bahamas">Bahamas </option>
                <option value="Bangladesh">Bangladesh </option>
                <option value="Barbade">Barbade </option>
                <option value="Bahrein">Bahrein </option>
                <option value="Belgique">Belgique </option>
                <option value="Belize">Belize </option>
                <option value="Benin">Benin </option>
                <option value="Bermudes">Bermudes </option>
                <option value="Bielorussie">Bielorussie </option>
                <option value="Bolivie">Bolivie </option>
                <option value="Botswana">Botswana </option>
                <option value="Bhoutan">Bhoutan </option>
                <option value="Boznie_Herzegovine">Boznie_Herzegovine </option>
                <option value="Bresil">Bresil </option>
                <option value="Brunei">Brunei </option>
                <option value="Bulgarie">Bulgarie </option>
                <option value="Burkina_Faso">Burkina_Faso </option>
                <option value="Burundi">Burundi </option>

                <option value="Caiman">Caiman </option>
                <option value="Cambodge">Cambodge </option>
                <option value="Cameroun">Cameroun </option>
                <option value="Canada">Canada </option>
                <option value="Canaries">Canaries </option>
                <option value="Cap_vert">Cap_Vert </option>
                <option value="Chili">Chili </option>
                <option value="Chine">Chine </option>
                <option value="Chypre">Chypre </option>
                <option value="Colombie">Colombie </option>
                <option value="Comores">Colombie </option>
                <option value="Congo">Congo </option>
                <option value="Congo_democratique">Congo_democratique </option>
                <option value="Cook">Cook </option>
                <option value="Coree_du_Nord">Coree_du_Nord </option>
                <option value="Coree_du_Sud">Coree_du_Sud </option>
                <option value="Costa_Rica">Costa_Rica </option>
                <option value="Cote_d_Ivoire">Côte_d_Ivoire </option>
                <option value="Croatie">Croatie </option>
                <option value="Cuba">Cuba </option>

                <option value="Danemark">Danemark </option>
                <option value="Djibouti">Djibouti </option>
                <option value="Dominique">Dominique </option>

                <option value="Egypte">Egypte </option>
                <option value="Emirats_Arabes_Unis">Emirats_Arabes_Unis </option>
                <option value="Equateur">Equateur </option>
                <option value="Erythree">Erythree </option>
                <option value="Espagne">Espagne </option>
                <option value="Estonie">Estonie </option>
                <option value="Etats_Unis">Etats_Unis </option>
                <option value="Ethiopie">Ethiopie </option>

                <option value="Falkland">Falkland </option>
                <option value="Feroe">Feroe </option>
                <option value="Fidji">Fidji </option>
                <option value="Finlande">Finlande </option>
                <option value="France">France </option>
                <option value="Gabon">Gabon </option>
                <option value="Gambie">Gambie </option>
                <option value="Georgie">Georgie </option>
                <option value="Ghana">Ghana </option>
                <option value="Gibraltar">Gibraltar </option>
                <option value="Grece">Grece </option>
                <option value="Grenade">Grenade </option>
                <option value="Groenland">Groenland </option>
                <option value="Guadeloupe">Guadeloupe </option>
                <option value="Guam">Guam </option>
                <option value="Guatemala">Guatemala</option>
                <option value="Guernesey">Guernesey </option>
                <option value="Guinee">Guinee </option>
                <option value="Guinee_Bissau">Guinee_Bissau </option>
                <option value="Guinee equatoriale">Guinee_Equatoriale </option>
                <option value="Guyana">Guyana </option>
                <option value="Guyane_Francaise ">Guyane_Francaise </option>

                <option value="Haiti">Haiti </option>
                <option value="Hawaii">Hawaii </option>
                <option value="Honduras">Honduras </option>
                <option value="Hong_Kong">Hong_Kong </option>
                <option value="Hongrie">Hongrie </option>

                <option value="Inde">Inde </option>
                <option value="Indonesie">Indonesie </option>
                <option value="Iran">Iran </option>
                <option value="Iraq">Iraq </option>
                <option value="Irlande">Irlande </option>
                <option value="Islande">Islande </option>
                <option value="Israel">Israel </option>
                <option value="Italie">italie </option>

                <option value="Jamaique">Jamaique </option>
                <option value="Jan Mayen">Jan Mayen </option>
                <option value="Japon">Japon </option>
                <option value="Jersey">Jersey </option>
                <option value="Jordanie">Jordanie </option>

                <option value="Kazakhstan">Kazakhstan </option>
                <option value="Kenya">Kenya </option>
                <option value="Kirghizstan">Kirghizistan </option>
                <option value="Kiribati">Kiribati </option>
                <option value="Koweit">Koweit </option>

                <option value="Laos">Laos </option>
                <option value="Lesotho">Lesotho </option>
                <option value="Lettonie">Lettonie </option>
                <option value="Liban">Liban </option>
                <option value="Liberia">Liberia </option>
                <option value="Liechtenstein">Liechtenstein </option>
                <option value="Lituanie">Lituanie </option>
                <option value="Luxembourg">Luxembourg </option>
                <option value="Lybie">Lybie </option>

                <option value="Macao">Macao </option>
                <option value="Macedoine">Macedoine </option>
                <option value="Madagascar">Madagascar </option>
                <option value="Madère">Madère </option>
                <option value="Malaisie">Malaisie </option>
                <option value="Malawi">Malawi </option>
                <option value="Maldives">Maldives </option>
                <option value="Mali">Mali </option>
                <option value="Malte">Malte </option>
                <option value="Man">Man </option>
                <option value="Mariannes du Nord">Mariannes du Nord </option>
                <option value="Maroc">Maroc </option>
                <option value="Marshall">Marshall </option>
                <option value="Martinique">Martinique </option>
                <option value="Maurice">Maurice </option>
                <option value="Mauritanie">Mauritanie </option>
                <option value="Mayotte">Mayotte </option>
                <option value="Mexique">Mexique </option>
                <option value="Micronesie">Micronesie </option>
                <option value="Midway">Midway </option>
                <option value="Moldavie">Moldavie </option>
                <option value="Monaco">Monaco </option>
                <option value="Mongolie">Mongolie </option>
                <option value="Montserrat">Montserrat </option>
                <option value="Mozambique">Mozambique </option>

                <option value="Namibie">Namibie </option>
                <option value="Nauru">Nauru </option>
                <option value="Nepal">Nepal </option>
                <option value="Nicaragua">Nicaragua </option>
                <option value="Niger">Niger </option>
                <option value="Nigeria">Nigeria </option>
                <option value="Niue">Niue </option>
                <option value="Norfolk">Norfolk </option>
                <option value="Norvege">Norvege </option>
                <option value="Nouvelle_Caledonie">Nouvelle_Caledonie </option>
                <option value="Nouvelle_Zelande">Nouvelle_Zelande </option>

                <option value="Oman">Oman </option>
                <option value="Ouganda">Ouganda </option>
                <option value="Ouzbekistan">Ouzbekistan </option>

                <option value="Pakistan">Pakistan </option>
                <option value="Palau">Palau </option>
                <option value="Palestine">Palestine </option>
                <option value="Panama">Panama </option>
                <option value="Papouasie_Nouvelle_Guinee">Papouasie_Nouvelle_Guinee </option>
                <option value="Paraguay">Paraguay </option>
                <option value="Pays_Bas">Pays_Bas </option>
                <option value="Perou">Perou </option>
                <option value="Philippines">Philippines </option>
                <option value="Pologne">Pologne </option>
                <option value="Polynesie">Polynesie </option>
                <option value="Porto_Rico">Porto_Rico </option>
                <option value="Portugal">Portugal </option>

                <option value="Qatar">Qatar </option>

                <option value="Republique_Dominicaine">Republique_Dominicaine </option>
                <option value="Republique_Tcheque">Republique_Tcheque </option>
                <option value="Reunion">Reunion </option>
                <option value="Roumanie">Roumanie </option>
                <option value="Royaume_Uni">Royaume_Uni </option>
                <option value="Russie">Russie </option>
                <option value="Rwanda">Rwanda </option>

                <option value="Sahara Occidental">Sahara Occidental </option>
                <option value="Sainte_Lucie">Sainte_Lucie </option>
                <option value="Saint_Marin">Saint_Marin </option>
                <option value="Salomon">Salomon </option>
                <option value="Salvador">Salvador </option>
                <option value="Samoa_Occidentales">Samoa_Occidentales</option>
                <option value="Samoa_Americaine">Samoa_Americaine </option>
                <option value="Sao_Tome_et_Principe">Sao_Tome_et_Principe </option>
                <option value="Senegal">Senegal </option>
                <option value="Seychelles">Seychelles </option>
                <option value="Sierra Leone">Sierra Leone </option>
                <option value="Singapour">Singapour </option>
                <option value="Slovaquie">Slovaquie </option>
                <option value="Slovenie">Slovenie</option>
                <option value="Somalie">Somalie </option>
                <option value="Soudan">Soudan </option>
                <option value="Sri_Lanka">Sri_Lanka </option>
                <option value="Suede">Suede </option>
                <option value="Suisse">Suisse </option>
                <option value="Surinam">Surinam </option>
                <option value="Swaziland">Swaziland </option>
                <option value="Syrie">Syrie </option>

                <option value="Tadjikistan">Tadjikistan </option>
                <option value="Taiwan">Taiwan </option>
                <option value="Tonga">Tonga </option>
                <option value="Tanzanie">Tanzanie </option>
                <option value="Tchad">Tchad </option>
                <option value="Thailande">Thailande </option>
                <option value="Tibet">Tibet </option>
                <option value="Timor_Oriental">Timor_Oriental </option>
                <option value="Togo">Togo </option>
                <option value="Trinite_et_Tobago">Trinite_et_Tobago </option>
                <option value="Tristan da cunha">Tristan de cuncha </option>
                <option value="Tunisie">Tunisie </option>
                <option value="Turkmenistan">Turmenistan </option>
                <option value="Turquie">Turquie </option>

                <option value="Ukraine">Ukraine </option>
                <option value="Uruguay">Uruguay </option>

                <option value="Vanuatu">Vanuatu </option>
                <option value="Vatican">Vatican </option>
                <option value="Venezuela">Venezuela </option>
                <option value="Vierges_Americaines">Vierges_Americaines </option>
                <option value="Vierges_Britanniques">Vierges_Britanniques </option>
                <option value="Vietnam">Vietnam </option>

                <option value="Wake">Wake </option>
                <option value="Wallis et Futuma">Wallis et Futuma </option>

                <option value="Yemen">Yemen </option>
                <option value="Yougoslavie">Yougoslavie </option>

                <option value="Zambie">Zambie </option>
                <option value="Zimbabwe">Zimbabwe </option>

            </select>
                <!--<input type="text" class="form-control" id="#auto" name="nationality" value="{{ old('nationality') }}">-->
                @if($errors->has('nationality'))
                    <p>Le champ « Nationality » a une erreur</p>
                @endif
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
                <label class="form-check-label" for="gridCheck1">Student</label>
                <input type="hidden" name="student" value="0"/>
                <input class="form-check-input" type="checkbox" id="gridCheck1" name='student' value="1">
            </div>
            <div class="form-check">
                <label class="form-check-label" for="gridCheck1">Self Employed</label>
                <input type="hidden" name="selfEmployed" value="0"/>
                <input class="form-check-input" type="checkbox" id="gridCheck1" name="selfEmployed" value="1">
            </div>
        </div>
        <div class="form-group row justify-content-around">
            <div class="form-check">
                <label class="form-check-label" for="gridCheck1">Employed</label>
                <input type="hidden" name="employed" value="0"/>
                <input class="form-check-input" type="checkbox" id="gridCheck1" name="employed" value="1">
            </div>
        <div class="form-check">
                <label class="form-check-label" for="gridCheck1">Unemployed</label>
                <input type="hidden" name="unemployed" value="0"/>    
                <input class="form-check-input" type="checkbox" id="gridCheck1" name="unemployed" value="1">
            </div>
        </div>
        <div class="form-group row justify-content-around">
            <div class="form-check">
                <label class="form-check-label" for="gridCheck1">Other</label>
                <input type="hidden" name="other" value="0"/>    
                <input class="form-check-input" type="checkbox" id="gridCheck1" name="other" value="1">
            </div>
            <div class="form-check">
                <label class="form-check-label" for="gridCheck1">Changing Jobs</label>
                <input type="hidden" name="changingJobs" value="0"/>
                <input class="form-check-input" type="checkbox" id="gridCheck1" name="changingJobs" value="1">
            </div>
        </div>
        <div class="form-group">
                <label for="exampleFormControlTextarea1" class="row justify-content-center""><h2>please describe your current situation:</h2></label>
                <textarea class="form-control" id="exampleFormControlTextarea1" name="description_other" rows="1" maxlength="80"></textarea>
        </div>
        <div class="form-group row justify-content-end">    
            <button type="submit" class="btn btn-primary">Start the survey</button>
        </div>   
    </form>
@endsection