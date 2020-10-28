<?php

	namespace App\Core;
	
	Class Controller
	{
		protected $models 			= '';
		protected $liblaries		= '';
		protected $contents 		= '';

		public function view($view, $data = [])
		{
			// Array key to new variable
			extract($data, EXTR_PREFIX_SAME, "wddx");

			$data 				= [];

			require_once '../app/Views/' . $view . '.php';
		}
	}