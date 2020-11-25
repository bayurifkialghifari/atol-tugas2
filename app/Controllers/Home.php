<?php
	
	namespace App\Controllers;

	use App\Core\Controller;

	Class Home extends Controller
	{

		public function index()
		{
			// parent::view() untuk load view
			// post('nama')
			// sess(nama)
			// get('nama')
			// set_session(array)

			$data['app_name'] = 'Contoh';

			parent::view('home', $data);
		}

		public function test()
		{
			var_dump('asdasd');
		}
	}