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
        <link href="http://localhost/jindal/public/css/main.css" rel="stylesheet">
    </head>
<body>
<div class="container">
    <form class="form-horizontal" id="application_form" role="form" onsubmit="return false">
        <img src="//jindalmortgages.ca/wp-content/themes/jm-mortgage/assets/images/logo.png" height="70" />
        <h2><u>Full</u> Application Form</h2>
        <div class="container-max">
            <div class="row setup-content" id="step-1">
                <div class="col-xs-12">
                    <div class="">
                        <h3>Personal Information</h3>
                        
                        <div class="form-group">
                            <label for="applicant_first_name" class="col-sm-6 control-label">First Name</label>
                            <div class="col-sm-6">{{$post['first_name']}}</div>
                        </div>
                        <div class="form-group">
                            <label for="applicant_last_name" class="col-sm-6 control-label">Last Name</label>
                            <div class="col-sm-6">{{$post['last_name']}}</div>
                        </div>
                        <div class="form-group">
                            <label for="applicant_email" class="col-sm-6 control-label">Email</label>
                            <div class="col-sm-6">{{$post['email']}}</div>
                        </div>
                        <div class="form-group">
                            <label for="applicant_phone" class="col-sm-6 control-label">Phone number</label>
                            <div class="col-sm-6">{{$post['mobile']}}</div>
                        </div>
                        <div class="form-group">
                            <label for="applicant_birth_date" class="col-sm-6 control-label">Date of Birth</label>
                            <div class="col-sm-6">{{$post['applicant_birth_date']}}</div>
                        </div>
                        <div class="form-group">
                            <label for="applicant_sin" class="col-sm-6 control-label">SIN </label>
                            <div class="col-sm-6">{{$post['applicant_sin']}}</div>
                        </div>
                        <div class="form-group">
                            <label for="applicant_street_number" class="col-sm-6 control-label">Street Number</label>
                            <div class="col-sm-6">{{$post['applicant_street_number']}}</div>
                        </div>
                        <div class="form-group">
                            <label for="applicant_street_name" class="col-sm-6 control-label">Street Name</label>
                            <div class="col-sm-6">{{$post['applicant_street_name']}}</div>
                        </div>
                        <div class="form-group">
                            <label for="applicant_street_type" class="col-sm-6 control-label">Street Type </label>
                            <div class="col-sm-6">{{$post['applicant_street_type']}}</div>
                        </div>
                        <div class="form-group">
                            <label for="applicant_street_type" class="col-sm-6 control-label">Street Direction </label>
                            <div class="col-sm-6">{{$post['applicant_street_direction']}}</div>
                        </div>
                        <div class="form-group">
                            <label for="applicant_unit_number" class="col-sm-6 control-label">Unit Number</label>
                            <div class="col-sm-6">{{$post['applicant_unit_number']}}</div>
                        </div>
                        <div class="form-group">
                            <label for="applicant_city" class="col-sm-6 control-label">City / Town</label>
                            <div class="col-sm-6">{{$post['applicant_city']}}</div>
                        </div>
                        <div class="form-group">
                            <label for="applicant_province" class="col-sm-6 control-label">Province</label>
                            <div class="col-sm-6">{{$post['applicant_province']}}</div>
                        </div>
                        <div class="form-group">
                            <label for="applicant_postal_code" class="col-sm-6 control-label">Postal Code</label>
                            <div class="col-sm-6">{{$post['applicant_postal_code']}}</div>
                        </div>
                        <div class="form-group">
                            <label for="applicant_residential_status" class="col-sm-6 control-label">Residential Status</label>
                            <div class="col-sm-6">{{$post['applicant_residential_status']}}</div>
                        </div>
                        <div class="form-group">
                            <label for="applicant_time_at_residence_year" class="col-sm-6 control-label">Time At Residence</label>
                            <div class="col-sm-6">
                                {{$post['applicant_time_at_residence_year']}} Year(s)
                                {{$post['applicant_time_at_residence_month']}} Month(s)
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="applicant_preferre_contact_method" class="col-sm-6 control-label">Preferred Contact Method </label>
                            <div class="col-sm-6">{{$post['applicant_preferre_contact_method']}}</div>
                        </div>
                        <div class="form-group">
                            <label for="applicant_marital_status" class="col-sm-6 control-label">Marital Status </label>
                            <div class="col-sm-6">{{$post['applicant_marital_status']}}</div>
                        </div>
                        <div class="form-group">
                            <label for="applicant_langauge_preference" class="col-sm-6 control-label">Langugage Preference </label>
                            <div class="col-sm-6">{{$post['applicant_langauge_preference']}}</div>
                        </div>
                        <div class="form-group">
                            <label for="applicant_required_money" class="col-sm-6 control-label">When do you need the money? </label>
                            <div class="col-sm-6">{{$post['applicant_required_money']}}</div>
                        </div>                        
                    </div>
                </div>
            </div>
            <div class="row setup-content" id="step-2">
                <div class="col-xs-12">
                    <div class="">
                        <h3>Applicant - Previous Address</h3>

                        <div class="form-group">
                            <label for="applicant_previous_street_number" class="col-sm-6 control-label">Street Number</label>
                            <div class="col-sm-6">{{$post['applicant_previous_street_number']}}</div>
                        </div>
                        <div class="form-group">
                            <label for="applicant_previous_street_name" class="col-sm-6 control-label">Street Name</label>
                            <div class="col-sm-6">{{$post['applicant_previous_street_name']}}</div>
                        </div>
                        <div class="form-group">
                            <label for="applicant_previous_street_type" class="col-sm-6 control-label">Street Type </label>
                            <div class="col-sm-6">{{$post['applicant_previous_street_type']}}</div>
                        </div>
                        <div class="form-group">
                            <label for="applicant_previous_street_type" class="col-sm-6 control-label">Street Direction </label>
                            <div class="col-sm-6">{{$post['applicant_previous_street_direction']}}</div>
                        </div>
                        <div class="form-group">
                            <label for="applicant_previous_unit_number" class="col-sm-6 control-label">Unit Number</label>
                            <div class="col-sm-6">{{$post['applicant_previous_unit_number']}}</div>
                        </div>
                        <div class="form-group">
                            <label for="applicant_previous_city" class="col-sm-6 control-label">City / Town</label>
                            <div class="col-sm-6">{{$post['applicant_previous_city']}}</div>
                        </div>
                        <div class="form-group">
                            <label for="applicant_previous_province" class="col-sm-6 control-label">Province</label>
                            <div class="col-sm-6">{{$post['applicant_previous_province']}}</div>
                        </div>
                        <div class="form-group">
                            <label for="applicant_previous_postal_code" class="col-sm-6 control-label">Postal Code</label>
                            <div class="col-sm-6">{{$post['applicant_previous_postal_code']}}</div>
                        </div>
                        <div class="form-group">
                            <label for="applicant_previous_residential_status" class="col-sm-6 control-label">Residential Status</label>
                            <div class="col-sm-6">{{$post['applicant_previous_residential_status']}}</div>
                        </div>
                        <div class="form-group">
                            <label for="applicant_previous_time_at_residence_year" class="col-sm-6 control-label">Time At Residence</label>
                            <div class="col-sm-6">
                                {{$post['applicant_previous_time_at_residence_year']}} Year(s)
                                {{$post['applicant_previous_time_at_residence_month']}} Month(s)
                            </div>
                        </div>                     
                    </div>
                </div>
            </div>
            <div class="row setup-content" id="step-3">
                <div class="col-xs-12">
                    <div class="">
                        <h3>Is there a co-applicant?</h3>
                        <div class="form-group">
                            {{$post['is_co_applicant']}}
                        </div>
                    </div>

                </div>
            </div>
            <div class="row setup-content" id="step-4">
                <div class="col-xs-12">
                    <div class="">
                        <h3>Co-Applicant Information</h3>
                        
                        <div class="form-group">
                            <label for="co_applicant_first_name" class="col-sm-6 control-label">First Name</label>
                            <div class="col-sm-6">{{$post['co_applicant_first_name']}}</div>
                        </div>
                        <div class="form-group">
                            <label for="co_applicant_last_name" class="col-sm-6 control-label">Last Name</label>
                            <div class="col-sm-6">{{$post['co_applicant_last_name']}}</div>
                        </div>
                        <div class="form-group">
                            <label for="co_applicant_email" class="col-sm-6 control-label">Email</label>
                            <div class="col-sm-6">{{$post['co_applicant_email']}}</div>
                        </div>
                        <div class="form-group">
                            <label for="co_applicant_phone" class="col-sm-6 control-label">Phone number</label>
                            <div class="col-sm-6">{{$post['co_applicant_phone']}}</div>
                        </div>
                        <div class="form-group">
                            <label for="co_applicant_birth_date" class="col-sm-6 control-label">Date of Birth</label>
                            <div class="col-sm-6">{{$post['co_applicant_birth_date']}}</div>
                        </div>
                        <div class="form-group">
                            <label for="co_applicant_sin" class="col-sm-6 control-label">SIN </label>
                            <div class="col-sm-6">{{$post['co_applicant_sin']}}</div>
                        </div>
                        <div class="form-group">
                            <label for="co_applicant_street_number" class="col-sm-6 control-label">Street Number</label>
                            <div class="col-sm-6">{{$post['co_applicant_street_number']}}</div>
                        </div>
                        <div class="form-group">
                            <label for="co_applicant_street_name" class="col-sm-6 control-label">Street Name</label>
                            <div class="col-sm-6">{{$post['co_applicant_street_name']}}</div>
                        </div>
                        <div class="form-group">
                            <label for="co_applicant_street_type" class="col-sm-6 control-label">Street Type </label>
                            <div class="col-sm-6">{{$post['co_applicant_street_type']}}</div>
                        </div>
                        <div class="form-group">
                            <label for="co_applicant_street_direction" class="col-sm-6 control-label">Street Direction </label>
                            <div class="col-sm-6">{{$post['co_applicant_street_direction']}}</div>
                        </div>
                        <div class="form-group">
                            <label for="co_applicant_unit_number" class="col-sm-6 control-label">Unit Number</label>
                            <div class="col-sm-6">{{$post['co_applicant_unit_number']}}</div>
                        </div>
                        <div class="form-group">
                            <label for="co_applicant_city" class="col-sm-6 control-label">City / Town</label>
                            <div class="col-sm-6">{{$post['co_applicant_city']}}</div>
                        </div>
                        <div class="form-group">
                            <label for="co_applicant_province" class="col-sm-6 control-label">Province</label>
                            <div class="col-sm-6">{{$post['co_applicant_province']}}</div>
                        </div>
                        <div class="form-group">
                            <label for="co_applicant_postal_code" class="col-sm-6 control-label">Postal Code</label>
                            <div class="col-sm-6">{{$post['co_applicant_postal_code']}}</div>
                        </div>
                        <div class="form-group">
                            <label for="co_applicant_residential_status" class="col-sm-6 control-label">Residential Status </label>
                            <div class="col-sm-6">{{$post['co_applicant_residential_status']}}</div>
                        </div>
                        <div class="form-group">
                            <label for="co_applicant_time_at_residence_year" class="col-sm-6 control-label">Time At Residence</label>
                            <div class="col-sm-6">
                                {{$post['co_applicant_time_at_residence_year']}} Year(s)
                                {{$post['co_applicant_time_at_residence_month']}} Month(s)
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="co_applicant_preferre_contact_method" class="col-sm-6 control-label">Preferred Contact Method </label>
                            <div class="col-sm-6">{{$post['co_applicant_preferre_contact_method']}}</div>
                        </div>
                        <div class="form-group">
                            <label for="co_applicant_marital_status" class="col-sm-6 control-label">Marital Status </label>
                            <div class="col-sm-6">{{$post['co_applicant_marital_status']}}</div>
                        </div>                        
                    </div>
                </div>
            </div>
            <div class="row setup-content" id="step-5">
                <div class="col-xs-12">
                    <div class="">
                        <h3>Co-applicant - Previous Address</h3>
                        <div class="form-group">
                            <label for="co_applicant_previous_street_number" class="col-sm-6 control-label">Street Number</label>
                            <div class="col-sm-6">{{$post['co_applicant_previous_street_number']}}</div>
                        </div>
                        <div class="form-group">
                            <label for="co_applicant_previous_street_name" class="col-sm-6 control-label">Street Name</label>
                            <div class="col-sm-6">{{$post['co_applicant_previous_street_name']}}</div>
                        </div>
                        <div class="form-group">
                            <label for="co_applicant_previous_street_type" class="col-sm-6 control-label">Street Type </label>
                            <div class="col-sm-6">{{$post['co_applicant_previous_street_type']}}</div>
                        </div>
                        <div class="form-group">
                            <label for="co_applicant_previous_street_type" class="col-sm-6 control-label">Street Direction </label>
                            <div class="col-sm-6">{{$post['co_applicant_previous_street_direction']}}</div>
                        </div>
                        <div class="form-group">
                            <label for="unit_number" class="col-sm-6 control-label">Unit Number</label>
                            <div class="col-sm-6">{{$post['unit_number']}}</div>
                        </div>
                        <div class="form-group">
                            <label for="co_applicant_previous_city" class="col-sm-6 control-label">City / Town</label>
                            <div class="col-sm-6">{{$post['co_applicant_previous_city']}}</div>
                        </div>
                        <div class="form-group">
                            <label for="co_applicant_previous_province" class="col-sm-6 control-label">Province</label>
                            <div class="col-sm-6">{{$post['co_applicant_previous_province']}}</div>
                        </div>
                        <div class="form-group">
                            <label for="co_applicant_previous_postal_code" class="col-sm-6 control-label">Postal Code</label>
                            <div class="col-sm-6">{{$post['co_applicant_previous_postal_code']}}</div>
                        </div>
                        <div class="form-group">
                            <label for="co_applicant_previous_residential_status" class="col-sm-6 control-label">Residential Status</label>
                            <div class="col-sm-6">{{$post['co_applicant_previous_residential_status']}}</div>
                        </div>
                        <div class="form-group">
                            <label for="co_applicant_previous_time_at_residence_year" class="col-sm-6 control-label">Time At Residence</label>
                            <div class="col-sm-6">
                                {{$post['co_applicant_previous_time_at_residence_year']}} Year(s)
                                {{$post['co_applicant_previous_time_at_residence_month']}} Month(s)
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row setup-content" id="step-6">
                <div class="col-xs-12">
                    <div class="">
                        <h3>Employment Information</h3>
                        <h4>Applicant</h4>
                        <div class="form-group">
                            <label for="applicant_self_employed" class="col-sm-6 control-label">Self-Employed</label>
                            <div class="col-sm-6">{{$post['applicant_self_employed']}}</div>
                        </div>
                        <div class="form-group">
                            <label for="applicant_employment_job_title" class="col-sm-6 control-label">Job Title</label>
                            <div class="col-sm-6">{{$post['applicant_employment_job_title']}}</div>
                        </div>
                        <div class="form-group">
                            <label for="applicant_employment_status" class="col-sm-6 control-label">Employment Status</label>
                            <div class="col-sm-6">{{$post['applicant_employment_status']}}</div>
                        </div>
                        <div class="form-group">
                            <label for="applicant_employment_occupation_type" class="col-sm-6 control-label">Occupation Type</label>
                            <div class="col-sm-6">{{$post['applicant_employment_occupation_type']}}</div>
                        </div>
                        <div class="form-group">
                            <label for="applicant_employment_employer_name" class="col-sm-6 control-label">Name of Employer</label>
                            <div class="col-sm-6">{{$post['applicant_employment_employer_name']}}</div>
                        </div>
                        <div class="form-group">
                            <label for="applicant_employment_work_phone" class="col-sm-6 control-label">Work Phone</label>
                            <div class="col-sm-6">{{$post['applicant_employment_work_phone']}}</div>
                        </div>
                        <div class="form-group">
                            <label for="applicant_employment_income_type" class="col-sm-6 control-label">Income Type</label>
                            <div class="col-sm-6">{{$post['applicant_employment_income_type']}}</div>
                        </div>
                        <div class="form-group">
                            <label for="applicant_employment_annual_income" class="col-sm-6 control-label">Annual Income</label>
                            <div class="col-sm-6">{{$post['applicant_employment_annual_income']}}</div>
                        </div>
                        <div class="form-group">
                            <label for="applicant_employment_industry_sector" class="col-sm-6 control-label">Industry Sector</label>
                            <div class="col-sm-6">{{$post['applican_employmentt_industry_sector']}}</div>
                        </div>
                        <div class="form-group">
                            <label for="applicant_employment_address" class="col-sm-6 control-label">Address</label>
                            <div class="col-sm-6">{{$post['applicant_employment_address']}}</div>
                        </div>
                        <div class="form-group">
                            <label for="applicant_employment_city" class="col-sm-6 control-label">City / Town</label>
                            <div class="col-sm-6">{{$post['applicant_employment_city']}}</div>
                        </div>
                        <div class="form-group">
                            <label for="applicant_employment_province" class="col-sm-6 control-label">Province</label>
                            <div class="col-sm-6">{{$post['applicant_employment_province']}}</div>
                        </div>
                        <div class="form-group">
                            <label for="applicant_employment_postal_code" class="col-sm-6 control-label">Postal Code</label>
                            <div class="col-sm-6">{{$post['applicant_employment_postal_code']}}</div>
                        </div>
                        <div class="form-group">
                            <label for="applicant_employment_time_at_job_year" class="col-sm-6 control-label">Time At Job</label>
                            <div class="col-sm-6">
                                {{$post['applicant_employment_time_at_job_year']}} Year(s)
                                {{$post['applicant_employment_time_at_job_month']}} Month(s)
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row setup-content" id="step-7">
                <div class="col-xs-12">
                    <div class="">
                        <h3>Applicant - Previous Employment Information</h3>
                        <div class="form-group">
                            <label for="applicant_previous_self_employed" class="col-sm-6 control-label">Self-Employed</label>
                            <div class="col-sm-6">{{$post['applicant_previous_self_employed']}}</div>
                        </div>
                        <div class="form-group">
                            <label for="applicant_previous_employment_job_title" class="col-sm-6 control-label">Job Title</label>
                            <div class="col-sm-6">{{$post['applicant_previous_employment_job_title']}}</div>
                        </div>
                        <div class="form-group">
                            <label for="applicant_previous_employment_status" class="col-sm-6 control-label">Employment Status</label>
                            <div class="col-sm-6">{{$post['applicant_previous_employment_status']}}</div>
                        </div>
                        <div class="form-group">
                            <label for="applicant_previous_employment_occupation_type" class="col-sm-6 control-label">Occupation Type</label>
                            <div class="col-sm-6">{{$post['applicant_previous_employment_occupation_type']}}</div>
                        </div>
                        <div class="form-group">
                            <label for="applicant_previous_employment_employer_name" class="col-sm-6 control-label">Name of Employer</label>
                            <div class="col-sm-6">{{$post['applicant_previous_employment_employer_name']}}</div>
                        </div>
                        <div class="form-group">
                            <label for="applicant_previous_employment_work_phone" class="col-sm-6 control-label">Work Phone</label>
                            <div class="col-sm-6">{{$post['applicant_previous_employment_work_phone']}}</div>
                        </div>
                        <div class="form-group">
                            <label for="applicant_previous_employment_income_type" class="col-sm-6 control-label">Income Type</label>
                            <div class="col-sm-6">{{$post['applicant_previous_employment_income_type']}}</div>
                        </div>
                        <div class="form-group">
                            <label for="applicant_previous_employment_annual_income" class="col-sm-6 control-label">Annual Income</label>
                            <div class="col-sm-6">{{$post['applicant_previous_employment_annual_income']}}</div>
                        </div>
                        <div class="form-group">
                            <label for="applicant_previous_employment_industry_sector" class="col-sm-6 control-label">Industry Sector</label>
                            <div class="col-sm-6">{{$post['applicant_previous_employment_industry_sector']}}</div>
                        </div>
                        <div class="form-group">
                            <label for="applicant_previous_employment_address" class="col-sm-6 control-label">Address</label>
                            <div class="col-sm-6">{{$post['applicant_previous_employment_address']}}</div>
                        </div>
                        <div class="form-group">
                            <label for="applicant_previous_employment_city" class="col-sm-6 control-label">City / Town</label>
                            <div class="col-sm-6">{{$post['applicant_previous_employment_city']}}</div>
                        </div>
                        <div class="form-group">
                            <label for="applicant_previous_employment_province" class="col-sm-6 control-label">Province</label>
                            <div class="col-sm-6">{{$post['applicant_previous_employment_province']}}</div>
                        </div>
                        <div class="form-group">
                            <label for="applicant_previous_employment_postal_code" class="col-sm-6 control-label">Postal Code</label>
                            <div class="col-sm-6">{{$post['applicant_previous_employment_postal_code']}}</div>
                        </div>
                        <div class="form-group">
                            <label for="applicant_previous_employment_time_at_job_year" class="col-sm-6 control-label">Time At Job</label>
                            <div class="col-sm-6">
                                {{$post['applicant_previous_employment_time_at_job_year']}} Year(s)
                                {{$post['applicant_previous_employment_time_at_job_month']}} Month(s)
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row setup-content" id="step-8">
                <div class="col-xs-12">
                    <div class="">
                        <h3>Employment Information</h3>
                        <h4>Co-Applicant</h4>
                        <div class="form-group">
                            <label for="co_applicant_employment_self_employed" class="col-sm-6 control-label">Self-Employed</label>
                            <div class="col-sm-6">{{$post['co_applicant_employment_self_employed']}}</div>
                        </div>
                        <div class="form-group">
                            <label for="co_applicant_employment_job_title" class="col-sm-6 control-label">Job Title</label>
                            <div class="col-sm-6">{{$post['co_applicant_employment_job_title']}}</div>
                        </div>
                        <div class="form-group">
                            <label for="co_applicant_employment_status" class="col-sm-6 control-label">Employment Status</label>
                            <div class="col-sm-6">{{$post['co_applicant_employment_status']}}</div>
                        </div>
                        <div class="form-group">
                            <label for="co_applicant_employment_employer_name" class="col-sm-6 control-label">Name of Employer</label>
                            <div class="col-sm-6">{{$post['co_applicant_employment_employer_name']}}</div>
                        </div>
                        <div class="form-group">
                            <label for="co_applicant_employment_income_type" class="col-sm-6 control-label">Income Type</label>
                            <div class="col-sm-6">{{$post['co_applicant_employment_income_type']}}</div>
                        </div>
                        <div class="form-group">
                            <label for="co_applicant_employment_annual_income" class="col-sm-6 control-label">Annual Income</label>
                            <div class="col-sm-6">{{$post['co_applicant_employment_annual_income']}}</div>
                        </div>
                        <div class="form-group">
                            <label for="co_applicant_employment_industry_sector" class="col-sm-6 control-label">Industry Sector</label>
                            <div class="col-sm-6">{{$post['co_applicant_employment_industry_sector']}}</div>
                        </div>
                        <div class="form-group">
                            <label for="co_applicant_employment_address" class="col-sm-6 control-label">Address</label>
                            <div class="col-sm-6">{{$post['co_applicant_employment_address']}}</div>
                        </div>
                        <div class="form-group">
                            <label for="co_applicant_employment_city" class="col-sm-6 control-label">City / Town</label>
                            <div class="col-sm-6">{{$post['co_applicant_employment_city']}}</div>
                        </div>
                        <div class="form-group">
                            <label for="co_applicant_employment_province" class="col-sm-6 control-label">Province</label>
                            <div class="col-sm-6">{{$post['co_applicant_employment_province']}}</div>
                        </div>
                        <div class="form-group">
                            <label for="co_applicant_employment_postal_code" class="col-sm-6 control-label">Postal Code</label>
                            <div class="col-sm-6">{{$post['co_applicant_employment_postal_code']}}</div>
                        </div>
                        <div class="form-group">
                            <label for="co_applicant_employment_time_at_job_year" class="col-sm-6 control-label">Time At Job</label>
                            <div class="col-sm-6">
                                {{$post['co_applicant_employment_time_at_job_year']}} Year(s)
                                {{$post['co_applicant_employment_time_at_job_month']}} Month(s)
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row setup-content" id="step-9">
                <div class="col-xs-12">
                    <div class="">
                        <h3>Co-Applicant - Previous Employment Information</h3>
                        <div class="form-group">
                            <label for="co_applicant_previous_employment_self_employed" class="col-sm-6 control-label">Self-Employed</label>
                            <div class="col-sm-6">{{$post['co_applicant_previous_employment_self_employed']}}</div>
                        </div>
                        <div class="form-group">
                            <label for="co_applicant_previous_employment_job_title" class="col-sm-6 control-label">Job Title</label>
                            <div class="col-sm-6">{{$post['co_applicant_previous_employment_job_title']}}</div>
                        </div>
                        <div class="form-group">
                            <label for="co_applicant_previous_employment_status" class="col-sm-6 control-label">Employment Status</label>
                            <div class="col-sm-6">{{$post['co_applicant_previous_employment_status']}}</div>
                        </div>
                        <div class="form-group">
                            <label for="co_applicant_previous_employment_employer_name" class="col-sm-6 control-label">Name of Employer</label>
                            <div class="col-sm-6">{{$post['co_applicant_previous_employment_employer_name']}}</div>
                        </div>
                        <div class="form-group">
                            <label for="co_applicant_previous_employment_income_type" class="col-sm-6 control-label">Income Type</label>
                            <div class="col-sm-6">{{$post['co_applicant_previous_employment_income_type']}}</div>
                        </div>
                        <div class="form-group">
                            <label for="co_applicant_previous_employment_annual_income" class="col-sm-6 control-label">Annual Income</label>
                            <div class="col-sm-6">{{$post['co_applicant_previous_employment_annual_income']}}</div>
                        </div>
                        <div class="form-group">
                            <label for="co_applicant_previous_employment_industry_sector" class="col-sm-6 control-label">Industry Sector</label>
                            <div class="col-sm-6">{{$post['co_applicant_previous_employment_industry_sector']}}</div>
                        </div>
                        <div class="form-group">
                            <label for="co_applicant_previous_employment_address" class="col-sm-6 control-label">Address</label>
                            <div class="col-sm-6">{{$post['co_applicant_previous_employment_address']}}</div>
                        </div>
                        <div class="form-group">
                            <label for="co_applicant_previous_employment_city" class="col-sm-6 control-label">City / Town</label>
                            <div class="col-sm-6">{{$post['co_applicant_previous_employment_city']}}</div>
                        </div>
                        <div class="form-group">
                            <label for="co_applicant_previous_employment_province" class="col-sm-6 control-label">Province</label>
                            <div class="col-sm-6">{{$post['co_applicant_previous_employment_province']}}</div>
                        </div>
                        <div class="form-group">
                            <label for="co_applicant_previous_employment_postal_code" class="col-sm-6 control-label">Postal Code</label>
                            <div class="col-sm-6">{{$post['co_applicant_previous_employment_postal_code']}}</div>
                        </div>
                        <div class="form-group">
                            <label for="co_applicant_previous_employment_time_at_job_year" class="col-sm-6 control-label">Time At Job</label>
                            <div class="col-sm-6">
                                {{$post['co_applicant_previous_employment_time_at_job_year']}} Year(s)
                                {{$post['co_applicant_previous_employment_time_at_job_month']}} Month(s)
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @if ( is_array($post['Property']['property_street_number']) )            
            <div class="row setup-content" id="step-10">
                <div class="col-xs-12">
                    @php
                        $count = count( $post['Property']['property_street_number'] );
                        @endphp
                    @for($i=0; $i<$count; $i++) 
                    <div class="property-information">
                        <h3>Property Information</h3>
                        <div class="form-group">
                            <label for="property_street_number" class="col-sm-6 control-label">Street Number</label>
                            <div class="col-sm-6">{{$post['Property']['property_street_number'][$i]}}</div>
                        </div>
                        <div class="form-group">
                            <label for="property_street_name" class="col-sm-6 control-label">Street Name</label>
                            <div class="col-sm-6">{{$post['Property']['property_street_name'][$i]}}</div>
                        </div>
                        <div class="form-group">
                            <label for="property_street_type" class="col-sm-6 control-label">Street Type </label>
                            <div class="col-sm-6">{{$post['Property']['property_street_type'][$i]}}</div>
                        </div>
                        <div class="form-group">
                            <label for="property_street_type" class="col-sm-6 control-label">Street Direction </label>
                            <div class="col-sm-6">{{$post['Property']['property_street_direction'][$i]}}</div>
                        </div>
                        <div class="form-group">
                            <label for="property_unit_number" class="col-sm-6 control-label">Unit Number</label>
                            <div class="col-sm-6">{{$post['Property']['property_unit_number'][$i]}}</div>
                        </div>
                        <div class="form-group">
                            <label for="property_city" class="col-sm-6 control-label">City / Town</label>
                            <div class="col-sm-6">{{$post['Property']['property_city'][$i]}}</div>
                        </div>
                        <div class="form-group">
                            <label for="property_province" class="col-sm-6 control-label">Province</label>
                            <div class="col-sm-6">{{$post['Property']['property_province'][$i]}}</div>
                        </div>
                        <div class="form-group">
                            <label for="property_postal_code" class="col-sm-6 control-label">Postal Code</label>
                            <div class="col-sm-6">{{$post['Property']['property_postal_code'][$i]}}</div>
                        </div>
                        <div class="form-group">
                            <label for="property_construction_type" class="col-sm-6 control-label">Construction Type </label>
                            <div class="col-sm-6">{{$post['Property']['property_construction_type'][$i]}}</div>
                        </div>
                        <div class="form-group">
                            <label for="property_structure_age" class="col-sm-6 control-label">Structure Age </label>
                            <div class="col-sm-6">{{$post['Property']['property_structure_age'][$i]}}</div>
                        </div>
                        <div class="form-group">
                            <label for="property_occupancy_type" class="col-sm-6 control-label">Occupancy Type </label>
                            <div class="col-sm-6">{{$post['Property']['property_occupancy_type'][$i]}}</div>
                        </div>
                        <div class="form-group">
                            <label for="property_tenure_type" class="col-sm-6 control-label">Tenure Type </label>
                            <div class="col-sm-6">{{$post['Property']['property_tenure_type'][$i]}}</div>
                        </div>
                        <div class="form-group">
                            <label for="property_heat_type" class="col-sm-6 control-label">Heat Type </label>
                            <div class="col-sm-6">{{$post['Property']['property_heat_type'][$i]}}</div>
                        </div>
                        <div class="form-group">
                            <label for="property_estimated_value" class="col-sm-6 control-label">Estimated Value</label>
                            <div class="col-sm-6">{{$post['Property']['property_estimated_value'][$i]}}</div>
                        </div>
                    </div>
                    @endfor
                </div>
            </div>
            @endif

            @if ( is_array($post['Mortgage']['mortgage_closing_date']) )      
            <div class="row setup-content" id="step-11">
                <div class="col-xs-12">
                    @php
                    $count = count( $post['Mortgage']['mortgage_closing_date'] );
                    @endphp
                    @for($i=0; $i<$count; $i++)
                    <div class="mortgage-information">
                        <h3>Mortgage Information</h3>
                        <div class="form-group">
                            <label for="mortgage_closing_date" class="col-sm-6 control-label">Closing Date</label>
                            <div class="col-sm-6">{{$post['Mortgage']['mortgage_closing_date'][$i]}}</div>
                        </div>
                        <div class="form-group">
                            <label for="mortgage_amortization_year" class="col-sm-6 control-label">Amortization</label>
                            <div class="col-md-9">
                                {{$post['Mortgage']['mortgage_amortization_year'][$i]}}</div>
                        </div>
                        <div class="form-group">
                            <label for="mortgage_payment_frequency" class="col-sm-6 control-label">Payment Frequency </label>
                            <div class="col-sm-6">{{$post['Mortgage']['mortgage_payment_frequency'][$i]}}</div>
                        </div>
                        <div class="form-group">
                            <label for="mortgage_term" class="col-sm-6 control-label">Term </label>
                            <div class="col-sm-6">{{$post['Mortgage']['mortgage_term'][$i]}}</div>
                        </div>
                        <div class="form-group">
                            <label for="mortgage_amount" class="col-sm-6 control-label">Mortgage Amount</label>
                            <div class="col-sm-6">{{$post['Mortgage']['mortgage_amount'][$i]}}</div>
                        </div>
                        <div class="form-group">
                            <label for="mortgage_product_type" class="col-sm-6 control-label">Product Type </label>
                            <div class="col-sm-6">{{$post['Mortgage']['mortgage_product_type'][$i]}}</div>
                        </div>
                        <div class="form-group">
                            <label for="mortgage_down_payment" class="col-sm-6 control-label">Down Payment</label>
                            <div class="col-sm-6">{{$post['Mortgage']['mortgage_down_payment'][$i]}}</div>
                        </div>
                        <div class="form-group">
                            <label for="mortgage_first_time_buyer" class="col-sm-6 control-label">First-Time Buyer</label>
                            <div class="col-sm-6">{{$post['Mortgage']['mortgage_first_time_buyer'][$i]}}</div>
                        </div>
                        <div class="form-group">
                            <label for="mortgage_purpose" class="col-sm-6 control-label">Purpose </label>
                            <div class="col-sm-6">{{$post['Mortgage']['mortgage_purpose'][$i]}}</div>
                        </div>
                    </div> 
                    @endfor
                </div>
            </div>
            @endif

            <div class="row setup-content" id="step-12">
                <div class="col-xs-12">
                    <div class="">
                        <h3>Assets</h3>
                        <div class="form-group">
                            <label for="vehicles_asset" class="col-sm-6 control-label">Vehicles</label>
                            <div class="col-sm-6">{{$post['vehicles_asset']}}</div>
                        </div>
                        <div class="form-group">
                            <label for="cash_amount_asset" class="col-sm-6 control-label">Cash Amount</label>
                            <div class="col-sm-6">{{$post['cash_amount_asset']}}</div>
                        </div>
                        <div class="form-group">
                            <label for="real_estate_asset" class="col-sm-6 control-label">Real Estate</label>
                            <div class="col-sm-6">{{$post['real_estate_asset']}}</div>
                        </div>
                        <div class="form-group">
                            <label for="RRSP_asset" class="col-sm-6 control-label">RRSP</label>
                            <div class="col-sm-6">{{$post['RRSP_asset']}}</div>
                        </div>
                        <div class="form-group">
                            <label for="stocks_asset" class="col-sm-6 control-label">Stocks</label>
                            <div class="col-sm-6">{{$post['stocks_asset']}}</div>
                        </div>
                        <div class="form-group">
                            <label for="other_asset" class="col-sm-6 control-label">Other</label>
                            <div class="col-sm-6">{{$post['other_asset']}}</div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="row setup-content" id="step-13">
                <div class="col-xs-12">
                    <div class="">
                        <h3>Liabilities</h3>
                        <div class="form-group">
                            <label for="credit_liabilities" class="col-sm-6 control-label">Credit</label>
                            <div class="col-sm-6">{{$post['credit_liabilities']}}</div>
                        </div>
                        <div class="form-group">
                            <label for="loans_liabilities" class="col-sm-6 control-label">Loans</label>
                            <div class="col-sm-6">{{$post['loans_liabilities']}}</div>
                        </div>
                        <div class="form-group">
                            <label for="mortgage_liabilities" class="col-sm-6 control-label">Mortgage</label>
                            <div class="col-sm-6">{{$post['mortgage_liabilities']}}</div>
                        </div>
                        <div class="form-group">
                            <label for="other_liabilities" class="col-sm-6 control-label">Other</label>
                            <div class="col-sm-6">{{$post['other_liabilities']}}</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row setup-content" id="step-14">
                <div class="col-xs-12">
                    <div class="message">
                        <h3>Consent and Privacy Agreement</h3>

                        <div class="form-group">
                            <div class="read-more">
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
                                <p>I/We agree that a photocopy or electronic copy of this Consent and Privacy Agreement has the same value as the original one.</p>   </div>
                        </div>

                        <div class="form-group">
                            <div class="funkyradio1" style="margin: 0 15px;">
                                <div class="funkyradio-success ">
                                    {{$post['privacy']}}
                                    <label for="privacy">I have read and understand the Privacy/Suitability/consent/Anti-Spam Agreement.</label>
                                </div>
                                <div class="funkyradio-success">
                                    {{$post['understand_canada_anti_spam']}}
                                    <label for="understand_canada_anti_spam">I have read and understand the Canada Anti-Spam Legislation section and consent to the communications.</label>
                                </div></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
</body>
</html>
