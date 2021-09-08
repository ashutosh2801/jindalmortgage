<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\User;
use DB;
use App\Application;
use Twilio;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function EazyApplication($token='') 
    {
        //echo $token; exit;
        //Twilio::message('+918707788610', 'Hi, this is test');

        if(!empty($token)) {
            $user = DB::table('allow_applications')->where('token',$token)->first();
            if($user)
            return view('eazy-application',compact(['user']) );
        }
        
        return view('404');
    }

    public function FullApplication($token='') 
    {
        //return view('full-application');

        if(!empty($token)) {
            $user = DB::table('allow_applications')
            ->select('cms_users.*')
            ->join('cms_users', 'cms_users.id', '=','allow_applications.user_id')
            ->where('allow_applications.token',$token)
            ->first();

            if($user)
            return view('full-application',compact(['user']) );
        }
        
        return view('404');
    }

    public function ApplyEazyForm(Request $request) 
    {
        $user = User::where('token',$request->token)->first();
        if($user) {
            $validator = \Validator::make($request->all(), [
                'money_required'         => 'required',
                'first_name'    => 'required',
                'last_name'     => 'required',
                'email'         => 'required|email',
                'birth_date'    => 'required',
                'phone'         => 'required',
                'street_number' => 'required',
                'unit'          => 'required',
                'street_name'   => 'required',
                'city'          => 'required',
                'province'      => 'required',
                'postal_code'   => 'required',

                'is_co_applicant'   => 'required',
                'co_first_name'    => 'required_if:co_applicant,==,Yes',
                'co_last_name'     => 'required_if:co_applicant,==,Yes',
                'co_birth_date'    => 'required_if:co_applicant,==,Yes',
                'co_email'         => 'required_if:co_applicant,==,Yes',
                'co_phone'         => 'required_if:co_applicant,==,Yes',
                'co_street_number' => 'required_if:co_applicant,==,Yes',
                'co_unit'          => 'required_if:co_applicant,==,Yes',
                'co_street_name'   => 'required_if:co_applicant,==,Yes',
                'co_city'          => 'required_if:co_applicant,==,Yes',
                'co_province'      => 'required_if:co_applicant,==,Yes',
                'co_postal_code'   => 'required_if:co_applicant,==,Yes',

                'marital_status'   => 'required',
                'contact_credit_agencies'   => 'required',
                'property_street_number' => 'required',
                'property_unit'          => 'required',
                'property_street_name'   => 'required',
                'property_city'          => 'required',
                'property_province'      => 'required',
                'property_postal_code'   => 'required',

                'property_value'   => 'required',
                'borrow_amount'   => 'required',
                'income_type'   => 'required',
            ]);
            
            if ($validator->fails())
            {
                return response()->json(['errors'=>$validator->errors()->all()]);
            }
            else 
            {
                extract($_POST);
                //$user = User::where('token',$token)->first();
                $json = json_encode($_POST);
                $app = new Application;
                $app->user_id       = $user->id;
                $app->application_type_id  = $user->application_id;
                $app->application_values   = $json;
                $app->updated_at    = date('Y-m-d H:i:s');
                $app->created_at    = date('Y-m-d H:i:s');
                $app->save();
                //return response()->json(['status'=>'Success','message'=>$json]);

                $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
                $password =  substr(str_shuffle($chars),0,8);
                
                User::where('token',$request->token)->update(['password'=>Hash::make($password)]);

                $template = DB::table('cms_email_templates')->Where('slug', 'successful-message')->first();

                $content = str_replace('[NAME]',$user->name,$template->content);
                $content = str_replace('[EMAIL]', $user->email, $content);
                $content = str_replace('[PASSWORD]', $password, $content);

                $data = [
                    'email' 	=> $user->email,
                    'subject' 	=> $template->subject,
                    'content' 	=> $content
                ];

                $mail = Mail::send('emails/invite-client', $data, function($message) use ($data) {
                    $message->to($data['email'])->subject($data['subject']);
                });

                $message = str_replace('[NAME]', $user->name, $template->message);
                $message = str_replace('[EMAIL]', $user->email, $message);
                $message = str_replace('[PASSWORD]', $password, $message);

                Twilio::message($user->mobile, $message);

                return response()->json(['status'=>'Success','message'=>'Your form has been successfully submitted. We have sent email and password to your registerd email. You will redicecting to login page in 5seconds. <meta http-equiv="refresh" content="6;url=https://jindalmortgages.ca/app/admin" />']); 
            }
        }
        else {
            return response()->json(['status'=>'Error','message'=>'Invalid token! Please try later.']);
        }
    }

    public function ApplyFullForm(Request $request) 
    {
        $user = User::where('token',$request->token)->first();
        if($user) {
            $validator = \Validator::make($request->all(), [
                'applicant_first_name'          => 'required',
                'applicant_last_name'           => 'required',
                'applicant_email'               => 'required|email',
                'applicant_phone'               => 'required',
                'applicant_birth_date'          => 'required',
                'applicant_street_number'       => 'required',
                'applicant_street_name'         => 'required',
                'applicant_city'                => 'required',
                'applicant_province'            => 'required',
                'applicant_postal_code'         => 'required',
                'applicant_residential_status'  => 'required',
                'applicant_time_at_residence_year'      => 'required',

                'applicant_previous_street_number'          => 'required_if:applicant_residence_year,<,4',
                'applicant_previous_street_name'            => 'required_if:applicant_residence_year,<,4',
                'applicant_previous_city'                   => 'required_if:applicant_residence_year,<,4',
                'applicant_previous_province'               => 'required_if:applicant_residence_year,<,4',
                'applicant_previous_postal_code'            => 'required_if:applicant_residence_year,<,4',
                'applicant_previous_residential_status'     => 'required_if:applicant_residence_year,<,4',
                'applicant_previous_time_at_residence_year' => 'required_if:applicant_residence_year,<,4',

                'is_co_applicant'   => 'required',

                'co_applicant_first_name'               => 'required_if:is_co_applicant,==,Yes',
                'co_applicant_last_name'                => 'required_if:is_co_applicant,==,Yes',
                'co_applicant_email'                    => 'required_if:is_co_applicant,==,Yes',
                'co_applicant_phone'                    => 'required_if:is_co_applicant,==,Yes',
                'co_applicant_birth_date'               => 'required_if:is_co_applicant,==,Yes',
                'co_applicant_street_number'            => 'required_if:is_co_applicant,==,Yes',
                'co_applicant_street_name'              => 'required_if:is_co_applicant,==,Yes',
                'co_applicant_city'                     => 'required_if:is_co_applicant,==,Yes',
                'co_applicant_province'                 => 'required_if:is_co_applicant,==,Yes',
                'co_applicant_postal_code'              => 'required_if:is_co_applicant,==,Yes',
                'co_applicant_time_at_residence_year'   => 'required_if:is_co_applicant,==,Yes',

                'co_applicant_previous_street_number'          => 'required_if:co_applicant_time_at_residence_year,<,4',
                'co_applicant_previous_street_name'            => 'required_if:co_applicant_time_at_residence_year,<,4',
                'co_applicant_previous_city'                   => 'required_if:co_applicant_time_at_residence_year,<,4',
                'co_applicant_previous_province'               => 'required_if:co_applicant_time_at_residence_year,<,4',
                'co_applicant_previous_postal_code'            => 'required_if:co_applicant_time_at_residence_year,<,4',
                'co_applicant_previous_residential_status'     => 'required_if:co_applicant_time_at_residence_year,<,4',
                'co_applicant_previous_time_at_residence_year' => 'required_if:co_applicant_time_at_residence_year,<,4',

                'applicant_self_employed'                => 'required',
                'applicant_employment_job_title'         => 'required',
                'applicant_employment_status'            => 'required',
                'applicant_employment_employer_name'     => 'required',
                'applicant_employment_city'              => 'required',
                'applicant_employment_province'          => 'required',
                'applicant_employment_postal_code'       => 'required',
                'applicant_employment_time_at_job_year'  => 'required',

                'co_applicant_employment_self_employed'     => 'required_if:is_co_applicant,==,Yes',
                'co_applicant_employment_job_title'         => 'required_if:is_co_applicant,==,Yes',
                'co_applicant_employment_status'            => 'required_if:is_co_applicant,==,Yes',
                'co_applicant_employment_employer_name'     => 'required_if:is_co_applicant,==,Yes',
                'co_applicant_employment_city'              => 'required_if:is_co_applicant,==,Yes',
                'co_applicant_employment_province'          => 'required_if:is_co_applicant,==,Yes',
                'co_applicant_employment_postal_code'       => 'required_if:is_co_applicant,==,Yes',
                'co_applicant_employment_time_at_job_year'  => 'required_if:is_co_applicant,==,Yes',

                'property_street_number'     => 'required',
                'property_street_name'       => 'required',
                'property_city'              => 'required',
                'property_province'          => 'required',
                'property_postal_code'       => 'required',
                'property_estimated_value'   => 'required',

                'mortgage_closing_date'      => 'required',
                'mortgage_amortization_year' => 'required',
                'mortgage_amount'            => 'required',
                'mortgage_down_payment'      => 'required',
                'mortgage_first_time_buyer'  => 'required',

                'privacy'                       => 'required',
                'understand_canada_anti_spam'   => 'required',

            ]);
            
            if ($validator->fails())
            {
                return response()->json(['errors'=>$validator->errors()->all()]);
            }
            else 
            {
                extract($_POST);
                //$user = User::where('token',$token)->first();
                $json = json_encode($_POST);
                $app = new Application;
                $app->user_id               = $user->id;
                $app->application_type_id   = $user->application_id;
                $app->application_values    = $json;
                $app->application_type      = 'Full Application';
                $app->updated_at            = date('Y-m-d H:i:s');
                $app->created_at            = date('Y-m-d H:i:s');
                $app->save();

                $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
                $password =  substr(str_shuffle($chars),0,8);
                
                User::where('token',$request->token)->update(['password'=>Hash::make($password)]);

                $template = DB::table('cms_email_templates')->Where('slug', 'successful-message')->first();

                $content = str_replace('[NAME]',$user->name,$template->content);
                $content = str_replace('[EMAIL]', $user->email, $content);
                $content = str_replace('[PASSWORD]', $password, $content);

                $data = [
                    'email' 	=> $user->email,
                    'subject' 	=> $template->subject,
                    'content' 	=> $content
                ];

                $mail = Mail::send('emails/invite-client', $data, function($message) use ($data) {
                    $message->to($data['email'])->subject($data['subject']);
                });

                $message = str_replace('[NAME]', $user->name, $template->message);
                $message = str_replace('[EMAIL]', $user->email, $message);
                $message = str_replace('[PASSWORD]', $password, $message);

                Twilio::message($user->mobile, $message);

                return response()->json(['status'=>'Success','message'=>'Your form has been successfully submitted. We have sent email and password to your registered email. You will redirecting to login page in 5seconds. <meta http-equiv="refresh" content="6;url=https://jindalmortgages.ca/app/admin" />']); 
            }
        }
        else {
            return response()->json(['status'=>'Error','message'=>'Invalid token! Please try later.']);
        }
    }
}
