<?php
	
	namespace App\Core;

	Class ORMModel
	{
		protected $db;
		protected $id 			= 'id';
		protected $table 		= '';
		protected $fillable 	= [];
		protected $query 		= '';

		function __construct()
		{
			$this->table 	= ($this->table === '') ? self::getChildName() : $this->table;

			$this->db 		= mysqli_connect(
											db_host,
											db_user,
											db_pass,
											db_name
										);

			return $this->db;
		}

		public static function getChildName() 
		{
        	return get_called_class();
    	}

    	public function all()
    	{
    		$sql 			= " SELECT * FROM {$this->table}";
    		$this->query 	= $sql;

    		$exe 			= $this->db->query($this->query);

    		return $exe;
    	}

    	public function where($arr = ['id' => '1'])
    	{
    		$sql 			= ($this->query !== '') ? $this->query : " SELECT * FROM {$this->table} WHERE ";
    		$f1 			= [];

    		foreach($arr as $f2 => $v2)
    		{
    			$f1 		= $f2 . ' ' . $v2;
    		}
    	}

	}