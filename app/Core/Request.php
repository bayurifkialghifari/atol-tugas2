<?php

	namespace App\Core;
	
	use App\Liblaries\SqliFilter;
	use App\Liblaries\XssFilter;

	Class Request
	{
		/** 
		* POST SINGLE DATA
		*
		*/
		public function post($index)
		{
			return XssFilter::xss_clean(SqliFilter::sqli_clean($_POST[$index]));
		}

		/** 
		* GET SINGLE DATA
		*
		*/
		public function get($index)
		{
			return XssFilter::xss_clean(SqliFilter::sqli_clean($_GET[$index]));
		}

		/** 
		* POST ALL DATA
		*
		*/
		public function post_all()
		{
			return $_POST;
		}

		/** 
		* GET ALL DATA
		*
		*/
		public function get_all()
		{
			return $_GET;
		}

		/** 
		* POST/GET ALL DATA
		*
		*/
		public function all()
		{
			parse_str(file_get_contents('php://input'), $get_post);
			
			return $get_post;
		}

		/** 
		* GET SESSION DATA
		*
		*/
		public function sess($sess)
		{
			return $_SESSION[$sess];
		}

		/** 
		* SET SESSION DATA
		*
		*/
		public function set_session($data = [])
		{
			foreach($data as $name => $value)
			{
				$_SESSION[$name] 	= $value;
			}

			return $data;
		}
	}