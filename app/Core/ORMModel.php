<?php
	
	namespace App\Core;

	Class ORMModel
	{
		protected $db;
		protected $id 			= 'id';
		protected $table 		= '';
		protected $fillable 	= [];

		function __construct()
		{
			$this->db 	= mysqli_connect(
											db_host,
											db_user,
											db_pass,
											db_name
										);

			return $this->db;
		}
	}