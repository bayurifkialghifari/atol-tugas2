<?php
	
	namespace App\Liblaries;

	use App\Core\Request;

	Class Pagination
	{
		/**
        * @param
        *
        * Pagination parameter
        *
        */
		private static $href;
		private static $class;
		private static $open_attr;
		private static $close_attr;
		private static $link_attr;

		/**
        * @var
        *
        * Set href
        *
        */
        public function href($href)
        {
        	self::$href 		= $href;
        }
		
		/**
        * @var
        *
        * Set class
        *
        */
        public function class($class)
        {
        	self::$class 		= $class;
        }

        /**
        * @var
        *
        * Set open attribute
        *
        */
        public function open_attr($open_attr)
        {
        	self::$open_attr 	= $open_attr;
        }

        /**
        * @var
        *
        * Set close attribute
        *
        */
        public function close_attr($close_attr)
        {
        	self::$close_attr 	= $close_attr;
        }

        /**
        * @var
        *
        * Set close attribute
        *
        */
        public function link_attr($link_attr)
        {
        	self::$link_attr 	= $link_attr;
        }

        /**
        * @return
        *
        * Get href
        *
        */
        public function get_href()
        {
        	return self::$href;
        }

        /**
        * @return
        *
        * Get class
        *
        */
        public function get_class()
        {
        	return self::$class;
        }

        /**
        * @return
        *
        * Get open_attr
        *
        */
        public function get_open_attr()
        {
        	return self::$open_attr;
        }

        /**
        * @return
        *
        * Get close_attr
        *
        */
        public function get_close_attr()
        {
        	return self::$close_attr;
        }

        /**
        * @return
        *
        * Get link_attr
        *
        */
        public function get_link_attr()
        {
        	return self::$link_attr;
        }
		

		/**
        * @var
        *
        * Create link pagination
        *
        */
		public function create_link($total = 10, $page = 1, $config = array())
		{
			/**
	        * @return
	        *
	        * Link pagination
	        *
	        */
			$link 			= '';
			$pages 			= ceil($total / $page);

			/**
	        * @param
	        *
	        * Custom parameter for pagination link
	        *
	        */
	        $href 			= (isset($config['href'])) 			? $config['href'] 		: self::get_href();
	        $class 			= (isset($config['class'])) 		? $config['class'] 		: self::get_class();
	        $open_attr 		= (isset($config['open_attr'])) 	? $config['open_attr'] 	: self::get_open_attr();
	        $close_attr 	= (isset($config['close_attr'])) 	? $config['close_attr'] : self::get_close_attr();
	        $link_attr 		= (isset($config['link_attr'])) 	? $config['link_attr'] 	: self::get_link_attr();

			for($i = 1;$i <= $pages;$i ++)
			{
				/**
		        * @var
		        *
		        * Create link pagination
		        *
		        */
				$link 	.= "{$open_attr}
								<a 
									class='{$class}' 
									href='{$href}/{$i}'
									{$link_attr}
								>
										{$i}
								</a>
							{$close_attr}";

			}

			return $link;
		}
	}