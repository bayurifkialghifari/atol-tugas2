<?php
	
	namespace App\Core;

	Class ORMModel
	{
		protected static $table = '';

		/** 
        * Connect to database
        *
        */
        public static function connect()
        {
            return mysqli_connect(db_host, db_user, db_pass, db_name);
        }

        /** 
        * Get name table database
        *
        */
		public static function getChildName() 
		{
        	self::$table   = get_called_class();
    	}

        /** 
        * Get all data from database
        *
        */
    	public function all()
    	{
    		$sql 			= " SELECT * FROM " . self::$table;

    		$exe 			= self::connect()->query($sql);

    		return $exe;
    	}

        /** 
        * Find single data from database
        *
        */
    	public function find($where)
    	{
    		$field 			= array_keys($where);
    		$field 			= $field[0];

    		$sql 			= " SELECT * FROM ". self::$table ." WHERE {$field}={$where[$field]}";

            $exe            = self::connect()->query($sql);

    		return $exe;
    	}

        /** 
        * Find multiple data from database
        *
        */
    	public function where($arr)
    	{
    		$where 			= array();

    		foreach($arr as $f=>$r)
            {
                array_push($where,$f."="."'".$r."'");
            }

            $where          = implode(',',$where);

    		$sql 			= " SELECT * FROM ". self::$table ." WHERE {$where} ";
            $exe            = self::connect()->query($sql);

            return $exe;
    	}

        /** 
        * Store data to database
        *
        */
        public function create($arr)
        {
            $r1             = array();
            $f1             = array();

            foreach($arr as $f2=>$r2)
            {
                array_push($f1,$f2);
                array_push($r1,"'".$r2."'");
            }

            $field          = implode(',',$f1);
            $row            = implode(',',$r1);

            $exe            = self::connect()->query("INSERT INTO ". self::$table ."({$field}) VALUES ({$row})");

            return $exe;
        }

	}