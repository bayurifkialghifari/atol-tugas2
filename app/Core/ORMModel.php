<?php
	
	namespace App\Core;

	Class ORMModel
	{
		/** 
        * Connect to database
        *
        */
        public static function connect()
        {
            return mysqli_connect(db_host, db_user, db_pass, db_name);
        }

        /** 
        * Get all data from database
        *
        */
    	public function all()
    	{
            $table          = explode('\\', get_called_class())[2];
    		$sql 			= " SELECT * FROM {$table}";

    		$exe 			= self::connect()->query($sql);

    		return $exe;
    	}

        /** 
        * Find single data from database
        *
        */
    	public function find($where)
    	{
            $table          = explode('\\', get_called_class())[2];
    		$field 			= array_keys($where);
    		$field 			= $field[0];

    		$sql 			= " SELECT * FROM {$table} WHERE {$field}={$where[$field]}";

            $exe            = self::connect()->query($sql);

    		return $exe;
    	}

        /** 
        * Find multiple data from database
        *
        */
    	public function where($arr)
    	{
            $table          = explode('\\', get_called_class())[2];
    		$where 			= array();

    		foreach($arr as $f=>$r)
            {
                array_push($where,$f."="."'".$r."'");
            }

            $where          = implode(',',$where);

    		$sql 			= " SELECT * FROM {$table} WHERE {$where} ";
            $exe            = self::connect()->query($sql);

            return $exe;
    	}

        /** 
        * Store data to database
        *
        */
        public function create($arr)
        {
            $table          = explode('\\', get_called_class())[2];
            $r1             = array();
            $f1             = array();

            foreach($arr as $f2=>$r2)
            {
                array_push($f1,$f2);
                array_push($r1,"'".$r2."'");
            }

            $field          = implode(',',$f1);
            $row            = implode(',',$r1);

            $exe            = self::connect()->query("INSERT INTO {$table} ({$field}) VALUES ({$row})");

            return $exe;
        }

        /** 
        * Update data to database
        *
        */
        public function update($tabel_id,$data)
        {
            $table          = explode('\\', get_called_class())[2];
            $r1             = array();

            foreach($data as $f=>$r)
            {
                array_push($r1,$f."="."'".$r."'");
            }

            $key            = array_keys($tabel_id);
            $key            = $key[0];
            $id             = $tabel_id[$key];

            $row            = implode(',',$r1);

            $query          = self::connect()->query("UPDATE {$tabel} SET {$row} WHERE {$key}='{$id}'");

            return $query;
        }

        /** 
        * Delete data to database
        *
        */
        public function delete($tabel_id)
        {
            $table          = explode('\\', get_called_class())[2];
            $key            = array_keys($tabel_id);
            $key            = $key[0];
            $id             = $tabel_id[$key];

            $query          = self::connect()->query("DELETE FROM {$table} WHERE {$key}='{$id}'");

            return $query;      
        }

        /** 
        * Get insert id
        *
        */
        public function insert_id()
        {
            $query          = self::connect()->insert_id;

            return $query;
        }

	}