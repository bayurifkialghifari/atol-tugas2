<?php

	namespace App\Liblaries;

	Class SqliFilter extends Model
	{
		public function sqli_clean($data)
		{
			$conn = $this->db;
			
			return mysqli_real_escape_string($conn, $data);
		}
	}

