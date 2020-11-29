<?php
	
	namespace App\Controllers;

	use App\Core\Controller;
	use App\Liblaries\Email;

	Class Home extends Controller
	{
		public function index()
		{
			// view() untuk load view
			// parent::post('nama')
			// parent::all()
			// parent::post_all()
			// parent::get_all()
			// parent::get('nama')
			// parent::sess(nama)
			// parent::set_session(array)

			$data['app_name'] = 'Welcome';

			view('home', $data);
		}

		public function email()
		{
			Email::set_host('GGWP');
			Email::set_username('WPWP');
			Email::send();
		}
	}