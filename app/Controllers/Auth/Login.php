<?php
	
	namespace App\Controllers\Auth;

	use App\Core\Controller;

	Class Login extends Controller
	{
		public function index()
		{
			$data['app_name'] = 'Welcome';
        
			view('auth.login', $data);
		}
	}