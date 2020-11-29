<?php 
	
	namespace App\Liblaries;

	Class Hash
	{
		/**
        * @var
        *
        * Hash prefix
        *
        */
		private $hash_prefix = '$2y$10$';

		/**
        * @var
        *
        * Default hash
        *
        */
		public function default_hash($password,$round = 10)
		{
			$config = array(
				'cost' => $round
			);

			return password_hash($password, PASSWORD_DEFAULT, $config);
		}

		/**
        * @var
        *
        * Bcrpt hash
        *
        */
		public function bcrypt_hash($password,$round = 10)
		{
			$config = array(
				'cost' => $round
			);

			return password_hash($password, PASSWORD_BCRYPT, $config);
		}

		/**
        * @var
        *
        * Hash check
        *
        */
		public function hash_check($password,$hashed_password)
		{
			return password_verify($password, $this->hash_prefix . $hashed_password);
		}		
	}