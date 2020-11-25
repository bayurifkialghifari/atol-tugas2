<?php
	
	namespace App\Liblaries;

	Class Sesion
	{
		public function cekLogin()
		{
			if(isset($_SESSION['status']))
			{
				if($_SESSION['status'] == true)
				{
					redirect(base_url . 'dashboard');			
				}
			}
		}

		public function cekBelum()
		{
			if(isset($_SESSION['status']))
			{
				if($_SESSION['status'] != true)
				{
					redirect(base_url . 'login');			
				}
			}
			else
			{
				redirect(base_url . 'login');			
			}
		}
	}