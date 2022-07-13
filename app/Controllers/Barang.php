<?php
	
	namespace App\Controllers;

	use App\Core\Controller;
	use App\Liblaries\Sesion;
	use App\Models\Barang as Barangs;
	use App\Core\Request;

	Class Barang extends Controller
	{
		public function __construct() {
			Sesion::cekBelum();
		}

		public function index() {
			$barang = new Barangs;
			$request = new Request;

			$data['title'] = 'Barang';
			$data['data'] = $barang->result_array(
				$barang->select('barang.*, user.name as username')
				->join('user', 'user.id', 'barang.user_id')
				->get()
			);
			

			var_dump($request->get('qwe'));
			exit;
		

			view('page.barang', $data);
		}
	}