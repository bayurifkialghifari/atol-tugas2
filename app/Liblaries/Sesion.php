<?php
	
	namespace App\Liblaries;

	Class Sesion
	{
		/**
        * @var
        *
        * Session check login
        *
        */
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

		/**
        * @var
        *
        * Session check login
        *
        */
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