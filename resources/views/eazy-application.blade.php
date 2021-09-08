<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Application Form | Jindal Mortgages</title>

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
        <input type="hidden" name="token" value="{{$user->token}}" class="form-control" />
        <input type="hidden" name="application_type" value="Eazy-Application" id="application_type" />
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
                        <h3>When is the money required?</h3>
                        
                        <div class="form-group">
                            <div class="funkyradio">
                                <div class="funkyradio-success col-md-6 col-xs-6">
                                    <input type="radio" name="money_required" value="30" id="radio1" required />
                                    <label for="radio1">30 Days</label>
                                </div>
                                <div class="funkyradio-success col-md-6 col-xs-6">
                                    <input type="radio" name="money_required" value="60" id="radio2"  />
                                    <label for="radio2">60 Days</label>
                                </div>
                                <div class="funkyradio-success col-md-6 col-xs-6">
                                    <input type="radio" name="money_required" value="90" id="radio3"  />
                                    <label for="radio3">90 Days</label>
                                </div>
                                <div class="funkyradio-success col-md-6 col-xs-6">
                                    <input type="radio" name="money_required" value="120" id="radio4"  />
                                    <label for="radio4">120 Days</label>
                                </div>
                                <div class="funkyradio-success col-md-6 col-xs-6">
                                    <input type="radio" name="money_required" value="120+" id="radio5"  />
                                    <label for="radio5">120+ Days</label>
                                </div>
                            </div>
                        </div>
                        
                        <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
                    </div>
                </div>
            </div>
            <div class="row setup-content" id="step-2">
                <div class="col-xs-12">
                    <div class="">
                        <h3>Please tell us about yourself.</h3>
                        @php
                        $fullname = [];
                        $fullname = explode(" ",$user->name);
                        $first_name = $fullname[0];
                        $last_name = $fullname[1];
                        if(count($fullname)==2) {$first_name = $fullname[0].' '.$fullname[1];$last_name = $fullname[2];}
                        @endphp
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
                            <label for="birthDate" class="col-sm-3 control-label">Date of Birth</label>
                            <div class="col-sm-9">
                                <input type="date" max="{{date('Y')-18}}-{{date('m-d')}}" id="birthDate" name="birth_date" class="form-control" required>
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
                        <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
                        <button class="btn btn-default prevBtn btn-lg pull-left" type="button" >Previous</button>
                    </div>
                </div>
            </div>
            <div class="row setup-content" id="step-3">
                <div class="col-xs-12">
                    <div class="">
                        <h3>What is your current address?</h3>
                        <div class="form-group">
                            <label for="street_number" class="col-sm-3 control-label">Street Number</label>
                            <div class="col-sm-9">
                                <input type="number" id="street_number" name="street_number" placeholder="Street Number" class="form-control" autofocus required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="unit" class="col-sm-3 control-label">Unit</label>
                            <div class="col-sm-9">
                                <input type="text" id="unit" name="unit" placeholder="Unit" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="street_name" class="col-sm-3 control-label">Street Name</label>
                            <div class="col-sm-9">
                                <input type="text" id="street_name" name="street_name" placeholder="Street Name" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="city" class="col-sm-3 control-label">City </label>
                            <div class="col-sm-9">
                                <input type="text" id="city" name= "city" placeholder="City" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="province" class="col-sm-3 control-label">Province </label>
                            <div class="col-sm-9">
                                <select required="true" class="form-control" id="province" name="province" required>					
                                    <option selected="" value="">Province</option>
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
                            <label for="postal_code" class="col-sm-3 control-label">Postal Code </label>
                            <div class="col-sm-9">
                                <input type="text" id="postal_code" name= "postal_code" placeholder="Postal Code" class="form-control" maxlength="7" required>
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
            <div class="row setup-content" id="step-5">
                <div class="col-xs-12">
                    <div class="">
                        <h3>Please tell us about the co-applicant.</h3>
                        <div class="form-group">
                            <label for="co_firstName" class="col-sm-3 control-label">First Name</label>
                            <div class="col-sm-9">
                                <input type="text" id="co_firstName" name="co_first_name" placeholder="First Name" class="form-control" autofocus required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="co_lastName" class="col-sm-3 control-label">Last Name</label>
                            <div class="col-sm-9">
                                <input type="text" id="co_lastName" name="co_last_name" placeholder="Last Name" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="co_birthDate" class="col-sm-3 control-label">Date of Birth</label>
                            <div class="col-sm-9">
                                <input type="date" max="{{date('Y')-18}}-{{date('m-d')}}" id="co_birthDate" name="co_birth_date" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="co_email" class="col-sm-3 control-label">Email </label>
                            <div class="col-sm-9">
                                <input type="email" id="co_email" name= "co_email" placeholder="Email" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="co_phoneNumber" class="col-sm-3 control-label">Phone number </label>
                            <div class="col-sm-9">
                                <input type="text" id="co_phoneNumber" name="co_phone" placeholder="Phone number" class="form-control" required>
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
                        <h3>Co-Applicant's current address?</h3>
                        <h4><input type="checkbox" id="co_same_as" name="co_same_as" checked> Same as Applicant Address</h4>
                        <div class="form-group">
                            <label for="co_street_number" class="col-sm-3 control-label">Street Number</label>
                            <div class="col-sm-9">
                                <input type="number" id="co_street_number" name="co_street_number" placeholder="Street Number" class="form-control" autofocus required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="co_unit" class="col-sm-3 control-label">Unit</label>
                            <div class="col-sm-9">
                                <input type="text" id="co_unit" name="co_unit" placeholder="Unit" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="co_street_name" class="col-sm-3 control-label">Street Name</label>
                            <div class="col-sm-9">
                                <input type="text" id="co_street_name" name="co_street_name" placeholder="Street Name" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="co_city" class="col-sm-3 control-label">City </label>
                            <div class="col-sm-9">
                                <input type="text" id="co_city" name= "co_city" placeholder="City" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="co_province" class="col-sm-3 control-label">Province </label>
                            <div class="col-sm-9">
                                <select class="form-control" id="co_province" name="co_province" required>					
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
                            <label for="co_postal_code" class="col-sm-3 control-label">Postal Code </label>
                            <div class="col-sm-9">
                                <input type="text" id="co_postal_code" name= "co_postal_code" placeholder="Postal Code" class="form-control" maxlength="7" required>
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
                        <h3>What's your marital status?</h3>
                        <div class="form-group">
                            <div class="funkyradio">
                                <div class="funkyradio-success col-md-6 col-xs-12">
                                    <input type="radio" name="marital_status" value="Single" id="radio8" required />
                                    <label for="radio8">Single</label>
                                </div>
                                <div class="funkyradio-success col-md-6 col-xs-12">
                                    <input type="radio" name="marital_status" value="Married" id="radio9" />
                                    <label for="radio9">Married</label>
                                </div>
                                <div class="funkyradio-success col-md-6 col-xs-12">
                                    <input type="radio" name="marital_status" value="Divorced" id="radio10" />
                                    <label for="radio10">Divorced</label>
                                </div>
                                <div class="funkyradio-success col-md-6 col-xs-12">
                                    <input type="radio" name="marital_status" value="Common Law" id="radio11" />
                                    <label for="radio11">Common Law</label>
                                </div>
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




<form id="login-form" autocomplete="off" action="http://localhost/jindal/admin/login" method="post">
    {{ csrf_field() }} 
    <input type="hidden" id="login_email" name="email" value="ashutosh2801@gmail.com" />
    <input type="hidden" id="login_password" name="password" value="123456111" />
</form>
</body>
</html>
