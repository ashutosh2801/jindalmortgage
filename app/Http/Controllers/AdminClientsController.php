<?php namespace App\Http\Controllers;

	use Session;
	use Request;
	use DB;
	use CRUDBooster;
	use app\User;
	use app\ApplicationType;
	use Twilio;
	use Mail;

	class AdminClientsController extends \crocodicstudio\crudbooster\controllers\CBController {

	    public function cbInit() {

			# START CONFIGURATION DO NOT REMOVE THIS LINE
			$this->title_field = "name";
			$this->limit = "20";
			$this->orderby = "id,desc";
			$this->global_privilege = true;
			$this->button_table_action = true;
			$this->button_bulk_action = true;
			$this->button_action_style = "button_icon";
			$this->button_add = true;
			$this->button_edit = true;
			$this->button_delete = true;
			$this->button_detail = true;
			$this->button_show = true;
			$this->button_filter = true;
			$this->button_import = true;
			$this->button_export = true;
			$this->table = "cms_users";
			# END CONFIGURATION DO NOT REMOVE THIS LINE

			# START COLUMNS DO NOT REMOVE THIS LINE
			$this->col = [];
			$this->col[] = ["label"=>"Name","name"=>"name", "callback_php"=>'"<h3 class=\'title\'>".$row->name.$this->checkApplied($row->id,$row->application_id)."</h3><p><i class=\'fa fa-envelope-o\'></i> ".$row->email."</p><p><i class=\'fa fa-phone\'></i> ".$row->mobile."</p><p><i class=\'fa fa-file-text-o\'></i> ".$this->showApplication($row->application_id)."</p>"'];
			$this->col[] = ["label"=>"Application Name","name"=>"application_id","join"=>"application_type,application_name",'visible'=>false];
			$this->col[] = ["label"=>"Mobile","name"=>"mobile",'visible'=>false];
			$this->col[] = ["label"=>"Email","name"=>"email",'visible'=>false];
			$this->col[] = ["label"=>"Agent","name"=>"agent","join"=>"cms_users,name",'visible'=>false];
			$this->col[] = ["label"=>"Realtor","name"=>"realtor","join"=>"cms_users,name",'visible'=>false];
			//$this->col[] = ["label"=>"Status","name"=>"status","callback_php"=>'($row->status==1)?"Active":"Inactive"'];
			# END COLUMNS DO NOT REMOVE THIS LINE

			# START FORM DO NOT REMOVE THIS LINE
			$this->form = [];
			$this->form[] = ['label'=>'Full Name','name'=>'name','type'=>'text','validation'=>'required|string|min:3|max:70','width'=>'col-sm-10','placeholder'=>'You can only enter the letter only'];
			$this->form[] = ['label'=>'Mobile Number','name'=>'mobile','type'=>'text','validation'=>'required|min:11|max:20','width'=>'col-sm-10','help'=>'please use this formate:  +1-987-654-3210','placeholder'=>'+1-987-654-3210'];
			$this->form[] = ['label'=>'Email Address','name'=>'email','type'=>'email','validation'=>'required|min:1|max:255|email|unique:cms_users','width'=>'col-sm-10','placeholder'=>'Please enter a valid email address'];
			$this->form[] = ['label'=>'Application Name','name'=>'application_id','type'=>'select2','validation'=>'required','width'=>'col-sm-10','datatable'=>'application_type,application_name'];
		if( CRUDBooster::myPrivilegeId()==1 ) {
			$this->form[] = ['label'=>'Agent','name'=>'agent','type'=>'select2','width'=>'col-sm-10','datatable'=>'cms_users,name','datatable_where'=>'cms_users.id_cms_privileges=2'];
			$this->form[] = ['label'=>'Realtor','name'=>'realtor','type'=>'select2','width'=>'col-sm-10','datatable'=>'cms_users,name','datatable_where'=>'cms_users.id_cms_privileges=3'];
		}
		else if( CRUDBooster::myPrivilegeId()==2 ) {
			$this->form[] = ['label'=>'Realtor','name'=>'realtor','type'=>'select2','width'=>'col-sm-10','datatable'=>'cms_users,name','datatable_where'=>'cms_users.id_cms_privileges=3'];
		}
			$this->form[] = ['label'=>'Status','name'=>'status','type'=>'radio','validation'=>'required','width'=>'col-sm-10','dataenum'=>'1|Active;0|Inactive'];
			# END FORM DO NOT REMOVE THIS LINE

			# OLD START FORM
			//$this->form = [];
			//$this->form[] = ['label'=>'Full Name','name'=>'name','type'=>'text','validation'=>'required|string|min:3|max:70','width'=>'col-sm-10','placeholder'=>'You can only enter the letter only'];
			//$this->form[] = ['label'=>'Mobile Number','name'=>'mobile','type'=>'text','validation'=>'required|min:11|max:20','width'=>'col-sm-10','help'=>'please use this formate:  +1-987-654-3210','placeholder'=>'+1-987-654-3210'];
			//$this->form[] = ['label'=>'Email Address','name'=>'email','type'=>'email','validation'=>'required|min:1|max:255|email|unique:cms_users','width'=>'col-sm-10','placeholder'=>'Please enter a valid email address'];
			//$this->form[] = ['label'=>'Application Name','name'=>'application_id','type'=>'select2','validation'=>'required','width'=>'col-sm-10','datatable'=>'cms_users,name','datatable_where'=>'cms_users.id_cms_privileges=2'];
			//$this->form[] = ['label'=>'Agent','name'=>'agent','type'=>'select2','validation'=>'required','width'=>'col-sm-10','datatable'=>'cms_users,name','datatable_where'=>'cms_users.id_cms_privileges=3'];
			//$this->form[] = ['label'=>'Realtor','name'=>'realtor','type'=>'select2','validation'=>'required','width'=>'col-sm-10','dataenum'=>'1|Active;0|Inactive'];
			//$this->form[] = ['label'=>'Status','name'=>'status','type'=>'radio','validation'=>'required','width'=>'col-sm-10'];
			# OLD END FORM

			/* 
	        | ---------------------------------------------------------------------- 
	        | Sub Module
	        | ----------------------------------------------------------------------     
			| @label          = Label of action 
			| @path           = Path of sub module
			| @foreign_key 	  = foreign key of sub table/module
			| @button_color   = Bootstrap Class (primary,success,warning,danger)
			| @button_icon    = Font Awesome Class  
			| @parent_columns = Sparate with comma, e.g : name,created_at
	        | 
	        */
	        $this->sub_module = array();


	        /* 
	        | ---------------------------------------------------------------------- 
	        | Add More Action Button / Menu
	        | ----------------------------------------------------------------------     
	        | @label       = Label of action 
	        | @url         = Target URL, you can use field alias. e.g : [id], [name], [title], etc
	        | @icon        = Font awesome class icon. e.g : fa fa-bars
	        | @color 	   = Default is primary. (primary, warning, succecss, info)     
	        | @showIf 	   = If condition when action show. Use field alias. e.g : [id] == 1
	        | 
	        */
	        $this->addaction = array();
            //$this->addaction[] = ['label'=>'Set Active','url'=>CRUDBooster::mainpath('set-status/active/[id]'),'icon'=>'fa fa-check','color'=>'success'];

	        /* 
	        | ---------------------------------------------------------------------- 
	        | Add More Button Selected
	        | ----------------------------------------------------------------------     
	        | @label       = Label of action 
	        | @icon 	   = Icon from fontawesome
	        | @name 	   = Name of button 
	        | Then about the action, you should code at actionButtonSelected method 
	        | 
	        */
	        $this->button_selected = array();

	                
	        /* 
	        | ---------------------------------------------------------------------- 
	        | Add alert message to this module at overheader
	        | ----------------------------------------------------------------------     
	        | @message = Text of message 
	        | @type    = warning,success,danger,info        
	        | 
	        */
	        $this->alert        = array();
	                

	        
	        /* 
	        | ---------------------------------------------------------------------- 
	        | Add more button to header button 
	        | ----------------------------------------------------------------------     
	        | @label = Name of button 
	        | @url   = URL Target
	        | @icon  = Icon from Awesome.
	        | 
	        */
	        $this->index_button = array();
            //$this->index_button[] = ['label'=>'Advanced Print','url'=>CRUDBooster::mainpath("print"),"icon"=>"fa fa-print"];


	        /* 
	        | ---------------------------------------------------------------------- 
	        | Customize Table Row Color
	        | ----------------------------------------------------------------------     
	        | @condition = If condition. You may use field alias. E.g : [id] == 1
	        | @color = Default is none. You can use bootstrap success,info,warning,danger,primary.        
	        | 
	        */
	        $this->table_row_color = array();     	          

	        
	        /*
	        | ---------------------------------------------------------------------- 
	        | You may use this bellow array to add statistic at dashboard 
	        | ---------------------------------------------------------------------- 
	        | @label, @count, @icon, @color 
	        |
	        */
	        $this->index_statistic = array();
		if( CRUDBooster::myPrivilegeId()==3 ) { //If realtor logged in can see thiere only Clients
            $this->index_statistic[] = ['label'=>'View Detail','color'=>'success','link'=>'#'];
            $this->index_statistic[] = ['label'=>'View Documents','color'=>'success','link'=>'#'];
            $this->index_statistic[] = ['label'=>'Total Data','color'=>'success','link'=>'#'];
		}


	        /*
	        | ---------------------------------------------------------------------- 
	        | Add javascript at body 
	        | ---------------------------------------------------------------------- 
	        | javascript code in the variable 
	        | $this->script_js = "function() { ... }";
	        |
	        */
	        $this->script_js = NULL;


            /*
	        | ---------------------------------------------------------------------- 
	        | Include HTML Code before index table 
	        | ---------------------------------------------------------------------- 
	        | html code to display it before index table
	        | $this->pre_index_html = "<p>test</p>";
	        |
	        */
	        $this->pre_index_html = null;
	        
	        
	        
	        /*
	        | ---------------------------------------------------------------------- 
	        | Include HTML Code after index table 
	        | ---------------------------------------------------------------------- 
	        | html code to display it after index table
	        | $this->post_index_html = "<p>test</p>";
	        |
	        */
	        $this->post_index_html = null;
	        
	        
	        
	        /*
	        | ---------------------------------------------------------------------- 
	        | Include Javascript File 
	        | ---------------------------------------------------------------------- 
	        | URL of your javascript each array 
	        | $this->load_js[] = asset("myfile.js");
	        |
	        */
	        $this->load_js = array();
	        
	        
	        
	        /*
	        | ---------------------------------------------------------------------- 
	        | Add css style at body 
	        | ---------------------------------------------------------------------- 
	        | css code in the variable 
	        | $this->style_css = ".style{....}";
	        |
	        */
	        $this->style_css = NULL;
	        
	        
	        
	        /*
	        | ---------------------------------------------------------------------- 
	        | Include css File 
	        | ---------------------------------------------------------------------- 
	        | URL of your css each array 
	        | $this->load_css[] = asset("myfile.css");
	        |
	        */
	        $this->load_css = array();
	        
	        
	    }


	    /*
	    | ---------------------------------------------------------------------- 
	    | Hook for button selected
	    | ---------------------------------------------------------------------- 
	    | @id_selected = the id selected
	    | @button_name = the name of button
	    |
	    */
	    public function actionButtonSelected($id_selected,$button_name) {
	        //Your code here
	            
	    }
	    
	    public function checkApplied($user_id, $app_id) {
	        $model = DB::table('application_applied')->where('user_id',$user_id)->where('application_type_id',$app_id)->first();
	        if($model) {
	            return ' <a href="'.url('admin/clients/applications/'.$user_id).'"><i class="fa fa-check-square-o"></i></a>';
	        }
	        return '';
	    }
	    
	    public function showApplication($id) 
		{
	        $model = DB::table('application_type')->where('id',$id)->first();
	        return $model->application_name;
	    }

		public function getRemove($id) 
		{
	        $model = DB::table('applied_documents')->where('id',$id)->delete();
	        return back();
	    }

		public function getDocuments( $id=0 ) 
		{
	        $data = [];

	        $data['application'] = DB::table('application_applied')->where('application_type_id', $id)->first();
			$data['client'] = DB::table('cms_users')->where('id', $data['application']->user_id)->first();
	        
			$documents = DB::table('application_documents')
	        ->select('application_documents.*', 'applied_documents.id as applied_id', 'applied_documents.user_id', 'applied_documents.attachment', 'applied_documents.updated_at')
	        ->leftJoin('applied_documents', 'application_documents.id','=','applied_documents.application_document_id')
	        //->where('application_documents.application_type_id', $data['client']->application_id)
	        ->where('application_documents.employment_type', 'EMPLOYED')
			->orderBy('application_documents.id', 'ASC');

			//echo intval($id); exit;

			if(intval($id)>0) $documents = $documents->where('application_documents.application_type_id', $id);			

			$data['documents'] = $documents->get();
	        
	        //print_r($data['client']); exit;

	        return view('backend.documents',$data);
	    }	

		public function postDocuments( $id=0 ) 
		{
			//Create an Auth
			if(!CRUDBooster::isRead() && $this->global_privilege==FALSE || $this->button_edit==FALSE) {    
				CRUDBooster::redirect(CRUDBooster::adminPath(),trans("crudbooster.denied_access"));
			}

			$allowedfileExtension=['pdf','jpg','png','jpeg'];
			$files = $_FILES['files'];
			//echo '<pre>'; print_r($files['name']); exit;
			
			foreach($files['name'] as $key=>$file)
			{
				//echo '<pre>'; print_r($file);
				if($file) 
				{
					$filename 	= $file;
					$extension 	= array_pop(explode(".",$file));
					$check		= in_array($extension,$allowedfileExtension);
					if($check)
					{
						$name = CRUDBooster::myId().'_'.$key.'_'.time().'.'.$extension;
						$destinationPath = public_path('/uploads/').$name;
						$tmp_name = $files["tmp_name"][$key];
						move_uploaded_file($tmp_name, $destinationPath);

						DB::table('applied_documents')->insert(
							[
								'user_id' 					=> CRUDBooster::myId(), 
								'application_type_id' 		=> $key,
								'application_document_id' 	=> $key, 
								'attachment' 				=> 'public/uploads/'.$name, 
								'updated_at' => date('Y-m-d H:i:s'), 
								'created_at' => date('Y-m-d H:i:s') 
							]
						);
					}
				}

			}
			//echo '<pre>'; print_r($request); exit;

			return back();
		}

		public function getApplications( $id=0 ) 
		{
	        $data = [];

			$id = $id==0 ? CRUDBooster::myId() : $id;
	        
			$data['client'] = DB::table('cms_users')->where('id',$id)->first();
			$data['applications'] = DB::table('application_type')->where('application_status',1)->orderBy('application_name','ASC')->get();
			$data['apps'] = DB::table('application_type')
							->select('application_type.*', 'application_applied.id as applied_id', 'application_applied.updated_at')
							->join('allow_applications', 'application_type.id', '=', 'allow_applications.application_type_id')
							->leftJoin('application_applied', 'application_type.id','=','application_applied.application_type_id')
							->where('allow_applications.user_id',$id)
							->get();

	        return view('backend.applications',$data);
	    }
	    
		public function postApplications( ) 
		{
			DB::table('allow_applications')->insert(
				[
					'user_id' 				=> $_POST['user_id'], 
					'application_type_id' 	=> $_POST['application_type_id'],
					'token' 				=> md5(date('YMDHISA')), 
					'created_at' 			=> date('Y-m-d H:i:s') 
				]
			);

			return back();
		}

	    public function getApplication( $id ) {

	        $data = [];
	        
	        $data['client'] = DB::table('application_applied')
	        ->select('cms_users.id','cms_users.name','application_type.application_name','application_applied.*')
	        ->join('cms_users', 'cms_users.id','=','application_applied.user_id')
	        ->join('application_type', 'application_type.id','=','application_applied.application_type_id')
	        ->where('application_applied.id',$id)
			->first();
	        
	        //print_r($data['client']); exit;

	        return view('backend.application',$data);
	    }


	    /*
	    | ---------------------------------------------------------------------- 
	    | Hook for manipulate query of index result 
	    | ---------------------------------------------------------------------- 
	    | @query = current sql query 
	    |
	    */
	    public function hook_query_index(&$query) {
	        //Your code here
	        $query->where( 'cms_users.id_cms_privileges' , 4 );

			if( CRUDBooster::myPrivilegeId()==3 ) //If realtor logged in can see thiere only Clients
			$query->where( 'cms_users.realtor' , CRUDBooster::myId() );

			return $query;      
	    }

	    /*
	    | ---------------------------------------------------------------------- 
	    | Hook for manipulate row of index table html 
	    | ---------------------------------------------------------------------- 
	    |
	    */    
	    public function hook_row_index($column_index,&$column_value) {	        
	    	//Your code here
	    }

	    /*
	    | ---------------------------------------------------------------------- 
	    | Hook for manipulate data input before add data is execute
	    | ---------------------------------------------------------------------- 
	    | @arr
	    |
	    */
	    public function hook_before_add(&$postdata) 
		{        
	        //Your code here
			if( CRUDBooster::myPrivilegeId()==2 ) {
				$postdata['agent'] = CRUDBooster::myId();
			}
			else if( CRUDBooster::myPrivilegeId()==3 ) {
				$postdata['realtor'] = CRUDBooster::myId();
			}
			$postdata['id_cms_privileges'] = 4;
			$postdata['token'] = md5(date('YMDHISA'));
			return $postdata;
	    }

	    /* 
	    | ---------------------------------------------------------------------- 
	    | Hook for execute command after add public static function called 
	    | ---------------------------------------------------------------------- 
	    | @id = last insert id
	    | 
	    */
	    public function hook_after_add($id) 
		{        
	        //Your code here
			//Student::where('id',$id)->first(); 
			$model = DB::table('cms_users')->Where('id', $id)->first();
			$template = DB::table('cms_email_templates')->Where('slug', 'invite-client')->first();

			$content = str_replace('[NAME]',$model->name,$template->content);
			$content = str_replace('[LINK]',url('/full-application/'.$model->token),$content);
			$data = [
				'email' 	=> $model->email,
				'subject' 	=> $template->subject,
				'content' 	=> $content
			];

			DB::table('allow_applications')->insert(
				[
					'user_id' 				=> $model->id, 
					'application_type_id' 	=> $model->application_id,
					'token' 				=> md5(date('YMDHISA')), 
					'created_at' 			=> date('Y-m-d H:i:s') 
				]
			);
	  
			$mail = Mail::send('emails/invite-client', $data, function($message) use ($data) {
				$message->to($data['email'])->subject($data['subject']);
			});

			$message = $template->message;
			Twilio::message($model->mobile, $message);

			//print_r($mail); exit;
	    }

	    /* 
	    | ---------------------------------------------------------------------- 
	    | Hook for manipulate data input before update data is execute
	    | ---------------------------------------------------------------------- 
	    | @postdata = input post data 
	    | @id       = current id 
	    | 
	    */
	    public function hook_before_edit(&$postdata,$id) {        
	        //Your code here

	    }

	    /* 
	    | ---------------------------------------------------------------------- 
	    | Hook for execute command after edit public static function called
	    | ----------------------------------------------------------------------     
	    | @id       = current id 
	    | 
	    */
	    public function hook_after_edit($id) {
	        //Your code here 

	    }

	    /* 
	    | ---------------------------------------------------------------------- 
	    | Hook for execute command before delete public static function called
	    | ----------------------------------------------------------------------     
	    | @id       = current id 
	    | 
	    */
	    public function hook_before_delete($id) {
	        //Your code here

	    }

	    /* 
	    | ---------------------------------------------------------------------- 
	    | Hook for execute command after delete public static function called
	    | ----------------------------------------------------------------------     
	    | @id       = current id 
	    | 
	    */
	    public function hook_after_delete($id) {
	        //Your code here

	    }



	    //By the way, you can still create your own method in here... :) 


	}