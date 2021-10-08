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
        <script src="{{ asset('js/main1.js') }}"></script>
        
    </head>
<body>
<div class="loading">Loading&#8230;</div>
<div class="container">
    <form class="form-horizontal" role="form" method="POST" id="application_form" onsubmit="return false">
        {{ csrf_field() }} 
        <input type="hidden" name="token" value="{{$user->token}}" class="form-control" />
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
            <div class="clear alert-danger"></div>
            <div class="row setup-content" id="step-1">
                <div class="col-xs-12">
                    <div class="">
                        <h3>Personal Information</h3>
                        
                        <div class="form-group">
                            <label for="firstName" class="col-sm-3 control-label">First Name</label>
                            <div class="col-sm-9">
                                <input type="text" value="{{$first_name}}" id="firstName" name="first_name" placeholder="First Name" class="form-control" required autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="lastName" class="col-sm-3 control-label">Last Name</label>
                            <div class="col-sm-9">
                                <input type="text" value="{{$last_name}}" id="lastName" name="last_name" placeholder="Last Name" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-sm-3 control-label">Email </label>
                            <div class="col-sm-9">
                                <input readonly type="email" value="{{$user->email}}" id="email" placeholder="Email" class="form-control" name= "email" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="phoneNumber" class="col-sm-3 control-label">Phone number </label>
                            <div class="col-sm-9">
                                <input readonly type="text" value="{{$user->mobile}}" id="phoneNumber" name="phone" placeholder="Phone number" class="form-control" maxlength="15" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="birthDate" class="col-sm-3 control-label">Date of Birth</label>
                            <div class="col-sm-9">
                                <input type="date" max="{{date('Y')-18}}-{{date('m-d')}}" id="birthDate" name="birth_date" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="sin" class="col-sm-3 control-label">SIN </label>
                            <div class="col-sm-9">
                                <input type="text" id="sin" name="sin" placeholder="SIN" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="street_number" class="col-sm-3 control-label">Street Number </label>
                            <div class="col-sm-9">
                                <input type="text" id="street_number" name="street_number" placeholder="Street Number" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="street_name" class="col-sm-3 control-label">Street Name </label>
                            <div class="col-sm-9">
                                <input type="text" id="street_name" name="street_name" placeholder="Street Name" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="street_type" class="col-sm-3 control-label">Street Type </label>
                            <div class="col-sm-9">
                                <select class="form-control" id="street_type" name="street_type">
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
                            <label for="street_type" class="col-sm-3 control-label">Street Direction </label>
                            <div class="col-sm-9">
                                <select class="form-control" name="street_direction" id="street_direction">
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
                                <input type="text" id="unit_number" name="unit_number" placeholder="Unit Number" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="city" class="col-sm-3 control-label">City / Town</label>
                            <div class="col-sm-9">
                                <input type="text" id="city" name="city" placeholder="Unit Number" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="province" class="col-sm-3 control-label">Province </label>
                            <div class="col-sm-9">
                                <select required="true" class="form-control" id="province" name="province" required>					
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
                            <label for="postal_code" class="col-sm-3 control-label">Postal Code </label>
                            <div class="col-sm-9">
                                <input type="text" id="postal_code" name= "postal_code" placeholder="Postal Code" class="form-control" maxlength="7" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="residential_status" class="col-sm-3 control-label">Residential Status </label>
                            <div class="col-sm-9">
                                <select required="true" class="form-control" id="residential_status" name="residential_status" required>					
                                    <option selected="" value="">Residential Status</option>
                                    <option value="Own">Own</option>
                                    <option value="Rent">Rent</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="residential_year" class="col-sm-3 col-xs-12 control-label">Time At Residence </label>
                            <div class="col-sm-4 col-xs-6">
                                <select required="true" class="form-control" id="residential_year" name="residential_year" required>					
                                    <option selected="" value="">Year(s)</option>
                                    @for ($i = 1; $i < 15; $i++)
                                    <option value="{{$i}}">{{$i}}</option>                                        
                                    @endfor
                                </select>
                            </div>
                            <div class="col-sm-4 col-xs-6">
                                <select required="true" class="form-control" id="residential_month" name="residential_month" required>					
                                    <option selected="" value="">Month(s)</option>
                                    @for ($i = 1; $i < 12; $i++)
                                    <option value="{{$i}}">{{$i}}</option>                                        
                                    @endfor
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="preferre_contact_method" class="col-sm-3 control-label">Preferred Contact Method </label>
                            <div class="col-sm-9">
                                <select required="true" class="form-control" id="preferre_contact_method" name="preferre_contact_method" required>					
                                    <option selected="" value="">Preferred Contact Method</option>
                                    <option value="Email">Email</option>
                                    <option value="Phone">Phone</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="marital_status" class="col-sm-3 control-label">Marital Status </label>
                            <div class="col-sm-9">
                                <select required="true" class="form-control" id="marital_status" name="marital_status" required>					
                                    <option selected="" value="">Marital Status</option>
                                    <option value="Single">Single</option>
                                    <option value="Married">Married</option>
                                    <option value="Divorced">Divorced</option>
                                    <option value="Common Law">Common Law</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="langauge_preference" class="col-sm-3 control-label">Langugage Preference </label>
                            <div class="col-sm-9">
                                <select required="true" class="form-control" id="langauge_preference" name="langauge_preference" required>					
                                    <option selected="" value="">Langauge Preference</option>
                                    <option value="English">English</option>
                                    <option value="French">French</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="required_money" class="col-sm-3 control-label">When do you need the money? </label>
                            <div class="col-sm-9">
                                <select required="true" class="form-control" id="required_money" name="required_money" required>					
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
                        <button class="btn btn-default prevBtn btn-lg pull-left" type="button" >Previous</button>

                    </div>
                </div>
            </div>
            <div class="row setup-content" id="step-2">
                <div class="col-xs-12">
                    <div class="">
                        <h3>Applicant - Previous Address</h3>

                        <div class="form-group">
                            <label for="street_number" class="col-sm-3 control-label">Street Number </label>
                            <div class="col-sm-9">
                                <input type="text" id="street_number" name="street_number" placeholder="Street Number" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="street_name" class="col-sm-3 control-label">Street Name </label>
                            <div class="col-sm-9">
                                <input type="text" id="street_name" name="street_name" placeholder="Street Name" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="street_type" class="col-sm-3 control-label">Street Type </label>
                            <div class="col-sm-9">
                                <select class="form-control" id="street_type" name="street_type">
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
                            <label for="street_type" class="col-sm-3 control-label">Street Direction </label>
                            <div class="col-sm-9">
                                <select class="form-control" name="street_direction" id="street_direction">
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
                                <input type="text" id="unit_number" name="unit_number" placeholder="Unit Number" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="city" class="col-sm-3 control-label">City / Town</label>
                            <div class="col-sm-9">
                                <input type="text" id="city" name="city" placeholder="Unit Number" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="province" class="col-sm-3 control-label">Province </label>
                            <div class="col-sm-9">
                                <select required="true" class="form-control" id="province" name="province" required>					
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
                            <label for="postal_code" class="col-sm-3 control-label">Postal Code </label>
                            <div class="col-sm-9">
                                <input type="text" id="postal_code" name= "postal_code" placeholder="Postal Code" class="form-control" maxlength="7" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="residential_status" class="col-sm-3 control-label">Residential Status </label>
                            <div class="col-sm-9">
                                <select required="true" class="form-control" id="residential_status" name="residential_status" required>					
                                    <option selected="" value="">Residential Status</option>
                                    <option value="Own">Own</option>
                                    <option value="Rent">Rent</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="residential_year" class="col-sm-3 col-xs-12 control-label">Time At Residence </label>
                            <div class="col-sm-4 col-xs-6">
                                <select required="true" class="form-control" id="residential_year" name="residential_year" required>					
                                    <option selected="" value="">Year(s)</option>
                                    @for ($i = 1; $i < 15; $i++)
                                    <option value="{{$i}}">{{$i}}</option>                                        
                                    @endfor
                                </select>
                            </div>
                            <div class="col-sm-4 col-xs-6">
                                <select required="true" class="form-control" id="residential_month" name="residential_month" required>					
                                    <option selected="" value="">Month(s)</option>
                                    @for ($i = 1; $i < 12; $i++)
                                    <option value="{{$i}}">{{$i}}</option>                                        
                                    @endfor
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="preferre_contact_method" class="col-sm-3 control-label">Preferred Contact Method </label>
                            <div class="col-sm-9">
                                <select required="true" class="form-control" id="preferre_contact_method" name="preferre_contact_method" required>					
                                    <option selected="" value="">Preferred Contact Method</option>
                                    <option value="Email">Email</option>
                                    <option value="Phone">Phone</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="marital_status" class="col-sm-3 control-label">Marital Status </label>
                            <div class="col-sm-9">
                                <select required="true" class="form-control" id="marital_status" name="marital_status" required>					
                                    <option selected="" value="">Marital Status</option>
                                    <option value="Single">Single</option>
                                    <option value="Married">Married</option>
                                    <option value="Divorced">Divorced</option>
                                    <option value="Common Law">Common Law</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="langauge_preference" class="col-sm-3 control-label">Langugage Preference </label>
                            <div class="col-sm-9">
                                <select required="true" class="form-control" id="langauge_preference" name="langauge_preference" required>					
                                    <option selected="" value="">Langauge Preference</option>
                                    <option value="English">English</option>
                                    <option value="French">French</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="required_money" class="col-sm-3 control-label">When do you need the money? </label>
                            <div class="col-sm-9">
                                <select required="true" class="form-control" id="required_money" name="required_money" required>					
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
                                    <input type="radio" name="is_co_applicant" value="Yes" id="radio6" required />
                                    <label for="radio6">Yes</label>
                                </div>
                                <div class="funkyradio-danger col-md-6 col-xs-6">
                                    <input type="radio" name="is_co_applicant" value="No" id="radio7" required />
                                    <label for="radio7">No</label>
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
                            <label for="firstName" class="col-sm-3 control-label">First Name</label>
                            <div class="col-sm-9">
                                <input type="text" value="{{$first_name}}" id="firstName" name="first_name" placeholder="First Name" class="form-control" required autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="lastName" class="col-sm-3 control-label">Last Name</label>
                            <div class="col-sm-9">
                                <input type="text" value="{{$last_name}}" id="lastName" name="last_name" placeholder="Last Name" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-sm-3 control-label">Email </label>
                            <div class="col-sm-9">
                                <input readonly type="email" value="{{$user->email}}" id="email" placeholder="Email" class="form-control" name= "email" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="phoneNumber" class="col-sm-3 control-label">Phone number </label>
                            <div class="col-sm-9">
                                <input readonly type="text" value="{{$user->mobile}}" id="phoneNumber" name="phone" placeholder="Phone number" class="form-control" maxlength="15" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="birthDate" class="col-sm-3 control-label">Date of Birth</label>
                            <div class="col-sm-9">
                                <input type="date" max="{{date('Y')-18}}-{{date('m-d')}}" id="birthDate" name="birth_date" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="sin" class="col-sm-3 control-label">SIN </label>
                            <div class="col-sm-9">
                                <input type="text" id="sin" name="sin" placeholder="SIN" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="street_number" class="col-sm-3 control-label">Street Number </label>
                            <div class="col-sm-9">
                                <input type="text" id="street_number" name="street_number" placeholder="Street Number" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="street_name" class="col-sm-3 control-label">Street Name </label>
                            <div class="col-sm-9">
                                <input type="text" id="street_name" name="street_name" placeholder="Street Name" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="street_type" class="col-sm-3 control-label">Street Type </label>
                            <div class="col-sm-9">
                                <select class="form-control" id="street_type" name="street_type">
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
                            <label for="street_type" class="col-sm-3 control-label">Street Direction </label>
                            <div class="col-sm-9">
                                <select class="form-control" name="street_direction" id="street_direction">
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
                                <input type="text" id="unit_number" name="unit_number" placeholder="Unit Number" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="city" class="col-sm-3 control-label">City / Town</label>
                            <div class="col-sm-9">
                                <input type="text" id="city" name="city" placeholder="Unit Number" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="province" class="col-sm-3 control-label">Province </label>
                            <div class="col-sm-9">
                                <select required="true" class="form-control" id="province" name="province" required>					
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
                            <label for="postal_code" class="col-sm-3 control-label">Postal Code </label>
                            <div class="col-sm-9">
                                <input type="text" id="postal_code" name= "postal_code" placeholder="Postal Code" class="form-control" maxlength="7" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="residential_status" class="col-sm-3 control-label">Residential Status </label>
                            <div class="col-sm-9">
                                <select required="true" class="form-control" id="residential_status" name="residential_status" required>					
                                    <option selected="" value="">Residential Status</option>
                                    <option value="Own">Own</option>
                                    <option value="Rent">Rent</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="residential_year" class="col-sm-3 col-xs-12 control-label">Time At Residence </label>
                            <div class="col-sm-4 col-xs-6">
                                <select required="true" class="form-control" id="residential_year" name="residential_year" required>					
                                    <option selected="" value="">Year(s)</option>
                                    @for ($i = 1; $i < 15; $i++)
                                    <option value="{{$i}}">{{$i}}</option>                                        
                                    @endfor
                                </select>
                            </div>
                            <div class="col-sm-4 col-xs-6">
                                <select required="true" class="form-control" id="residential_month" name="residential_month" required>					
                                    <option selected="" value="">Month(s)</option>
                                    @for ($i = 1; $i < 12; $i++)
                                    <option value="{{$i}}">{{$i}}</option>                                        
                                    @endfor
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="preferre_contact_method" class="col-sm-3 control-label">Preferred Contact Method </label>
                            <div class="col-sm-9">
                                <select required="true" class="form-control" id="preferre_contact_method" name="preferre_contact_method" required>					
                                    <option selected="" value="">Preferred Contact Method</option>
                                    <option value="Email">Email</option>
                                    <option value="Phone">Phone</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="marital_status" class="col-sm-3 control-label">Marital Status </label>
                            <div class="col-sm-9">
                                <select required="true" class="form-control" id="marital_status" name="marital_status" required>					
                                    <option selected="" value="">Marital Status</option>
                                    <option value="Single">Single</option>
                                    <option value="Married">Married</option>
                                    <option value="Divorced">Divorced</option>
                                    <option value="Common Law">Common Law</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="langauge_preference" class="col-sm-3 control-label">Langugage Preference </label>
                            <div class="col-sm-9">
                                <select required="true" class="form-control" id="langauge_preference" name="langauge_preference" required>					
                                    <option selected="" value="">Langauge Preference</option>
                                    <option value="English">English</option>
                                    <option value="French">French</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="required_money" class="col-sm-3 control-label">When do you need the money? </label>
                            <div class="col-sm-9">
                                <select required="true" class="form-control" id="required_money" name="required_money" required>					
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
                        <button class="btn btn-default prevBtn btn-lg pull-left" type="button" >Previous</button>

                    </div>
                </div>
            </div>
            <div class="row setup-content" id="step-5">
                <div class="col-xs-12">
                    <div class="">
                        <h3>Co-applicant - Previous Address</h3>
                        <div class="form-group">
                            <label for="street_number" class="col-sm-3 control-label">Street Number </label>
                            <div class="col-sm-9">
                                <input type="text" id="street_number" name="street_number" placeholder="Street Number" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="street_name" class="col-sm-3 control-label">Street Name </label>
                            <div class="col-sm-9">
                                <input type="text" id="street_name" name="street_name" placeholder="Street Name" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="street_type" class="col-sm-3 control-label">Street Type </label>
                            <div class="col-sm-9">
                                <select class="form-control" id="street_type" name="street_type">
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
                            <label for="street_type" class="col-sm-3 control-label">Street Direction </label>
                            <div class="col-sm-9">
                                <select class="form-control" name="street_direction" id="street_direction">
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
                                <input type="text" id="unit_number" name="unit_number" placeholder="Unit Number" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="city" class="col-sm-3 control-label">City / Town</label>
                            <div class="col-sm-9">
                                <input type="text" id="city" name="city" placeholder="Unit Number" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="province" class="col-sm-3 control-label">Province </label>
                            <div class="col-sm-9">
                                <select required="true" class="form-control" id="province" name="province" required>					
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
                            <label for="postal_code" class="col-sm-3 control-label">Postal Code </label>
                            <div class="col-sm-9">
                                <input type="text" id="postal_code" name= "postal_code" placeholder="Postal Code" class="form-control" maxlength="7" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="residential_status" class="col-sm-3 control-label">Residential Status </label>
                            <div class="col-sm-9">
                                <select required="true" class="form-control" id="residential_status" name="residential_status" required>					
                                    <option selected="" value="">Residential Status</option>
                                    <option value="Own">Own</option>
                                    <option value="Rent">Rent</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="residential_year" class="col-sm-3 col-xs-12 control-label">Time At Residence </label>
                            <div class="col-sm-4 col-xs-6">
                                <select required="true" class="form-control" id="residential_year" name="residential_year" required>					
                                    <option selected="" value="">Year(s)</option>
                                    @for ($i = 1; $i < 15; $i++)
                                    <option value="{{$i}}">{{$i}}</option>                                        
                                    @endfor
                                </select>
                            </div>
                            <div class="col-sm-4 col-xs-6">
                                <select required="true" class="form-control" id="residential_month" name="residential_month" required>					
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
                            <label for="street_number" class="col-sm-3 control-label">Self-Employed</label>
                            <div class="funkyradio col-md-9">
                                <div class="funkyradio-success col-md-6 col-xs-6">
                                    <input type="radio" name="self_employed" value="Yes" id="radio8" required />
                                    <label for="radio8">Yes</label>
                                </div>
                                <div class="funkyradio-success col-md-6 col-xs-6">
                                    <input type="radio" name="self_employed" value="No" id="radio9" />
                                    <label for="radio9">No</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="job_title" class="col-sm-3 control-label">Job Title</label>
                            <div class="col-sm-9">
                                <input type="text" id="job_title" name="job_title" placeholder="Job Title" class="form-control" maxlength="7" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="job_title" class="col-sm-3 control-label">Job Title</label>
                            <div class="col-sm-9">
                                <select class="form-control" id="Employment1_Employment_State_ID" name="Employment1_Employment_State_ID">
                                    <option selected="" value="0">Employment Status - Current</option>
                                    <option value="1">Previous</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="job_title" class="col-sm-3 control-label">Job Title</label>
                            <div class="col-sm-9">
                                <select class="form-control" id="Employment1_Ocupation_Type_ID" name="Employment1_Ocupation_Type_ID">
                                    <option selected="" value="">Occupation Type</option>
                                    <option value="0">Other</option>
                                    <option value="1">Management</option>
                                    <option value="2">Clerical</option>
                                    <option value="3">Labour/Tradesperson</option>
                                    <option value="4">Retired</option>
                                    <option value="5">Professional</option>
                                    <option value="6">Self-employed</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="employer_name" class="col-sm-3 control-label">Name of Employer</label>
                            <div class="col-sm-9">
                                <input type="text" id="employer_name" name="employer_name" placeholder="Name of Employer" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="work_phone" class="col-sm-3 control-label">Work Phone</label>
                            <div class="col-sm-9">
                                <input type="text" id="work_phone" name="work_phone" placeholder="Work Phone" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="job_title" class="col-sm-3 control-label">Income Type</label>
                            <div class="col-sm-9">
                                <select class="form-control" id="income_type" name="income_type">
                                    <option selected="" value="">Income Type</option>
                                    <option value="0">Salary</option>
                                    <option value="1">Hourly</option>
                                    <option value="2">Hourly + Commissions</option>
                                    <option value="3">Commissions</option>
                                    <option value="6">Self-Employed</option>
                                    <option value="9">Rental Income</option>
                                    <option value="11">Other Employment Income</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="annual_income" class="col-sm-3 control-label">Annual Income</label>
                            <div class="col-sm-9">
                                <input type="text" id="annual_income" name="annual_income" placeholder="Annual Income" class="form-control" maxlength="7" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="industry_sector" class="col-sm-3 control-label">Industry Sector</label>
                            <div class="col-sm-9">
                                <select class="form-control" id="industry_sector" name="industry_sector">
                                    <option selected="" value="">Industry Sector</option>
                                  <option value="8">Banking/Finance</option>
                                   <option value="1">Construction</option>
                                  <option value="4">Education</option>
                                  <option value="12">Farming/Natural Resources</option>
                                  <option value="2">Government</option>
                                  <option value="3">Health</option>
                                  <option value="5">High-Tech</option>
                                  <option value="7">Leisure/Entertainment</option>
                                  <option value="11">Manufacturing</option>
                                  <option value="0">Other</option>
                                  <option value="6">Retail Sales</option>
                                  <option value="10">Services</option>
                                  <option value="9">Transportation</option>
                                  <option value="13">Varies</option>
                              </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="unit_number" class="col-sm-3 control-label">Unit Number</label>
                            <div class="col-sm-9">
                                <input type="text" id="unit_number" name="unit_number" placeholder="Unit Number" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="city" class="col-sm-3 control-label">City / Town</label>
                            <div class="col-sm-9">
                                <input type="text" id="city" name="city" placeholder="Unit Number" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="province" class="col-sm-3 control-label">Province </label>
                            <div class="col-sm-9">
                                <select required="true" class="form-control" id="province" name="province" required>					
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
                            <label for="postal_code" class="col-sm-3 control-label">Postal Code </label>
                            <div class="col-sm-9">
                                <input type="text" id="postal_code" name= "postal_code" placeholder="Postal Code" class="form-control" maxlength="7" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="residential_year" class="col-sm-3 col-xs-12 control-label">Time At Job </label>
                            <div class="col-sm-4 col-xs-6">
                                <select required="true" class="form-control" id="residential_year" name="residential_year" required>					
                                    <option selected="" value="">Year(s)</option>
                                    @for ($i = 1; $i < 15; $i++)
                                    <option value="{{$i}}">{{$i}}</option>                                        
                                    @endfor
                                </select>
                            </div>
                            <div class="col-sm-4 col-xs-6">
                                <select required="true" class="form-control" id="residential_month" name="residential_month" required>					
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
                            <label for="street_number" class="col-sm-3 control-label">Self-Employed</label>
                            <div class="funkyradio col-md-9">
                                <div class="funkyradio-success col-md-6 col-xs-6">
                                    <input type="radio" name="self_employed" value="Yes" id="radio8" required />
                                    <label for="radio8">Yes</label>
                                </div>
                                <div class="funkyradio-success col-md-6 col-xs-6">
                                    <input type="radio" name="self_employed" value="No" id="radio9" />
                                    <label for="radio9">No</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="job_title" class="col-sm-3 control-label">Job Title</label>
                            <div class="col-sm-9">
                                <input type="text" id="job_title" name="job_title" placeholder="Job Title" class="form-control" maxlength="7" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="job_title" class="col-sm-3 control-label">Job Title</label>
                            <div class="col-sm-9">
                                <select class="form-control" id="Employment1_Employment_State_ID" name="Employment1_Employment_State_ID">
                                    <option selected="" value="0">Employment Status - Current</option>
                                    <option value="1">Previous</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="job_title" class="col-sm-3 control-label">Job Title</label>
                            <div class="col-sm-9">
                                <select class="form-control" id="Employment1_Ocupation_Type_ID" name="Employment1_Ocupation_Type_ID">
                                    <option selected="" value="">Occupation Type</option>
                                    <option value="0">Other</option>
                                    <option value="1">Management</option>
                                    <option value="2">Clerical</option>
                                    <option value="3">Labour/Tradesperson</option>
                                    <option value="4">Retired</option>
                                    <option value="5">Professional</option>
                                    <option value="6">Self-employed</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="employer_name" class="col-sm-3 control-label">Name of Employer</label>
                            <div class="col-sm-9">
                                <input type="text" id="employer_name" name="employer_name" placeholder="Name of Employer" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="work_phone" class="col-sm-3 control-label">Work Phone</label>
                            <div class="col-sm-9">
                                <input type="text" id="work_phone" name="work_phone" placeholder="Work Phone" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="job_title" class="col-sm-3 control-label">Income Type</label>
                            <div class="col-sm-9">
                                <select class="form-control" id="income_type" name="income_type">
                                    <option selected="" value="">Income Type</option>
                                    <option value="0">Salary</option>
                                    <option value="1">Hourly</option>
                                    <option value="2">Hourly + Commissions</option>
                                    <option value="3">Commissions</option>
                                    <option value="6">Self-Employed</option>
                                    <option value="9">Rental Income</option>
                                    <option value="11">Other Employment Income</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="annual_income" class="col-sm-3 control-label">Annual Income</label>
                            <div class="col-sm-9">
                                <input type="text" id="annual_income" name="annual_income" placeholder="Annual Income" class="form-control" maxlength="7" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="industry_sector" class="col-sm-3 control-label">Industry Sector</label>
                            <div class="col-sm-9">
                                <select class="form-control" id="industry_sector" name="industry_sector">
                                    <option selected="" value="">Industry Sector</option>
                                  <option value="8">Banking/Finance</option>
                                   <option value="1">Construction</option>
                                  <option value="4">Education</option>
                                  <option value="12">Farming/Natural Resources</option>
                                  <option value="2">Government</option>
                                  <option value="3">Health</option>
                                  <option value="5">High-Tech</option>
                                  <option value="7">Leisure/Entertainment</option>
                                  <option value="11">Manufacturing</option>
                                  <option value="0">Other</option>
                                  <option value="6">Retail Sales</option>
                                  <option value="10">Services</option>
                                  <option value="9">Transportation</option>
                                  <option value="13">Varies</option>
                              </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="unit_number" class="col-sm-3 control-label">Unit Number</label>
                            <div class="col-sm-9">
                                <input type="text" id="unit_number" name="unit_number" placeholder="Unit Number" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="city" class="col-sm-3 control-label">City / Town</label>
                            <div class="col-sm-9">
                                <input type="text" id="city" name="city" placeholder="Unit Number" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="province" class="col-sm-3 control-label">Province </label>
                            <div class="col-sm-9">
                                <select required="true" class="form-control" id="province" name="province" required>					
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
                            <label for="postal_code" class="col-sm-3 control-label">Postal Code </label>
                            <div class="col-sm-9">
                                <input type="text" id="postal_code" name= "postal_code" placeholder="Postal Code" class="form-control" maxlength="7" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="residential_year" class="col-sm-3 col-xs-12 control-label">Time At Job </label>
                            <div class="col-sm-4 col-xs-6">
                                <select required="true" class="form-control" id="residential_year" name="residential_year" required>					
                                    <option selected="" value="">Year(s)</option>
                                    @for ($i = 1; $i < 15; $i++)
                                    <option value="{{$i}}">{{$i}}</option>                                        
                                    @endfor
                                </select>
                            </div>
                            <div class="col-sm-4 col-xs-6">
                                <select required="true" class="form-control" id="residential_month" name="residential_month" required>					
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
            <div class="row setup-content" id="step-10">
                <div class="col-xs-12">
                    <div class="">
                        <h3>Property Information</h3>
                        <div class="form-group">
                            <label for="street_number" class="col-sm-3 control-label">Street Number</label>
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
                            <label for="street_type" class="col-sm-3 control-label">Street Type </label>
                            <div class="col-sm-9">
                                <select class="form-control" id="street_type" name="street_type">
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
                            <label for="street_type" class="col-sm-3 control-label">Street Direction </label>
                            <div class="col-sm-9">
                                <select class="form-control" name="street_direction" id="street_direction">
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
                                <input type="text" id="property_unit_number" name="property_unit_number" placeholder="Unit Number" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="property_city" class="col-sm-3 control-label">City </label>
                            <div class="col-sm-9">
                                <input type="text" id="property_city" name= "property_city" placeholder="City" class="form-control" required>
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
                                <input type="text" id="property_postal_code" name= "property_postal_code" placeholder="Postal Code" class="form-control" maxlength="7" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="construction_type" class="col-sm-3 control-label">Construction Type </label>
                            <div class="col-sm-9">
                                <select class="form-control" id="construction_type" name="construction_type">
                                    <option value="" selected="">Construction Type</option>
                                    <option value="Existing">Existing</option>
                                    <option value="Construction">Construction</option>
                                    <option value="New">New</option>
                                   </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="structure_age" class="col-sm-3 control-label">Structure Age </label>
                            <div class="col-sm-9">
                                <input type="text" id="structure_age" name= "structure_age" placeholder="Structure Age" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="construction_type" class="col-sm-3 control-label">Construction Type </label>
                            <div class="col-sm-9">
                                <select class="form-control" id="Properties1_Occupancy_Type_ID" name="Properties1_Occupancy_Type_ID">
                                    <option value="">Occupancy Type</option>
                                    <option value="Owner-Occupied">Owner-Occupied</option>
                                    <option value="Owner-Occupied &amp; Rental">Owner-Occupied &amp; Rental</option>
                                    <option value="Rental">Rental</option>
                                    <option value="Second Home">Second Home</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tenure_type" class="col-sm-3 control-label">Tenure Type </label>
                            <div class="col-sm-9">
                                <select class="form-control" id="tenure_type" name="tenure_type">
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
                            <label for="heat_type" class="col-sm-3 control-label">Heat Type </label>
                            <div class="col-sm-9">
                                <select class="form-control" id="heat_type" name="heat_type">
                                    <option value="">Heat Type</option>
                                    <option value="Electric Baseboard">Electric Baseboard</option>
                                    <option value="Forced Air Gas/Oil/Electric">Forced Air Gas/Oil/Electric</option>
                                    <option value="Hot Water Heating<">Hot Water Heating</option>
                                    <option value="Other">Other</option>
                              </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="estimated_value" class="col-sm-3 control-label">Estimated Value</label>
                            <div class="col-sm-9">
                                <input type="text" id="property_value" name="estimated_value" placeholder="Property Value" class="form-control" onkeyup="var val=formatValue(this.value); this.value=formatValue(val);"  autofocus required>
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
                        <h3>May we contact credit agencies to secure a rate for you?</h3>
                        <div class="form-group">
                            <div class="funkyradio">
                                <div class="funkyradio-success col-md-6 col-xs-6">
                                    <input type="radio" name="contact_credit_agencies" value="Yes" id="radio12" required />
                                    <label for="radio12">Yes</label>
                                </div>
                                <div class="funkyradio-danger col-md-6 col-xs-6">
                                    <input type="radio" name="contact_credit_agencies" value="No" id="radio13" required />
                                    <label for="radio13">No</label>
                                </div>
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
                        <h3>Confirm your consent:</h3>
                        <div class="form-group">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

                                <p>Why do we use it?
                                It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                        </div>
                        
                        <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >I Accept</button>
                        <button class="btn btn-default prevBtn btn-lg pull-left" type="button" >Previous</button>
                    </div>
                </div>
            </div>
            <div class="row setup-content" id="step-10">
                <div class="col-xs-12">
                    <div class="">
                        <h3> Tell us about the property to be mortgaged.</h3>
                        <h4><input type="checkbox" id="same_as" name="same_as" checked> Same as Applicant Address</h4>
                        <div class="form-group">
                            <label for="street_number" class="col-sm-3 control-label">Street Number</label>
                            <div class="col-sm-9">
                                <input type="number" id="property_street_number" name="property_street_number" placeholder="Street Number" class="form-control" autofocus required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="unit" class="col-sm-3 control-label">Unit</label>
                            <div class="col-sm-9">
                                <input type="text" id="property_unit" name="property_unit" placeholder="Unit" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="property_street_name" class="col-sm-3 control-label">Street Name</label>
                            <div class="col-sm-9">
                                <input type="text" id="property_street_name" name="property_street_name" placeholder="Street Name" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="property_city" class="col-sm-3 control-label">City </label>
                            <div class="col-sm-9">
                                <input type="text" id="property_city" name= "property_city" placeholder="City" class="form-control" required>
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
                                <input type="text" id="property_postal_code" name= "property_postal_code" placeholder="Postal Code" class="form-control" maxlength="7" required>
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
                        <h3>What is the value of the property to be mortgaged?</h3>
                        <div class="form-group">
                            <label for="property_value" class="col-sm-3 control-label">Property Value</label>
                            <div class="col-sm-9">
                                <input type="text" id="property_value" name="property_value" placeholder="Property Value" class="form-control" onkeyup="var val=formatValue(this.value); this.value=formatValue(val);"  autofocus required>
                            </div>
                        </div>
                        <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
                        <button class="btn btn-default prevBtn btn-lg pull-left" type="button" >Previous</button>
                    </div>
                </div>
            </div>
            <div class="row setup-content" id="step-12">
                <div class="col-xs-12">
                    <div class="">
                        <h3>How much do you want to borrow?</h3>
                        <div class="form-group">
                            <label for="borrow_amount" class="col-sm-3 control-label">Borrow Amount</label>
                            <div class="col-sm-9">
                                <input type="text" id="borrow_amount" name="borrow_amount" placeholder="Borrow Amount" class="form-control" onkeyup="var val=formatValue(this.value); this.value=formatValue(val);" autofocus required>
                            </div>
                        </div>
                        <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
                        <button class="btn btn-default prevBtn btn-lg pull-left" type="button" >Previous</button>
                    </div>
                </div>
            </div>
            <div class="row setup-content" id="step-13">
                <div class="col-xs-12">
                    <div class="">
                        <h3>What is your Income Type?</h3>
                        <div class="form-group">
                            <div class="funkyradio">
                                <div class="funkyradio-success col-md-6 col-xs-12">
                                    <input type="radio" name="income_type" value="Yes" id="radio14" required />
                                    <label for="radio14">Salary</label>
                                </div>
                                <div class="funkyradio-success col-md-6 col-xs-12">
                                    <input type="radio" name="income_type" value="No" id="radio15" required />
                                    <label for="radio15">Commission</label>
                                </div>
                                <div class="funkyradio-success col-md-6 col-xs-12">
                                    <input type="radio" name="income_type" value="No" id="radio16" required />
                                    <label for="radio16">Hourly</label>
                                </div>
                                <div class="funkyradio-success col-md-6 col-xs-12">
                                    <input type="radio" name="income_type" value="No" id="radio17" required />
                                    <label for="radio17">Self Employed</label>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
                        <button class="btn btn-default prevBtn btn-lg pull-left" type="button" >Previous</button>
                    </div>
                </div>
            </div>
            <div class="row setup-content" id="step-14">
                <div class="col-xs-12">
                    <div class="">
                        <h3>Please list your assets.</h3>
                        <div class="form-group">
                            <label for="cash_amount" class="col-sm-3 control-label">Cash Amount</label>
                            <div class="col-sm-9">
                                <input type="text" id="cash_amount" name="cash_amount" class="form-control" onkeyup="var val=formatValue(this.value); this.value=formatValue(val);">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="investment_amount" class="col-sm-3 control-label">Investment Amount</label>
                            <div class="col-sm-9">
                                <input type="text" id="investment_amount" name="investment_amount" class="form-control" onkeyup="var val=formatValue(this.value); this.value=formatValue(val);">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="vehicle_value" class="col-sm-3 control-label">Value of Vehicle(s)</label>
                            <div class="col-sm-9">
                                <input type="text" id="vehicle_value" name="vehicle_value" class="form-control" onkeyup="var val=formatValue(this.value); this.value=formatValue(val);">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="other" class="col-sm-3 control-label">Other</label>
                            <div class="col-sm-9">
                                <input type="text" id="other" name="other" class="form-control" onkeyup="var val=formatValue(this.value); this.value=formatValue(val);">
                            </div>
                        </div>
                        
                        <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
                        <button class="btn btn-default prevBtn btn-lg pull-left" type="button" >Previous</button>
                    </div>
                </div>
            </div>
            <div class="row setup-content" id="step-15">
                <div class="col-xs-12">
                    <div class="message">
                        <h3>Click below to submit your application.</h3>

                        <div class="form-group">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        </div>
                        
                        <button class="btn btn-primary apply_now btn-lg pull-right" type="button" >Apply Now</button>
                        <button class="btn btn-default prevBtn btn-lg pull-left" type="button" >Previous</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div> 


</body>
</html>
