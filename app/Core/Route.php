<?php
	
	namespace App\Core;

	Class Route
	{
		protected $url 			= '/';
		protected $namespace 	= 'App\Controllers';
		protected $controller 	= 'Home';
		protected $method 		= 'index';
		protected $params 		= [];

		/*
		*
		*
		* Router
		*
		*
		*/

		public function group($data = ['url' => '/', 'namespace' => 'App\Controllers'], $control = 'Home', $method = 'index')
		{
			$url 						= (isset($_GET['url'])) ? $_GET['url'] : '/';

			/*
			*
			*
			* HMHMHMHMHMH
			*
			*
			*/

			$this->url 					= $data['url'];
			$this->namespace 			= (isset($data['namespace'])) ? $data['namespace'] : $this->namespace;
			$this->controller 			= ucfirst($control);
			
			// Cek string \
			if(stristr($this->controller, '\\') === false)
			{
				$this->controller 		= "\\$this->controller";
			}



			// Jika url di browser sama dengan yang di web.php
			if($url === $this->url)
			{
				// Instance
				$this->namespace 		= ($this->namespace !== null) ? $this->namespace : '';
				$this->controller 		= $this->namespace . $this->controller;
				
				// Cek keadaan class
				if(class_exists($this->controller))
				{
					$this->controller 	= new $this->controller;

					// Cek keadaan method
					if(method_exists($this->controller, $method))
					{
						$this->method 	= $method;
					}

					/*
					*
					*
					* NANTI TAMBAHIN PARAMETER
					*
					*
					*/

					call_user_func_array([	$this->controller, 
									$this->method 	],

									$this->params);
				}
				else
				{
					echo "Controller tidak ditemukan";
				}
			}
			else
			{
				echo "404 EWEH DA";
			}
		}




		/*
		*
		*
		* Parse URL
		*
		*
		*/

		public function parseURL()
		{
			if(isset($_GET['url']))
			{
				// Ngilangin / yang ada di akhir
				$url 	= rtrim($_GET['url'], '/');

				// Nglilangin huruf ajaib
				$url 	= filter_var($url, FILTER_SANITIZE_URL);

				// Ngubah Url ke bentuk array
				$url 	= explode('/', $url);

				return $url;
			}
		}
	}