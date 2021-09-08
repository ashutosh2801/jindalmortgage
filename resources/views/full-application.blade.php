<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Full Application Form | Jindal Mortgages</title>

        <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//code.jquery.com/jquery-2.1.3.min.js"></script>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

        <link href="{{ asset('css/main.css') }}" rel="stylesheet">
        <script src="{{ asset('js/main.js') }}"></script>
        
    </head>
<body>
<div class="loading">Loading&#8230;</div>
<div class="container">
    <form class="form-horizontal" role="form" method="POST" id="application_form" onsubmit="return false">
        {{ csrf_field() }} 
        <input type="hidden" name="token" value="{{$user->token}}" />
        <input type="hidden" name="application_type" value="Full-Application" id="application_type" />
        <img src="https://jindalmortgages.ca/wp-content/themes/jm-mortgage/assets/images/logo.png" height="70" />
        <h2><u>{{$user->application->application_name}}</u> Application Form</h2>

        <div class="container-max">
            <div class="stepwizard">
                <div class="stepwizard-row setup-panel" style="display: none">
                    <div class="stepwizard-step">
                        <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
                    </div>
                    @for ($i = 2; $i <= 15; $i++)
                    <div class="stepwizard-step">
                        <a href="#step-{{$i}}" type="button" class="btn btn-default btn-circle" disabled="disabled">{{$i}}</a>
                    </div>   
                    @endfor
                </div>
            </div>
            <div id="message" class="clear alert-danger"></div>
            <div class="row setup-content" id="step-1">
                <div class="col-xs-12">
                    <div class="">
                        <h3>Personal Information</h3>
                        
                        <div class="form-group">
                            <label for="applicant_first_name" class="col-sm-3 control-label">First Name</label>
                            <div class="col-sm-9">
                                <input type="text" value="{{$first_name}}" id="applicant_first_name" name="applicant_first_name" placeholder="First Name" class="form-control" required autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="applicant_last_name" class="col-sm-3 control-label">Last Name</label>
                            <div class="col-sm-9">
                                <input type="text" value="{{$last_name}}" id="applicant_last_name" name="applicant_last_name" placeholder="Last Name" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="applicant_email" class="col-sm-3 control-label">Email </label>
                            <div class="col-sm-9">
                                <input type="email" value="{{$user->email}}" id="applicant_email" name="applicant_email" placeholder="Email" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="applicant_phone" class="col-sm-3 control-label">Phone number </label>
                            <div class="col-sm-9">
                                <input type="text" value="{{$user->mobile}}" id="applicant_phone" name="applicant_phone" placeholder="Phone number" class="form-control" maxlength="15" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="applicant_birth_date" class="col-sm-3 control-label">Date of Birth</label>
                            <div class="col-sm-9">
                                <input type="date" max="{{date('Y')-18}}-{{date('m-d')}}" id="applicant_birth_date" name="applicant_birth_date" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="applicant_sin" class="col-sm-3 control-label">SIN </label>
                            <div class="col-sm-9">
                                <input type="text" id="applicant_sin" name="applicant_sin" placeholder="SIN" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="applicant_street_number" class="col-sm-3 control-label">Street Number </label>
                            <div class="col-sm-9">
                                <input type="number" id="applicant_street_number" name="applicant_street_number" placeholder="Street Number" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="applicant_street_name" class="col-sm-3 control-label">Street Name </label>
                            <div class="col-sm-9">
                                <input type="text" id="applicant_street_name" name="applicant_street_name" placeholder="Street Name" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="applicant_street_type" class="col-sm-3 control-label">Street Type </label>
                            <div class="col-sm-9">
                                <select class="form-control" id="applicant_street_type" name="applicant_street_type">
                                    <option value="0" selected="">Street Type</option>
                                    <option value="Ave">Ave</option>
                                    <option value="Blvd">Blvd</option>
                                    <option value="Crt">Crt</option>
                                    <option value="Cres">Cres</option>
                                    <option value="Dr">Dr</option>
                                    <option value="Lane">Lane</option>
                                    <option value="Pl">Pl</option>
                                    <option value="Rd">Rd</option>
                                    <option value="Rte">Rte</option>
                                    <option value="St">St</option>
                                    <option value="Terr">Terr</option>
                                    <option value="Other">Other...</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="applicant_street_type" class="col-sm-3 control-label">Street Direction </label>
                            <div class="col-sm-9">
                                <select class="form-control" name="applicant_street_direction" id="applicant_street_direction">
                                    <option value="" selected="">Street Direction</option>
                                    <option value="North">North</option>
                                    <option value="South">South</option>
                                    <option value="East">East</option>
                                    <option value="West">West</option>
                                    <option value="Northeast">Northeast</option>
                                    <option value="Southeast">Southeast</option>
                                    <option value="Northwest">Northwest</option>
                                    <option value="Southwest">Southwest</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="applicant_unit_number" class="col-sm-3 control-label">Unit Number</label>
                            <div class="col-sm-9">
                                <input type="text" id="applicant_unit_number" name="applicant_unit_number" placeholder="Unit Number" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="applicant_city" class="col-sm-3 control-label">City / Town</label>
                            <div class="col-sm-9">
                                <input type="text" id="applicant_city" name="applicant_city" placeholder="City" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="applicant_province" class="col-sm-3 control-label">Province </label>
                            <div class="col-sm-9">
                                <select class="form-control" id="applicant_province" name="applicant_province" required>					
                                    <option selected="" value="">Province</option>
                                    <option value="Alberta">Alberta</option>
                                    <option value="British Columbia">British Columbia</option>
                                    <option value="Manitoba">Manitoba</option>
                                    <option value="New Brunswick">New Brunswick</option>
                                    <option value="Newfoundland &amp; Labrador">Newfoundland &amp; Labrador</option>
                                    <option value="Northwest Territories">Northwest Territories</option>
                                    <option value="Nova Scotia">Nova Scotia</option>
                                    <option value="Nunavut">Nunavut</option>
                                    <option value="Ontario">Ontario</option>
                                    <option value="Prince Edward Island">Prince Edward Island</option>
                                    <option value="Quebec">Quebec</option>
                                    <option value="Saskatchewan">Saskatchewan</option>
                                    <option value="Yukon">Yukon</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="applicant_postal_code" class="col-sm-3 control-label">Postal Code </label>
                            <div class="col-sm-9">
                                <input type="text" id="applicant_postal_code" name="applicant_postal_code" placeholder="Postal Code" class="form-control" maxlength="7" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="applicant_residential_status" class="col-sm-3 control-label">Residential Status </label>
                            <div class="col-sm-9">
                                <select class="form-control" id="applicant_residential_status" name="applicant_residential_status" required>					
                                    <option selected="" value="">Residential Status</option>
                                    <option value="Own">Own</option>
                                    <option value="Rent">Rent</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="applicant_time_at_residence_year" class="col-sm-3 col-xs-12 control-label">Time At Residence </label>
                            <div class="col-sm-4 col-xs-6">
                                <select class="form-control" id="applicant_time_at_residence_year" name="applicant_time_at_residence_year" required>					
                                    <option selected="" value="">Year(s)</option>
                                    @for ($i = 1; $i < 15; $i++)
                                    <option value="{{$i}}">{{$i}}</option>                                        
                                    @endfor
                                </select>
                            </div>
                            <div class="col-sm-4 col-xs-6">
                                <select class="form-control" id="applicant_time_at_residence_month" name="applicant_time_at_residence_month">					
                                    <option selected="" value="">Month(s)</option>
                                    @for ($i = 1; $i < 12; $i++)
                                    <option value="{{$i}}">{{$i}}</option>                                        
                                    @endfor
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="applicant_preferre_contact_method" class="col-sm-3 control-label">Preferred Contact Method </label>
                            <div class="col-sm-9">
                                <select class="form-control" id="applicant_preferre_contact_method" name="applicant_preferre_contact_method">					
                                    <option selected="" value="">Preferred Contact Method</option>
                                    <option value="Email">Email</option>
                                    <option value="Phone">Phone</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="applicant_marital_status" class="col-sm-3 control-label">Marital Status </label>
                            <div class="col-sm-9">
                                <select class="form-control" id="applicant_marital_status" name="applicant_marital_status">					
                                    <option selected="" value="">Marital Status</option>
                                    <option value="Single">Single</option>
                                    <option value="Married">Married</option>
                                    <option value="Divorced">Divorced</option>
                                    <option value="Common Law">Common Law</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="applicant_langauge_preference" class="col-sm-3 control-label">Langugage Preference </label>
                            <div class="col-sm-9">
                                <select class="form-control" id="applicant_langauge_preference" name="applicant_langauge_preference">					
                                    <option selected="" value="">Langauge Preference</option>
                                    <option value="English">English</option>
                                    <option value="French">French</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="applicant_required_money" class="col-sm-3 control-label">When do you need the money? </label>
                            <div class="col-sm-9">
                                <select class="form-control" id="applicant_required_money" name="applicant_required_money">					
                                    <option selected="" value="">When do you need the money?</option>
                                    <option value="30 Days">30 Days</option>
                                    <option value="60 Days">60 Days</option>
                                    <option value="90 Days">90 Days</option>
                                    <option value="120 Days">120 Days</option>
                                    <option value="120+ Days">120+ Days</option>
                                </select>
                            </div>
                        </div>                        
                        
                        <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
                        {{-- <button class="btn btn-default prevBtn btn-lg pull-left" type="button" >Previous</button> --}}

                    </div>
                </div>
            </div>
            <div class="row setup-content" id="step-2">
                <div class="col-xs-12">
                    <div class="">
                        <h3>Applicant - Previous Address</h3>

                        <div class="form-group">
                            <label for="applicant_previous_street_number" class="col-sm-3 control-label">Street Number </label>
                            <div class="col-sm-9">
                                <input type="number" id="applicant_previous_street_number" name="applicant_previous_street_number" placeholder="Street Number" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="applicant_previous_street_name" class="col-sm-3 control-label">Street Name </label>
                            <div class="col-sm-9">
                                <input type="text" id="applicant_previous_street_name" name="applicant_previous_street_name" placeholder="Street Name" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="applicant_previous_street_type" class="col-sm-3 control-label">Street Type </label>
                            <div class="col-sm-9">
                                <select class="form-control" id="applicant_previous_street_type" name="applicant_previous_street_type">
                                    <option value="0" selected="">Street Type</option>
                                    <option value="Ave">Ave</option>
                                    <option value="Blvd">Blvd</option>
                                    <option value="Crt">Crt</option>
                                    <option value="Cres">Cres</option>
                                    <option value="Dr">Dr</option>
                                    <option value="Lane">Lane</option>
                                    <option value="Pl">Pl</option>
                                    <option value="Rd">Rd</option>
                                    <option value="Rte">Rte</option>
                                    <option value="St">St</option>
                                    <option value="Terr">Terr</option>
                                    <option value="Other">Other...</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="applicant_previous_street_type" class="col-sm-3 control-label">Street Direction </label>
                            <div class="col-sm-9">
                                <select class="form-control" name="applicant_previous_street_direction" id="applicant_previous_street_direction">
                                    <option value="" selected="">Street Direction</option>
                                    <option value="North">North</option>
                                    <option value="South">South</option>
                                    <option value="East">East</option>
                                    <option value="West">West</option>
                                    <option value="Northeast">Northeast</option>
                                    <option value="Southeast">Southeast</option>
                                    <option value="Northwest">Northwest</option>
                                    <option value="Southwest">Southwest</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="applicant_previous_unit_number" class="col-sm-3 control-label">Unit Number</label>
                            <div class="col-sm-9">
                                <input type="text" id="applicant_previous_unit_number" name="applicant_previous_unit_number" placeholder="Unit Number" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="applicant_previous_city" class="col-sm-3 control-label">City / Town</label>
                            <div class="col-sm-9">
                                <input type="text" id="applicant_previous_city" name="applicant_previous_city" placeholder="Unit Number" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="applicant_previous_province" class="col-sm-3 control-label">Province </label>
                            <div class="col-sm-9">
                                <select class="form-control" id="applicant_previous_province" name="applicant_previous_province" required>					
                                    <option selected="" value="">Province</option>
                                    <option value="Alberta">Alberta</option>
                                    <option value="British Columbia">British Columbia</option>
                                    <option value="Manitoba">Manitoba</option>
                                    <option value="New Brunswick">New Brunswick</option>
                                    <option value="Newfoundland &amp; Labrador">Newfoundland &amp; Labrador</option>
                                    <option value="Northwest Territories">Northwest Territories</option>
                                    <option value="Nova Scotia">Nova Scotia</option>
                                    <option value="Nunavut">Nunavut</option>
                                    <option value="Ontario">Ontario</option>
                                    <option value="Prince Edward Island">Prince Edward Island</option>
                                    <option value="Quebec">Quebec</option>
                                    <option value="Saskatchewan">Saskatchewan</option>
                                    <option value="Yukon">Yukon</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="applicant_previous_postal_code" class="col-sm-3 control-label">Postal Code </label>
                            <div class="col-sm-9">
                                <input type="text" id="applicant_previous_postal_code" name="applicant_previous_postal_code" placeholder="Postal Code" class="form-control" maxlength="7" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="applicant_previous_residential_status" class="col-sm-3 control-label">Residential Status </label>
                            <div class="col-sm-9">
                                <select class="form-control" id="applicant_previous_residential_status" name="applicant_previous_residential_status" required>					
                                    <option selected="" value="">Residential Status</option>
                                    <option value="Own">Own</option>
                                    <option value="Rent">Rent</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="applicant_previous_time_at_residence_year" class="col-sm-3 col-xs-12 control-label">Time At Residence </label>
                            <div class="col-sm-4 col-xs-6">
                                <select class="form-control" id="applicant_previous_time_at_residence_year" name="applicant_previous_time_at_residence_year" required>					
                                    <option selected="" value="">Year(s)</option>
                                    @for ($i = 1; $i < 15; $i++)
                                    <option value="{{$i}}">{{$i}}</option>                                        
                                    @endfor
                                </select>
                            </div>
                            <div class="col-sm-4 col-xs-6">
                                <select class="form-control" id="applicant_previous_time_at_residence_month" name="applicant_previous_time_at_residence_month">					
                                    <option selected="" value="">Month(s)</option>
                                    @for ($i = 1; $i < 12; $i++)
                                    <option value="{{$i}}">{{$i}}</option>                                        
                                    @endfor
                                </select>
                            </div>
                        </div>                     
                        
                        <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
                        <button class="btn btn-default prevBtn btn-lg pull-left" type="button" >Previous</button>

                    </div>
                </div>
            </div>
            <div class="row setup-content" id="step-3">
                <div class="col-xs-12">
                    <div class="">
                        <h3>Is there a co-applicant?</h3>
                        <div class="form-group">
                            <div class="funkyradio">
                                <div class="funkyradio-success col-md-6 col-xs-6">
                                    <input type="radio" name="is_co_applicant" value="Yes" id="is_co_applicant0" required />
                                    <label for="is_co_applicant0">Yes</label>
                                </div>
                                <div class="funkyradio-danger col-md-6 col-xs-6">
                                    <input type="radio" name="is_co_applicant" value="No" id="is_co_applicant1" required />
                                    <label for="is_co_applicant1">No</label>
                                </div>
                            </div>
                        </div>
                        
                        <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
                        <button class="btn btn-default prevBtn btn-lg pull-left" type="button" >Previous</button>
                    </div>

                </div>
            </div>
            <div class="row setup-content" id="step-4">
                <div class="col-xs-12">
                    <div class="">
                        <h3>Co-Applicant Information</h3>
                        
                        <div class="form-group">
                            <label for="co_applicant_first_name" class="col-sm-3 control-label">First Name</label>
                            <div class="col-sm-9">
                                <input type="text" id="co_applicant_first_name" name="co_applicant_first_name" placeholder="First Name" class="form-control" required autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="co_applicant_last_name" class="col-sm-3 control-label">Last Name</label>
                            <div class="col-sm-9">
                                <input type="text" id="co_applicant_last_name" name="co_applicant_last_name" placeholder="Last Name" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="co_applicant_email" class="col-sm-3 control-label">Email </label>
                            <div class="col-sm-9">
                                <input type="email" id="co_applicant_email" name="co_applicant_email" placeholder="Email" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="co_applicant_phone" class="col-sm-3 control-label">Phone number </label>
                            <div class="col-sm-9">
                                <input type="text" id="co_applicant_phone" name="co_applicant_phone" placeholder="Phone number" class="form-control" maxlength="15" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="co_applicant_birth_date" class="col-sm-3 control-label">Date of Birth</label>
                            <div class="col-sm-9">
                                <input type="date" max="{{date('Y')-18}}-{{date('m-d')}}" id="co_applicant_birth_date" name="co_applicant_birth_date" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="co_applicant_sin" class="col-sm-3 control-label">SIN </label>
                            <div class="col-sm-9">
                                <input type="text" id="co_applicant_sin" name="co_applicant_sin" placeholder="SIN" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="co_applicant_street_number" class="col-sm-3 control-label">Street Number </label>
                            <div class="col-sm-9">
                                <input type="number" id="co_applicant_street_number" name="co_applicant_street_number" placeholder="Street Number" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="co_applicant_street_name" class="col-sm-3 control-label">Street Name </label>
                            <div class="col-sm-9">
                                <input type="text" id="co_applicant_street_name" name="co_applicant_street_name" placeholder="Street Name" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="co_applicant_street_type" class="col-sm-3 control-label">Street Type </label>
                            <div class="col-sm-9">
                                <select class="form-control" id="co_applicant_street_type" name="co_applicant_street_type">
                                    <option value="0" selected="">Street Type</option>
                                    <option value="Ave">Ave</option>
                                    <option value="Blvd">Blvd</option>
                                    <option value="Crt">Crt</option>
                                    <option value="Cres">Cres</option>
                                    <option value="Dr">Dr</option>
                                    <option value="Lane">Lane</option>
                                    <option value="Pl">Pl</option>
                                    <option value="Rd">Rd</option>
                                    <option value="Rte">Rte</option>
                                    <option value="St">St</option>
                                    <option value="Terr">Terr</option>
                                    <option value="Other">Other...</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="co_applicant_street_type" class="col-sm-3 control-label">Street Direction </label>
                            <div class="col-sm-9">
                                <select class="form-control" name="co_applicant_street_direction" id="co_applicant_street_direction">
                                    <option value="" selected="">Street Direction</option>
                                    <option value="North">North</option>
                                    <option value="South">South</option>
                                    <option value="East">East</option>
                                    <option value="West">West</option>
                                    <option value="Northeast">Northeast</option>
                                    <option value="Southeast">Southeast</option>
                                    <option value="Northwest">Northwest</option>
                                    <option value="Southwest">Southwest</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="co_applicant_unit_number" class="col-sm-3 control-label">Unit Number</label>
                            <div class="col-sm-9">
                                <input type="text" id="co_applicant_unit_number" name="co_applicant_unit_number" placeholder="Unit Number" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="co_applicant_city" class="col-sm-3 control-label">City / Town</label>
                            <div class="col-sm-9">
                                <input type="text" id="co_applicant_city" name="co_applicant_city" placeholder="City / Town" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="co_applicant_province" class="col-sm-3 control-label">Province </label>
                            <div class="col-sm-9">
                                <select class="form-control" id="co_applicant_province" name="co_applicant_province" required>					
                                    <option selected="" value="">Province</option>
                                    <option value="Alberta">Alberta</option>
                                    <option value="British Columbia">British Columbia</option>
                                    <option value="Manitoba">Manitoba</option>
                                    <option value="New Brunswick">New Brunswick</option>
                                    <option value="Newfoundland &amp; Labrador">Newfoundland &amp; Labrador</option>
                                    <option value="Northwest Territories">Northwest Territories</option>
                                    <option value="Nova Scotia">Nova Scotia</option>
                                    <option value="Nunavut">Nunavut</option>
                                    <option value="Ontario">Ontario</option>
                                    <option value="Prince Edward Island">Prince Edward Island</option>
                                    <option value="Quebec">Quebec</option>
                                    <option value="Saskatchewan">Saskatchewan</option>
                                    <option value="Yukon">Yukon</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="co_applicant_postal_code" class="col-sm-3 control-label">Postal Code </label>
                            <div class="col-sm-9">
                                <input type="text" id="co_applicant_postal_code" name="co_applicant_postal_code" placeholder="Postal Code" class="form-control" maxlength="7" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="co_applicant_residential_status" class="col-sm-3 control-label">Residential Status </label>
                            <div class="col-sm-9">
                                <select class="form-control" id="co_applicant_residential_status" name="co_applicant_residential_status">					
                                    <option selected="" value="">Residential Status</option>
                                    <option value="Own">Own</option>
                                    <option value="Rent">Rent</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="co_applicant_time_at_residence_year" class="col-sm-3 col-xs-12 control-label">Time At Residence </label>
                            <div class="col-sm-4 col-xs-6">
                                <select class="form-control" id="co_applicant_time_at_residence_year" name="co_applicant_time_at_residence_year" required>					
                                    <option selected="" value="">Year(s)</option>
                                    @for ($i = 1; $i < 15; $i++)
                                    <option value="{{$i}}">{{$i}}</option>                                        
                                    @endfor
                                </select>
                            </div>
                            <div class="col-sm-4 col-xs-6">
                                <select class="form-control" id="co_applicant_time_at_residence_month" name="co_applicant_time_at_residence_month">					
                                    <option selected="" value="">Month(s)</option>
                                    @for ($i = 1; $i < 12; $i++)
                                    <option value="{{$i}}">{{$i}}</option>                                        
                                    @endfor
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="co_applicant_preferre_contact_method" class="col-sm-3 control-label">Preferred Contact Method </label>
                            <div class="col-sm-9">
                                <select class="form-control" id="co_applicant_preferre_contact_method" name="co_applicant_preferre_contact_method">					
                                    <option selected="" value="">Preferred Contact Method</option>
                                    <option value="Email">Email</option>
                                    <option value="Phone">Phone</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="co_applicant_marital_status" class="col-sm-3 control-label">Marital Status </label>
                            <div class="col-sm-9">
                                <select class="form-control" id="co_applicant_marital_status" name="co_applicant_marital_status">					
                                    <option selected="" value="">Marital Status</option>
                                    <option value="Single">Single</option>
                                    <option value="Married">Married</option>
                                    <option value="Divorced">Divorced</option>
                                    <option value="Common Law">Common Law</option>
                                </select>
                            </div>
                        </div>                        
                        
                        <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
                        <button class="btn btn-default prevBtn btn-lg pull-left" type="button" >Previous</button>

                    </div>
                </div>
            </div>
            <div class="row setup-content" id="step-5">
                <div class="col-xs-12">
                    <div class="">
                        <h3>Co-applicant - Previous Address</h3>
                        <div class="form-group">
                            <label for="co_applicant_previous_street_number" class="col-sm-3 control-label">Street Number </label>
                            <div class="col-sm-9">
                                <input type="number" id="co_applicant_previous_street_number" name="co_applicant_previous_street_number" placeholder="Street Number" class="form-control" required autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="co_applicant_previous_street_name" class="col-sm-3 control-label">Street Name </label>
                            <div class="col-sm-9">
                                <input type="text" id="co_applicant_previous_street_name" name="co_applicant_previous_street_name" placeholder="Street Name" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="co_applicant_previous_street_type" class="col-sm-3 control-label">Street Type </label>
                            <div class="col-sm-9">
                                <select class="form-control" id="co_applicant_previous_street_type" name="co_applicant_previous_street_type">
                                    <option value="0" selected="">Street Type</option>
                                    <option value="Ave">Ave</option>
                                    <option value="Blvd">Blvd</option>
                                    <option value="Crt">Crt</option>
                                    <option value="Cres">Cres</option>
                                    <option value="Dr">Dr</option>
                                    <option value="Lane">Lane</option>
                                    <option value="Pl">Pl</option>
                                    <option value="Rd">Rd</option>
                                    <option value="Rte">Rte</option>
                                    <option value="St">St</option>
                                    <option value="Terr">Terr</option>
                                    <option value="Other">Other...</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="co_applicant_previous_street_type" class="col-sm-3 control-label">Street Direction </label>
                            <div class="col-sm-9">
                                <select class="form-control" name="co_applicant_previous_street_direction" id="co_applicant_previous_street_direction">
                                    <option value="" selected="">Street Direction</option>
                                    <option value="North">North</option>
                                    <option value="South">South</option>
                                    <option value="East">East</option>
                                    <option value="West">West</option>
                                    <option value="Northeast">Northeast</option>
                                    <option value="Southeast">Southeast</option>
                                    <option value="Northwest">Northwest</option>
                                    <option value="Southwest">Southwest</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="unit_number" class="col-sm-3 control-label">Unit Number</label>
                            <div class="col-sm-9">
                                <input type="text" id="unit_number" name="co_applicant_previous_unit_number" placeholder="Unit Number" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="co_applicant_previous_city" class="col-sm-3 control-label">City / Town</label>
                            <div class="col-sm-9">
                                <input type="text" id="co_applicant_previous_city" name="co_applicant_previous_city" placeholder="City / Town" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="co_applicant_previous_province" class="col-sm-3 control-label">Province </label>
                            <div class="col-sm-9">
                                <select class="form-control" id="co_applicant_previous_province" name="co_applicant_previous_province" required>					
                                    <option selected="" value="">Province</option>
                                    <option value="Alberta">Alberta</option>
                                    <option value="British Columbia">British Columbia</option>
                                    <option value="Manitoba">Manitoba</option>
                                    <option value="New Brunswick">New Brunswick</option>
                                    <option value="Newfoundland &amp; Labrador">Newfoundland &amp; Labrador</option>
                                    <option value="Northwest Territories">Northwest Territories</option>
                                    <option value="Nova Scotia">Nova Scotia</option>
                                    <option value="Nunavut">Nunavut</option>
                                    <option value="Ontario">Ontario</option>
                                    <option value="Prince Edward Island">Prince Edward Island</option>
                                    <option value="Quebec">Quebec</option>
                                    <option value="Saskatchewan">Saskatchewan</option>
                                    <option value="Yukon">Yukon</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="co_applicant_previous_postal_code" class="col-sm-3 control-label">Postal Code </label>
                            <div class="col-sm-9">
                                <input type="text" id="co_applicant_previous_postal_code" name="co_applicant_previous_postal_code" placeholder="Postal Code" class="form-control" maxlength="7" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="co_applicant_previous_residential_status" class="col-sm-3 control-label">Residential Status </label>
                            <div class="col-sm-9">
                                <select class="form-control" id="co_applicant_previous_residential_status" name="co_applicant_previous_residential_status" required>					
                                    <option selected="" value="">Residential Status</option>
                                    <option value="Own">Own</option>
                                    <option value="Rent">Rent</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="co_applicant_previous_time_at_residence_year" class="col-sm-3 col-xs-12 control-label">Time At Residence </label>
                            <div class="col-sm-4 col-xs-6">
                                <select class="form-control" id="co_applicant_previous_time_at_residence_year" name="co_applicant_previous_time_at_residence_year" required>					
                                    <option selected="" value="">Year(s)</option>
                                    @for ($i = 1; $i < 15; $i++)
                                    <option value="{{$i}}">{{$i}}</option>                                        
                                    @endfor
                                </select>
                            </div>
                            <div class="col-sm-4 col-xs-6">
                                <select class="form-control" id="co_applicant_previous_time_at_residence_month" name="co_applicant_previous_time_at_residence_month">					
                                    <option selected="" value="">Month(s)</option>
                                    @for ($i = 1; $i < 12; $i++)
                                    <option value="{{$i}}">{{$i}}</option>                                        
                                    @endfor
                                </select>
                            </div>
                        </div>
                        

                        <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
                        <button class="btn btn-default prevBtn btn-lg pull-left" type="button" >Previous</button>
                    </div>
                </div>
            </div>
            <div class="row setup-content" id="step-6">
                <div class="col-xs-12">
                    <div class="">
                        <h3>Employment Information</h3>
                        <h4>Applicant</h4>
                        <div class="form-group">
                            <label for="applicant_self_employed" class="col-sm-3 control-label">Self-Employed</label>
                            <div class="funkyradio col-md-9">
                                <div class="funkyradio-success col-md-6 col-xs-6">
                                    <input type="radio" name="applicant_self_employed" value="Yes" id="applicant_self_employed0" required />
                                    <label for="applicant_self_employed0">Yes</label>
                                </div>
                                <div class="funkyradio-success col-md-6 col-xs-6">
                                    <input type="radio" name="applicant_self_employed" value="No" id="applicant_self_employed1" />
                                    <label for="applicant_self_employed1">No</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="applicant_employment_job_title" class="col-sm-3 control-label">Job Title</label>
                            <div class="col-sm-9">
                                <input type="text" id="applicant_employment_job_title" name="applicant_employment_job_title" placeholder="Job Title" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="applicant_employment_status" class="col-sm-3 control-label">Employment Status</label>
                            <div class="col-sm-9">
                                <select class="form-control" id="applicant_employment_status" name="applicant_employment_status" required>
                                    <option selected="" value="Current">Employment Status - Current</option>
                                    <option value="Previous">Previous</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="applicant_employment_occupation_type" class="col-sm-3 control-label">Occupation Type</label>
                            <div class="col-sm-9">
                                <select class="form-control" id="applicant_employment_occupation_type" name="applicant_employment_occupation_type">
                                    <option selected="" value="">Occupation Type</option>
                                    <option value="Other">Other</option>
                                    <option value="Management">Management</option>
                                    <option value="Clerical">Clerical</option>
                                    <option value="Labour/Tradesperson">Labour/Tradesperson</option>
                                    <option value="Retired">Retired</option>
                                    <option value="Professional">Professional</option>
                                    <option value="Self-employed">Self-employed</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="applicant_employment_employer_name" class="col-sm-3 control-label">Name of Employer</label>
                            <div class="col-sm-9">
                                <input type="text" id="applicant_employment_employer_name" name="applicant_employment_employer_name" placeholder="Name of Employer" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="applicant_employment_work_phone" class="col-sm-3 control-label">Work Phone</label>
                            <div class="col-sm-9">
                                <input type="text" id="applicant_employment_work_phone" name="applicant_employment_work_phone" placeholder="Work Phone" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="applicant_employment_income_type" class="col-sm-3 control-label">Income Type</label>
                            <div class="col-sm-9">
                                <select class="form-control" id="applicant_employment_income_type" name="applicant_employment_income_type">
                                    <option selected="" value="">Income Type</option>
                                    <option value="Salary">Salary</option>
                                    <option value="Hourly">Hourly</option>
                                    <option value="Hourly + Commissions">Hourly + Commissions</option>
                                    <option value="Commissions">Commissions</option>
                                    <option value="Self-Employed">Self-Employed</option>
                                    <option value="Rental Income">Rental Income</option>
                                    <option value="Other Employment Income">Other Employment Income</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="applicant_employment_annual_income" class="col-sm-3 control-label">Annual Income</label>
                            <div class="col-sm-9">
                                <input type="text" id="applicant_employment_annual_income" name="applicant_employment_annual_income" placeholder="Annual Income" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="applicant_employment_industry_sector" class="col-sm-3 control-label">Industry Sector</label>
                            <div class="col-sm-9">
                                <select class="form-control" id="applican_employmentt_industry_sector" name="applicant_employment_industry_sector">
                                    <option selected="" value="">Industry Sector</option>
                                    <option value="Banking/Finance">Banking/Finance</option>
                                    <option value="Construction">Construction</option>
                                    <option value="Education">Education</option>
                                    <option value="Farming/Natural Resources">Farming/Natural Resources</option>
                                    <option value="Government">Government</option>
                                    <option value="Health">Health</option>
                                    <option value="High-Tech">High-Tech</option>
                                    <option value="Leisure/Entertainment">Leisure/Entertainment</option>
                                    <option value="Manufacturing">Manufacturing</option>
                                    <option value="Other">Other</option>
                                    <option value="Retail Sales">Retail Sales</option>
                                    <option value="Services">Services</option>
                                    <option value="Transportation">Transportation</option>
                                    <option value="Varies">Varies</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="applicant_employment_address" class="col-sm-3 control-label">Address</label>
                            <div class="col-sm-9">
                                <input type="text" id="applicant_employment_address" name="applicant_employment_address" placeholder="Address" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="applicant_employment_city" class="col-sm-3 control-label">City / Town</label>
                            <div class="col-sm-9">
                                <input type="text" id="applicant_employment_city" name="applicant_employment_city" placeholder="City / Town" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="applicant_employment_province" class="col-sm-3 control-label">Province </label>
                            <div class="col-sm-9">
                                <select class="form-control" id="applicant_employment_province" name="applicant_employment_province" required>					
                                    <option selected="" value="">Province</option>
                                    <option value="Alberta">Alberta</option>
                                    <option value="British Columbia">British Columbia</option>
                                    <option value="Manitoba">Manitoba</option>
                                    <option value="New Brunswick">New Brunswick</option>
                                    <option value="Newfoundland &amp; Labrador">Newfoundland &amp; Labrador</option>
                                    <option value="Northwest Territories">Northwest Territories</option>
                                    <option value="Nova Scotia">Nova Scotia</option>
                                    <option value="Nunavut">Nunavut</option>
                                    <option value="Ontario">Ontario</option>
                                    <option value="Prince Edward Island">Prince Edward Island</option>
                                    <option value="Quebec">Quebec</option>
                                    <option value="Saskatchewan">Saskatchewan</option>
                                    <option value="Yukon">Yukon</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="applicant_employment_postal_code" class="col-sm-3 control-label">Postal Code </label>
                            <div class="col-sm-9">
                                <input type="text" id="applicant_employment_postal_code" name="applicant_employment_postal_code" placeholder="Postal Code" class="form-control" maxlength="7" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="applicant_employment_time_at_job_year" class="col-sm-3 col-xs-12 control-label">Time At Job </label>
                            <div class="col-sm-4 col-xs-6">
                                <select class="form-control" id="applicant_employment_time_at_job_year" name="applicant_employment_time_at_job_year" required>					
                                    <option selected="" value="">Year(s)</option>
                                    @for ($i = 1; $i < 15; $i++)
                                    <option value="{{$i}}">{{$i}}</option>                                        
                                    @endfor
                                </select>
                            </div>
                            <div class="col-sm-4 col-xs-6">
                                <select class="form-control" id="applicant_employment_time_at_job_month" name="applicant_employment_time_at_job_month">					
                                    <option selected="" value="">Month(s)</option>
                                    @for ($i = 1; $i < 12; $i++)
                                    <option value="{{$i}}">{{$i}}</option>                                        
                                    @endfor
                                </select>
                            </div>
                        </div>
                        
                        <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
                        <button class="btn btn-default prevBtn btn-lg pull-left" type="button" >Previous</button>
                    </div>
                </div>
            </div>
            <div class="row setup-content" id="step-7">
                <div class="col-xs-12">
                    <div class="">
                        <h3>Employment Information</h3>
                        <h4>Co-Applicant</h4>
                        <div class="form-group">
                            <label for="co_applicant_employment_self_employed" class="col-sm-3 control-label">Self-Employed</label>
                            <div class="funkyradio col-md-9">
                                <div class="funkyradio-success col-md-6 col-xs-6">
                                    <input type="radio" name="co_applicant_employment_self_employed" value="Yes" id="co_applicant_employment_self_employed0" required />
                                    <label for="co_applicant_employment_self_employed0">Yes</label>
                                </div>
                                <div class="funkyradio-success col-md-6 col-xs-6">
                                    <input type="radio" name="co_applicant_employment_self_employed" value="No" id="co_applicant_employment_self_employed1" />
                                    <label for="co_applicant_employment_self_employed1">No</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="co_applicant_employment_job_title" class="col-sm-3 control-label">Job Title</label>
                            <div class="col-sm-9">
                                <input type="text" id="co_applicant_employment_job_title" name="co_applicant_employment_job_title" placeholder="Job Title" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="co_applicant_employment_status" class="col-sm-3 control-label">Employment Status</label>
                            <div class="col-sm-9">
                                <select class="form-control" id="co_applicant_employment_status" name="co_applicant_employment_status" required>
                                    <option selected="" value="Current">Employment Status - Current</option>
                                    <option value="Previous">Previous</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="co_applicant_employment_employer_name" class="col-sm-3 control-label">Name of Employer</label>
                            <div class="col-sm-9">
                                <input type="text" id="co_applicant_employment_employer_name" name="co_applicant_employment_employer_name" placeholder="Name of Employer" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="co_applicant_employment_job_title" class="col-sm-3 control-label">Income Type</label>
                            <div class="col-sm-9">
                                <select class="form-control" id="co_applicant_employment_income_type" name="co_applicant_employment_income_type">
                                    <option selected="" value="">Income Type</option>
                                    <option value="Salary">Salary</option>
                                    <option value="Hourly">Hourly</option>
                                    <option value="Hourly + Commissions">Hourly + Commissions</option>
                                    <option value="Commissions">Commissions</option>
                                    <option value="Self-Employed">Self-Employed</option>
                                    <option value="Rental Income">Rental Income</option>
                                    <option value="Other Employment Income">Other Employment Income</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="co_applicant_employment_annual_income" class="col-sm-3 control-label">Annual Income</label>
                            <div class="col-sm-9">
                                <input type="text" id="co_applicant_employment_annual_income" name="co_applicant_employment_annual_income" placeholder="Annual Income" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="co_applicant_employment_industry_sector" class="col-sm-3 control-label">Industry Sector</label>
                            <div class="col-sm-9">
                                <select class="form-control" id="co_applicant_employment_industry_sector" name="co_applicant_employment_industry_sector">
                                    <option selected="" value="">Industry Sector</option>
                                    <option value="Banking/Finance">Banking/Finance</option>
                                    <option value="Construction">Construction</option>
                                    <option value="Education">Education</option>
                                    <option value="Farming/Natural Resources">Farming/Natural Resources</option>
                                    <option value="Government">Government</option>
                                    <option value="Health">Health</option>
                                    <option value="High-Tech">High-Tech</option>
                                    <option value="Leisure/Entertainment">Leisure/Entertainment</option>
                                    <option value="Manufacturing">Manufacturing</option>
                                    <option value="Other">Other</option>
                                    <option value="Retail Sales">Retail Sales</option>
                                    <option value="Services">Services</option>
                                    <option value="Transportation">Transportation</option>
                                    <option value="Varies">Varies</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="co_applicant_employment_address" class="col-sm-3 control-label">Address</label>
                            <div class="col-sm-9">
                                <input type="text" id="co_applicant_employment_address" name="co_applicant_employment_address" placeholder="Address" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="co_applicant_employment_city" class="col-sm-3 control-label">City / Town</label>
                            <div class="col-sm-9">
                                <input type="text" id="co_applicant_employment_city" name="co_applicant_employment_city" placeholder="City / Town" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="co_applicant_employment_province" class="col-sm-3 control-label">Province </label>
                            <div class="col-sm-9">
                                <select class="form-control" id="co_applicant_employment_province" name="co_applicant_employment_province" required>					
                                    <option selected="" value="">Province</option>
                                    <option value="Alberta">Alberta</option>
                                    <option value="British Columbia">British Columbia</option>
                                    <option value="Manitoba">Manitoba</option>
                                    <option value="New Brunswick">New Brunswick</option>
                                    <option value="Newfoundland &amp; Labrador">Newfoundland &amp; Labrador</option>
                                    <option value="Northwest Territories">Northwest Territories</option>
                                    <option value="Nova Scotia">Nova Scotia</option>
                                    <option value="Nunavut">Nunavut</option>
                                    <option value="Ontario">Ontario</option>
                                    <option value="Prince Edward Island">Prince Edward Island</option>
                                    <option value="Quebec">Quebec</option>
                                    <option value="Saskatchewan">Saskatchewan</option>
                                    <option value="Yukon">Yukon</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="co_applicant_employment_postal_code" class="col-sm-3 control-label">Postal Code </label>
                            <div class="col-sm-9">
                                <input type="text" id="co_applicant_employment_postal_code" name="co_applicant_employment_postal_code" placeholder="Postal Code" class="form-control" maxlength="7" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="co_applicant_employment_time_at_job_year" class="col-sm-3 col-xs-12 control-label">Time At Job </label>
                            <div class="col-sm-4 col-xs-6">
                                <select class="form-control" id="co_applicant_employment_time_at_job_year" name="co_applicant_employment_time_at_job_year" required>					
                                    <option selected="" value="">Year(s)</option>
                                    @for ($i = 1; $i < 15; $i++)
                                    <option value="{{$i}}">{{$i}}</option>                                        
                                    @endfor
                                </select>
                            </div>
                            <div class="col-sm-4 col-xs-6">
                                <select class="form-control" id="co_applicant_employment_time_at_job_month" name="co_applicant_employment_time_at_job_month">					
                                    <option selected="" value="">Month(s)</option>
                                    @for ($i = 1; $i < 12; $i++)
                                    <option value="{{$i}}">{{$i}}</option>                                        
                                    @endfor
                                </select>
                            </div>
                        </div>
                        
                        <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
                        <button class="btn btn-default prevBtn btn-lg pull-left" type="button" >Previous</button>
                    </div>
                </div>
            </div>
            <div class="row setup-content" id="step-8">
                <div class="col-xs-12">
                    <div class="">
                        <h3>Property Information</h3>
                        <div class="form-group">
                            <label for="property_street_number" class="col-sm-3 control-label">Street Number</label>
                            <div class="col-sm-9">
                                <input type="number" id="property_street_number" name="property_street_number" placeholder="Street Number" class="form-control" autofocus required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="property_street_name" class="col-sm-3 control-label">Street Name</label>
                            <div class="col-sm-9">
                                <input type="text" id="property_street_name" name="property_street_name" placeholder="Street Name" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="property_street_type" class="col-sm-3 control-label">Street Type </label>
                            <div class="col-sm-9">
                                <select class="form-control" id="property_street_type" name="property_street_type">
                                    <option value="" selected="">Street Type</option>
                                    <option value="Ave">Ave</option>
                                    <option value="Blvd">Blvd</option>
                                    <option value="Crt">Crt</option>
                                    <option value="Cres">Cres</option>
                                    <option value="Dr">Dr</option>
                                    <option value="Lane">Lane</option>
                                    <option value="Pl">Pl</option>
                                    <option value="Rd">Rd</option>
                                    <option value="Rte">Rte</option>
                                    <option value="St">St</option>
                                    <option value="Terr">Terr</option>
                                    <option value="Other">Other...</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="property_street_type" class="col-sm-3 control-label">Street Direction </label>
                            <div class="col-sm-9">
                                <select class="form-control" name="property_street_direction" id="property_street_direction">
                                    <option value="" selected="">Street Direction</option>
                                    <option value="North">North</option>
                                    <option value="South">South</option>
                                    <option value="East">East</option>
                                    <option value="West">West</option>
                                    <option value="Northeast">Northeast</option>
                                    <option value="Southeast">Southeast</option>
                                    <option value="Northwest">Northwest</option>
                                    <option value="Southwest">Southwest</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="property_unit_number" class="col-sm-3 control-label">Unit Number</label>
                            <div class="col-sm-9">
                                <input type="text" id="property_unit_number" name="property_unit_number" placeholder="Unit Number" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="property_city" class="col-sm-3 control-label">City </label>
                            <div class="col-sm-9">
                                <input type="text" id="property_city" name= "property_city" placeholder="City / Town" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="property_province" class="col-sm-3 control-label">Province </label>
                            <div class="col-sm-9">
                                <select class="form-control" id="property_province" name="property_province" required>					
                                    <option value="">Province</option>
                                    <option value="1">Alberta</option>
                                    <option value="2">British Columbia</option>
                                    <option value="3">Manitoba</option>
                                    <option value="4">New Brunswick</option>
                                    <option value="5">Newfoundland &amp; Labrador</option>
                                    <option value="6">Northwest Territories</option>
                                    <option value="7">Nova Scotia</option>
                                    <option value="8">Nunavut</option>
                                    <option value="9">Ontario</option>
                                    <option value="10">Prince Edward Island</option>
                                    <option value="11">Quebec</option>
                                    <option value="12">Saskatchewan</option>
                                    <option value="13">Yukon</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="property_postal_code" class="col-sm-3 control-label">Postal Code </label>
                            <div class="col-sm-9">
                                <input type="text" id="property_postal_code" name="property_postal_code" placeholder="Postal Code" class="form-control" maxlength="7" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="property_construction_type" class="col-sm-3 control-label">Construction Type </label>
                            <div class="col-sm-9">
                                <select class="form-control" id="property_construction_type" name="property_construction_type">
                                    <option value="" selected="">Construction Type</option>
                                    <option value="Existing">Existing</option>
                                    <option value="Construction">Construction</option>
                                    <option value="New">New</option>
                                   </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="property_structure_age" class="col-sm-3 control-label">Structure Age </label>
                            <div class="col-sm-9">
                                <input type="text" id="property_structure_age" name="property_structure_age" placeholder="Structure Age" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="property_occupancy_type" class="col-sm-3 control-label">Occupancy Type </label>
                            <div class="col-sm-9">
                                <select class="form-control" id="property_occupancy_type" name="property_occupancy_type">
                                    <option value="">Occupancy Type</option>
                                    <option value="Owner-Occupied">Owner-Occupied</option>
                                    <option value="Owner-Occupied &amp; Rental">Owner-Occupied &amp; Rental</option>
                                    <option value="Rental">Rental</option>
                                    <option value="Second Home">Second Home</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="property_tenure_type" class="col-sm-3 control-label">Tenure Type </label>
                            <div class="col-sm-9">
                                <select class="form-control" id="property_tenure_type" name="property_tenure_type">
                                    <option value=""> Tenure Type</option>		
                                    <option value="Freehold">Freehold</option>
                                    <option value="Leasehold">Leasehold</option>
                                    <option value="Condo / Strata">Condo / Strata</option>
                                    <option value="Indian Reserve">Indian Reserve</option>
                                    <option value="Other">Other...</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="property_heat_type" class="col-sm-3 control-label">Heat Type </label>
                            <div class="col-sm-9">
                                <select class="form-control" id="property_heat_type" name="property_heat_type">
                                    <option value="">Heat Type</option>
                                    <option value="Electric Baseboard">Electric Baseboard</option>
                                    <option value="Forced Air Gas/Oil/Electric">Forced Air Gas/Oil/Electric</option>
                                    <option value="Hot Water Heating<">Hot Water Heating</option>
                                    <option value="Other">Other</option>
                              </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="property_estimated_value" class="col-sm-3 control-label">Estimated Value</label>
                            <div class="col-sm-9">
                                <input type="text" id="property_estimated_value" name="property_estimated_value" placeholder="Estimated Value" class="form-control" onkeyup="var val=formatValue(this.value); this.value=formatValue(val);" required>
                            </div>
                        </div>
                        <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
                        <button class="btn btn-default prevBtn btn-lg pull-left" type="button" >Previous</button>
                    </div>
                </div>
            </div>
            <div class="row setup-content" id="step-9">
                <div class="col-xs-12">
                    <div class="">
                        <h3>Mortgage Information</h3>
                        <div class="form-group">
                            <label for="mortgage_closing_date" class="col-sm-3 control-label">Closing Date</label>
                            <div class="col-sm-9">
                                <input type="date" id="mortgage_closing_date" name="mortgage_closing_date" placeholder="Closing Date" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="mortgage_amortization_year" class="col-sm-3 control-label">Amortization</label>
                            <div class="col-sm-4 col-xs-6">
                                <select class="form-control" id="mortgage_amortization_year" name="mortgage_amortization_year" required>					
                                    <option selected="" value="">Year(s)</option>
                                    @for ($i = 1; $i < 15; $i++)
                                    <option value="{{$i}}">{{$i}}</option>                                        
                                    @endfor
                                </select>
                            </div>
                            <div class="col-sm-4 col-xs-6">
                                <select class="form-control" id="mortgage_amortization_month" name="mortgage_amortization_month">					
                                    <option selected="" value="">Month(s)</option>
                                    @for ($i = 1; $i < 12; $i++)
                                    <option value="{{$i}}">{{$i}}</option>                                        
                                    @endfor
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="mortgage_payment_frequency" class="col-sm-3 control-label">Payment Frequency </label>
                            <div class="col-sm-9">
                                <select class="form-control" id="mortgage_payment_frequency" name="mortgage_payment_frequency">
                                    <option value="" selected="">Payment Frequency</option>
                                    <option value="Monthly">Monthly</option>
                                    <option value="Semi Monthly">Semi Monthly</option>
                                    <option value="Biweekly">Biweekly</option>
                                    <option value="Accelerated Biweekly">Accelerated Biweekly</option>
                                    <option value="Weekly">Weekly</option>
                                    <option value="Accelerated Weekly">Accelerated Weekly</option>
                                    <option value="Don't Know">Don't Know</option>
                              </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="mortgage_term" class="col-sm-3 control-label">Term </label>
                            <div class="col-sm-9">
                                <select class="form-control" name="mortgage_term" id="mortgage_term">
                                    <option value="0" selected="">Term</option>
                                     <option value="1">1</option>
                                     <option value="2">2</option>
                                     <option value="3">3</option>
                                     <option value="4">4</option>
                                     <option value="5">5</option>
                                     <option value="7">7</option>
                                     <option value="10">10</option>
                                 </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="mortgage_amount" class="col-sm-3 control-label">Mortgage Amount </label>
                            <div class="col-sm-9">
                                <input type="text" id="mortgage_amount" name= "mortgage_amount" placeholder="Mortgage Amount" class="form-control" onkeyup="var val=formatValue(this.value); this.value=formatValue(val);" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="mortgage_product_type" class="col-sm-3 control-label">Product Type </label>
                            <div class="col-sm-9">
                                <select class="form-control" name="mortgage_product_type" id="mortgage_product_type">
				                    <option value="" selected="">Product Type</option>
				                    <option value="Fixed">Fixed</option>
                                    <option value="Adjustable">Adjustable</option>	
                                    <option value="Capped Variable">Capped Variable</option>	
                                    <option value="Variable">Variable</option>	
                                    <option value="Buydown">Buydown</option>
                                    <option value="Don't Know">Don't Know</option>	
                                    </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="mortgage_down_payment" class="col-sm-3 control-label">Down Payment </label>
                            <div class="col-sm-9">
                                <input type="text" id="mortgage_down_payment" name="mortgage_down_payment" placeholder="Down Payment" class="form-control" onkeyup="var val=formatValue(this.value); this.value=formatValue(val);" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="mortgage_first_time_buyer" class="col-sm-3 control-label">First-Time Buyer</label>
                            <div class="funkyradio col-md-9">
                                <div class="funkyradio-success col-md-6 col-xs-6">
                                    <input type="radio" name="mortgage_first_time_buyer" value="Yes" id="mortgage_first_time_buyer0" required />
                                    <label for="mortgage_first_time_buyer0">Yes</label>
                                </div>
                                <div class="funkyradio-success col-md-6 col-xs-6">
                                    <input type="radio" name="mortgage_first_time_buyer" value="No" id="mortgage_first_time_buyer1" />
                                    <label for="mortgage_first_time_buyer1">No</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="mortgage_purpose" class="col-sm-3 control-label">Purpose </label>
                            <div class="col-sm-9">
                                <select class="form-control" name="mortgage_purpose" id="mortgage_purpose">
                                    <option value="">Purpose</option>
                                     <option value="Purchase">Purchase</option>
                                     <option value="Purchase + Improvements">Purchase + Improvements</option>
                                     <option value="Refinance">Refinance</option>
                                     <option value="ETO">ETO</option>
                                     <option value="Switch / Transfer">Switch / Transfer</option>
                                     <option value="Port">Port</option>
                                     <option value="Deficiency Sale">Deficiency Sale</option>
                                     <option value="Workout">Workout</option>
                                     </select>
                            </div>
                        </div>

                        <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
                        <button class="btn btn-default prevBtn btn-lg pull-left" type="button" >Previous</button>
                    </div>
                </div>
            </div>            
            <div class="row setup-content" id="step-10">
                <div class="col-xs-12">
                    <div class="">
                        <h3>Assets</h3>
                        <div class="form-group">
                            <label for="vehicles_asset" class="col-sm-3 control-label">Vehicles</label>
                            <div class="col-sm-9">
                                <input type="text" placeholder="Vehicles" id="vehicles_asset" name="vehicles_asset" class="form-control" onkeyup="var val=formatValue(this.value); this.value=formatValue(val);">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="cash_amount_asset" class="col-sm-3 control-label">Cash Amount</label>
                            <div class="col-sm-9">
                                <input type="text" placeholder="Cash Amount" id="cash_amount_asset" name="cash_amount_asset" class="form-control" onkeyup="var val=formatValue(this.value); this.value=formatValue(val);">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="real_estate_asset" class="col-sm-3 control-label">Real Estate</label>
                            <div class="col-sm-9">
                                <input type="text" placeholder="Real Estate" id="real_estate_asset" name="real_estate_asset" class="form-control" onkeyup="var val=formatValue(this.value); this.value=formatValue(val);">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="RRSP_asset" class="col-sm-3 control-label">RRSP</label>
                            <div class="col-sm-9">
                                <input type="text" placeholder="RRSP" id="RRSP_asset" name="RRSP_asset" class="form-control" onkeyup="var val=formatValue(this.value); this.value=formatValue(val);">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="stocks_asset" class="col-sm-3 control-label">Stocks</label>
                            <div class="col-sm-9">
                                <input type="text" placeholder="Stocks" id="stocks_asset" name="stocks_asset" class="form-control" onkeyup="var val=formatValue(this.value); this.value=formatValue(val);">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="other_asset" class="col-sm-3 control-label">Other</label>
                            <div class="col-sm-9">
                                <input type="text" placeholder="Other" id="other_asset" name="other_asset" class="form-control" onkeyup="var val=formatValue(this.value); this.value=formatValue(val);">
                            </div>
                        </div>
                        
                        <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
                        <button class="btn btn-default prevBtn btn-lg pull-left" type="button" >Previous</button>
                    </div>
                </div>
            </div>
            <div class="row setup-content" id="step-11">
                <div class="col-xs-12">
                    <div class="">
                        <h3>Liabilities</h3>
                        <div class="form-group">
                            <label for="credit_liabilities" class="col-sm-3 control-label">Credit</label>
                            <div class="col-sm-9">
                                <input type="text" placeholder="Credit" id="credit_liabilities" name="credit_liabilities" class="form-control" onkeyup="var val=formatValue(this.value); this.value=formatValue(val);">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="loans_liabilities" class="col-sm-3 control-label">Loans</label>
                            <div class="col-sm-9">
                                <input type="text" placeholder="Loans" id="loans_liabilities" name="loans_liabilities" class="form-control" onkeyup="var val=formatValue(this.value); this.value=formatValue(val);">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="mortgage_liabilities" class="col-sm-3 control-label">Mortgage</label>
                            <div class="col-sm-9">
                                <input type="text" placeholder="Mortgage" id="mortgage_liabilities" name="mortgage_liabilities" class="form-control" onkeyup="var val=formatValue(this.value); this.value=formatValue(val);">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="other_liabilities" class="col-sm-3 control-label">Other</label>
                            <div class="col-sm-9">
                                <input type="text" placeholder="Other" id="other_liabilities" name="other_liabilities" class="form-control" onkeyup="var val=formatValue(this.value); this.value=formatValue(val);">
                            </div>
                        </div>
                        
                        <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
                        <button class="btn btn-default prevBtn btn-lg pull-left" type="button" >Previous</button>
                    </div>
                </div>
            </div>
            <div class="row setup-content" id="step-12">
                <div class="col-xs-12">
                    <div class="message">
                        <h3>Consent and Privacy Agreement</h3>

                        <div class="form-group">
                            <p>
                                <p style="font-weight:bold;text-decoration: underline;">Collection and Use of Personal Information</p>
                                <p>I/We understand that Mortgage Alliance ('MAC') collects personal information in accordance with and for purposes detailed in its privacy policy available at <a href="https://mortgagealliance.com/privacy-policy" target="new">https://mortgagealliance.com/privacy-policy</a> ('Privacy Policy'), including to provide the services requested, better understand my/our financial needs and determine how Mortgage Alliance may be of service to me/us. The type of information collected and related purposes include:</p>
                                <div style="padding: 0px 15px 15px 15px;">
                                a) Data such as name, address, contact numbers, email contact, income, employment, age, net worth, investment objectives, insurance coverage and banking information;<br>
                                b)	Unique identifiers: such as social insurance, driver’s license, passport numbers, etc. (as authorized by law); used to fulfill regulatory and other governmental obligations as well as to confirm and/or authenticate my/our identity;<br>
                                c)	Information from a consumer reporting agency or other source, which may include account information and/or information about my/our creditworthiness to help determine a mortgage or related products for my/our needs and to establish or verify my/our credit.
                                </div>
                                <p style="font-weight:bold;text-decoration: underline;">Sharing of Personal Information:</p>
                                <p>I/We the undersigned understand that Mortgage Alliance may share my personal information as detailed in its Privacy Policy, including with its brokers or anyone acting as an agent on its behalf ('Authorized Agent'), including as follows:</p>
                                <p style="padding: 0px 15px 15px 15px;">
                                a) Mortgage Alliance may share my/our personal information to credit bureau agencies, financial institutions, private investors, insurance companies, etc. to determine my/our eligibility for products and services.<br>
                                b) Mortgage Alliance may share my/our personal information to Authorized Agents or affiliated companies, as needed for the provision of services or products requested and/or as detailed in its Privacy Policy.<br>
                                c) Mortgage Alliance shall use my/our social insurance number as an aid to identify me/us with credit bureau agencies and financial institutions and for credit history file matching purposes.<br>
                                d) Subject to my/our right to withdraw consent detailed in the Privacy Policy and optional consents provided in this Consent and Privacy Agreement, Mortgage Alliance may use my/our information to conduct surveys on the quality of its products and services or to provide me/us with offers for additional products and services that they feel may be of interest to me/us.
                                </p>
                                <p style="font-weight:bold;text-decoration: underline;">Credit Bureau Consent:</p>
                                <p>I/We the undersigned, declare the information provided in the mortgage application is a true and complete representation. I/We understand that it is being used to determine my/our credit worthiness and to evaluate my/our request for credit. I/We authorize Mortgage Alliance or their designate to obtain a credit report. I/We acknowledge that the completion of a credit application may take time and it might entail additional credit reports. I/We authorize Mortgage Alliance to exchange such credit information or obtain additional credit reports for up to six (6) months from the date signed below for the purpose of securing credit or other products and services with potential mortgage lenders, insurance companies, Authorized Agents or other service providers.</p>
                                <p style="font-weight:bold;text-decoration: underline;">Sharing for Insurance Products and Services:</p>
                                <p>I/We authorize Mortgage Alliance to share my/our contact details including name, phone number, email address and mortgage file to an insurance brokerage firm duly authorized by Mortgage Alliance, if permitted by law, so that they can collect the necessary information to offer me/us competitive life insurance products tailored to my/our needs and which I/We can accept or decline at any time.</p>
                                <p style="padding: 0px 15px 15px 15px;">
                                <strong>Home/Auto Insurance.</strong> I/We authorize Mortgage Alliance to share my/our contact details including name, phone number, email address and mortgage file to a property and casualty insurance brokerage firm duly authorized by Mortgage Alliance, so that they can collect the necessary information to offer me/us highly competitive home and auto insurance products tailored to my/our needs and which I/We can accept or decline at any time. 
                                </p>
                                <p style="font-weight:bold;text-decoration: underline;">Canada Anti-Spam Legislation:</p>
                                <p>I/We authorize Mortgage Alliance, affiliated companies and authorized agents to keep in touch with me/us via electronic messaging in order to provide me/us with content and provide insightful information on mortgages, finances, etc. I/We wish to be kept informed and consent to the receiving of these informative electronic communications. I/We understand that I/we can withdraw consent at any time.</p>
                                <p>I/We understand that even if I/We do not provide my/our express consent to receive promotional communications, I/We may still be contacted, if authorized under applicable anti-spam legislation, for example if I/We have recently entered into a transaction with Mortgage Alliance (and therefore, Mortgage Alliance has my/our implied consent) as well as for transactional purposes such as contacts for customer service and/or product or service information, status updates or renewals, reminder notices or answers to my/our questions or inquiries.</p>
                                <p style="font-weight:bold;text-decoration: underline;">Ongoing Commitment:</p>
                                <p>I/We acknowledge the Mortgage Alliance Privacy Policy is available for review at https://mortgagealliance.com/privacy-policy, and understand that the collection, use and disclosure of my/our personal information by Mortgage Alliance will be done in accordance with such Privacy Policy.</p>
                                <p>I/We agree that a photocopy or electronic copy of this Consent and Privacy Agreement has the same value as the original one.</p>   
                            </p>
                        </div>

                        <div class="form-group">
                            <div class="funkyradio" style="margin: 0 15px;">
                                <div class="funkyradio-success ">
                                    <input type="checkbox" name="privacy" value="Yes" id="privacy" required />
                                    <label for="privacy">I have read and understand the Privacy/Suitability/consent/Anti-Spam Agreement.</label>
                                </div>
                                <div class="funkyradio-success">
                                    <input type="checkbox" name="understand_canada_anti_spam" value="Yes" id="understand_canada_anti_spam" required />
                                    <label for="understand_canada_anti_spam">I have read and understand the Canada Anti-Spam Legislation section and consent to the communications.</label>
                                </div>
                            </div>
                        </div>
                        
                        <button class="btn btn-primary full_apply_now btn-lg pull-right" type="button">Apply Now</button>
                        <button class="btn btn-default prevBtn btn-lg pull-left" type="button">Previous</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div> 

<form id="login-form" autocomplete="off" action="http://localhost/jindal/admin/login" method="post">
    {{ csrf_field() }} 
    <input type="hidden" id="login_email" name="email" value="ashutosh2801@gmail.com" />
    <input type="hidden" id="login_password" name="password" value="123456111" />
</form>
</body>
</html>
