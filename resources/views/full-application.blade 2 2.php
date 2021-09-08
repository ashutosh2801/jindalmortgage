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
            <div class="row setup-content" id="step-8">
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
            <div class="row setup-content" id="step-9">
                <div class="col-xs-12">
                    <div class="">
                        <h3>Mortgage Information</h3>
                        <div class="form-group">
                            <label for="closing_date" class="col-sm-3 control-label">Closing Date</label>
                            <div class="col-sm-9">
                                <input type="date" id="closing_date" name="closing_date" placeholder="Closing Date" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="closing_date" class="col-sm-3 control-label">Amortization</label>
                            <div class="col-sm-4 col-xs-6">
                                <select required="true" class="form-control" id="amortization_year" name="amortization_year" required>					
                                    <option selected="" value="">Year(s)</option>
                                    @for ($i = 1; $i < 15; $i++)
                                    <option value="{{$i}}">{{$i}}</option>                                        
                                    @endfor
                                </select>
                            </div>
                            <div class="col-sm-4 col-xs-6">
                                <select required="true" class="form-control" id="amortization_month" name="amortization_month" required>					
                                    <option selected="" value="">Month(s)</option>
                                    @for ($i = 1; $i < 12; $i++)
                                    <option value="{{$i}}">{{$i}}</option>                                        
                                    @endfor
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="residential_status" class="col-sm-3 control-label">Payment Frequency </label>
                            <div class="col-sm-9">
                                <select class="form-control" id="Opportunities1_PaymentFrequency_Type_ID" name="Opportunities1_PaymentFrequency_Type_ID">
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
                            <label for="term" class="col-sm-3 control-label">Term </label>
                            <div class="col-sm-9">
                                <select class="form-control" name="term" id="term">
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
                                <input type="text" id="mortgage_amount" name= "mortgage_amount" placeholder="Mortgage Amount" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="product_type" class="col-sm-3 control-label">Product Type </label>
                            <div class="col-sm-9">
                                <select class="form-control" name="product_type" id="product_type">
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
                            <label for="down_payment" class="col-sm-3 control-label">Down Payment </label>
                            <div class="col-sm-9">
                                <input type="text" id="down_payment" name="down_payment" placeholder="Down Payment" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="closing_date" class="col-sm-3 control-label">First-Time Buyer</label>
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
                            <label for="purpose" class="col-sm-3 control-label">Purpose </label>
                            <div class="col-sm-9">
                                <select class="form-control" name="purpose" id="purpose">
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
                            <label for="vehicles" class="col-sm-3 control-label">Vehicles</label>
                            <div class="col-sm-9">
                                <input type="text" placeholder="Vehicles" id="vehicles" name="vehicles" class="form-control" onkeyup="var val=formatValue(this.value); this.value=formatValue(val);">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="cash_amount" class="col-sm-3 control-label">Cash Amount</label>
                            <div class="col-sm-9">
                                <input type="text" placeholder="Cash Amount" id="cash_amount" name="cash_amount" class="form-control" onkeyup="var val=formatValue(this.value); this.value=formatValue(val);">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="real_estate" class="col-sm-3 control-label">Real Estate</label>
                            <div class="col-sm-9">
                                <input type="text" placeholder="Real Estate" id="real_estate" name="real_estate" class="form-control" onkeyup="var val=formatValue(this.value); this.value=formatValue(val);">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="RRSP" class="col-sm-3 control-label">RRSP</label>
                            <div class="col-sm-9">
                                <input type="text" placeholder="RRSP" id="RRSP" name="RRSP" class="form-control" onkeyup="var val=formatValue(this.value); this.value=formatValue(val);">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="stocks" class="col-sm-3 control-label">Stocks</label>
                            <div class="col-sm-9">
                                <input type="text" placeholder="Stocks" id="stocks" name="stocks" class="form-control" onkeyup="var val=formatValue(this.value); this.value=formatValue(val);">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="other" class="col-sm-3 control-label">Other</label>
                            <div class="col-sm-9">
                                <input type="text" placeholder="Other" id="other" name="other" class="form-control" onkeyup="var val=formatValue(this.value); this.value=formatValue(val);">
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
                            <label for="credit" class="col-sm-3 control-label">Credit</label>
                            <div class="col-sm-9">
                                <input type="text" placeholder="Credit" id="credit" name="credit" class="form-control" onkeyup="var val=formatValue(this.value); this.value=formatValue(val);">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="loans" class="col-sm-3 control-label">Loans</label>
                            <div class="col-sm-9">
                                <input type="text" placeholder="Loans" id="loans" name="loans" class="form-control" onkeyup="var val=formatValue(this.value); this.value=formatValue(val);">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="mortgage" class="col-sm-3 control-label">Mortgage</label>
                            <div class="col-sm-9">
                                <input type="text" placeholder="Mortgage" id="mortgage" name="mortgage" class="form-control" onkeyup="var val=formatValue(this.value); this.value=formatValue(val);">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="other" class="col-sm-3 control-label">Other</label>
                            <div class="col-sm-9">
                                <input type="text" placeholder="Other" id="other" name="other" class="form-control" onkeyup="var val=formatValue(this.value); this.value=formatValue(val);">
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
                                <span style="font-weight:bold;text-decoration: underline;">Collection and Use of Personal Information</span>
                                <p>I/We understand that Mortgage Alliance ('MAC') collects personal information in accordance with and for purposes detailed in its privacy policy available at <a href="https://mortgagealliance.com/privacy-policy" target="new">https://mortgagealliance.com/privacy-policy</a> ('Privacy Policy'), including to provide the services requested, better understand my/our financial needs and determine how Mortgage Alliance may be of service to me/us. The type of information collected and related purposes include:</p>
                                <div style="padding: 0px 15px 15px 15px;">
                                a) Data such as name, address, contact numbers, email contact, income, employment, age, net worth, investment objectives, insurance coverage and banking information;<br>
                                b)	Unique identifiers: such as social insurance, driver’s license, passport numbers, etc. (as authorized by law); used to fulfill regulatory and other governmental obligations as well as to confirm and/or authenticate my/our identity;<br>
                                c)	Information from a consumer reporting agency or other source, which may include account information and/or information about my/our creditworthiness to help determine a mortgage or related products for my/our needs and to establish or verify my/our credit.
                                </div>
                                <span style="font-weight:bold;text-decoration: underline;">Sharing of Personal Information:</span>
                                <p>I/We the undersigned understand that Mortgage Alliance may share my personal information as detailed in its Privacy Policy, including with its brokers or anyone acting as an agent on its behalf ('Authorized Agent'), including as follows:</p>
                                <p style="padding: 0px 15px 15px 15px;">
                                a) Mortgage Alliance may share my/our personal information to credit bureau agencies, financial institutions, private investors, insurance companies, etc. to determine my/our eligibility for products and services.<br>
                                b) Mortgage Alliance may share my/our personal information to Authorized Agents or affiliated companies, as needed for the provision of services or products requested and/or as detailed in its Privacy Policy.<br>
                                c) Mortgage Alliance shall use my/our social insurance number as an aid to identify me/us with credit bureau agencies and financial institutions and for credit history file matching purposes.<br>
                                d) Subject to my/our right to withdraw consent detailed in the Privacy Policy and optional consents provided in this Consent and Privacy Agreement, Mortgage Alliance may use my/our information to conduct surveys on the quality of its products and services or to provide me/us with offers for additional products and services that they feel may be of interest to me/us.
                                </p>
                                <span style="font-weight:bold;text-decoration: underline;">Credit Bureau Consent:</span>
                                <p>I/We the undersigned, declare the information provided in the mortgage application is a true and complete representation. I/We understand that it is being used to determine my/our credit worthiness and to evaluate my/our request for credit. I/We authorize Mortgage Alliance or their designate to obtain a credit report. I/We acknowledge that the completion of a credit application may take time and it might entail additional credit reports. I/We authorize Mortgage Alliance to exchange such credit information or obtain additional credit reports for up to six (6) months from the date signed below for the purpose of securing credit or other products and services with potential mortgage lenders, insurance companies, Authorized Agents or other service providers.</p>
                                <span style="font-weight:bold;text-decoration: underline;">Sharing for Insurance Products and Services:</span>
                                <p>I/We authorize Mortgage Alliance to share my/our contact details including name, phone number, email address and mortgage file to an insurance brokerage firm duly authorized by Mortgage Alliance, if permitted by law, so that they can collect the necessary information to offer me/us competitive life insurance products tailored to my/our needs and which I/We can accept or decline at any time.</p>
                                <p style="padding: 0px 15px 15px 15px;">
                                <strong>Home/Auto Insurance.</strong> I/We authorize Mortgage Alliance to share my/our contact details including name, phone number, email address and mortgage file to a property and casualty insurance brokerage firm duly authorized by Mortgage Alliance, so that they can collect the necessary information to offer me/us highly competitive home and auto insurance products tailored to my/our needs and which I/We can accept or decline at any time. 
                                </p>
                                <span style="font-weight:bold;text-decoration: underline;">Canada Anti-Spam Legislation:</span>
                                <p>I/We authorize Mortgage Alliance, affiliated companies and authorized agents to keep in touch with me/us via electronic messaging in order to provide me/us with content and provide insightful information on mortgages, finances, etc. I/We wish to be kept informed and consent to the receiving of these informative electronic communications. I/We understand that I/we can withdraw consent at any time.</p>
                                <p>I/We understand that even if I/We do not provide my/our express consent to receive promotional communications, I/We may still be contacted, if authorized under applicable anti-spam legislation, for example if I/We have recently entered into a transaction with Mortgage Alliance (and therefore, Mortgage Alliance has my/our implied consent) as well as for transactional purposes such as contacts for customer service and/or product or service information, status updates or renewals, reminder notices or answers to my/our questions or inquiries.</p>
                                <span style="font-weight:bold;text-decoration: underline;">Ongoing Commitment:</span>
                                <p>I/We acknowledge the Mortgage Alliance Privacy Policy is available for review at https://mortgagealliance.com/privacy-policy, and understand that the collection, use and disclosure of my/our personal information by Mortgage Alliance will be done in accordance with such Privacy Policy.</p>
                                <p>I/We agree that a photocopy or electronic copy of this Consent and Privacy Agreement has the same value as the original one.</p>   
                            </p>
                        </div>

                        <div class="form-group">
                            <div class="funkyradio">
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
                        
                        <button class="btn btn-primary apply_now btn-lg pull-right" type="button">Apply Now</button>
                        <button class="btn btn-default prevBtn btn-lg pull-left" type="button">Previous</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div> 


</body>
</html>
