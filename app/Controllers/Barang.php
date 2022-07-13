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

			$get = $barang->select('barang.*, user.name as username')
			->join('user', 'user.id', 'barang.user_id')
			->get();

			// if Search
			if($request->get('search')) {
				$search = $request->get('search');
				$get = $barang->select('barang.*, user.name as username')
				->join('user', 'user.id', 'barang.user_id')
				->raw(" 
					WHERE user.name LIKE '%{$search}%' 
					OR nama LIKE '%{$search}%'
					OR harga LIKE '%{$search}%'
					OR stok LIKE '%{$search}%'
				")
				->get();

				$data['search'] = $search;
			}

			$data['title'] = 'Barang';
			$data['data'] = $barang->result_array($get);

			view('page.barang', $data);
		}

		public function insert() {
			$barang = new Barangs;
			$request = new Request;

			// Get data post
			$data = $request->post_all();
			$data['user_id'] = $request->sess('id');
			unset($data['id']);

			// Create data
			$exe = $barang->create($data);

			echo json_encode($exe);
		}

		public function update() {
			$barang = new Barangs;
			$request = new Request;	

			// Get data post
			$data = $request->post_all();
			$data['user_id'] = $request->sess('id');

			// Update data
			$exe = $barang->update(['id' => $data['id']], $data);

			echo json_encode($exe);
		}

		public function delete() {
			$barang = new Barangs;
			$request = new Request;	

			// Delete data
			$exe = $barang->delete(['id' => $request->post('id')]);

			echo json_encode($exe);
		}
	}