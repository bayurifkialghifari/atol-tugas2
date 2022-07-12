<?php
	
	namespace App\Controllers;

	use App\Core\Controller;
	use App\Liblaries\Sesion;

	Class Home extends Controller
	{
		public function __construct() {
			Sesion::cekBelum();
		}

		public function index() {
			$data['app_name'] = 'Welcome';

			view('page.example', $data);
		}
	}