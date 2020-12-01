<?php
	
	namespace App\Controllers;

	use App\Core\Controller;
	use App\Liblaries\Email;
	use App\Models\Faqs;

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
			Email::host('zonaseller.sudamiskin.com');
			Email::username('test@zonaseller.sudamiskin.com');
			Email::password('@Cimahi123');
			Email::from(['test@zonaseller.sudamiskin.com', 'GGWP']);
			Email::to(['bayurifkialgh@gmail.com', 'GGWP']);
			// Email::reply_to(['test@zonaseller.sudamiskin.com', 'Balas']);
			Email::subject('ASDASD');
			Email::body('ASDASD');
			Email::send();
		}

		public function orm()
		{
			$model = new Faqs;
			$exe = $model->select('*')->where('asdasd', 'asdsad')->limit(1)->get();

			var_dump($exe);
		}
	}