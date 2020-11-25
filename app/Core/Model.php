<?php
	
	namespace App\Core;
	
	Class Model
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
		* Store data to database
		*
		*/
		public function store($tabel,$data)
		{
			$r1 	= array();
			$f1 	= array();

			foreach($data as $f2=>$r2)
			{
				array_push($f1,$f2);
				array_push($r1,"'".$r2."'");
			}

			$field 	= implode(',',$f1);
			$row 	= implode(',',$r1);

			$query 	= self::connect()->query("INSERT INTO {$tabel}({$field}) VALUES ({$row})");

			return $query;
		}
	
		/** 
		* Update data to database
		*
		*/
		public function update($tabel_id,$tabel,$data)
		{
			$r1 	= array();

			foreach($data as $f=>$r)
			{
				array_push($r1,$f."="."'".$r."'");
			}

			$key 	= array_keys($tabel_id);
			$key 	= $key[0];
			$id 	= $tabel_id[$key];

			$row 	= implode(',',$r1);

			$query 	= self::connect()->query("UPDATE {$tabel} SET {$row} WHERE {$key}='{$id}'");

			return $query;
		}

		/** 
		* Delete data to database
		*
		*/
		public function delete($tabel_id,$table)
		{
			$key 	= array_keys($tabel_id);
			$key 	= $key[0];
			$id 	= $tabel_id[$key];

			$query 	= self::connect()->query("DELETE FROM {$table} WHERE {$key}='{$id}'");

			return $query;		
		}

		/** 
		* Get insert id
		*
		*/
		public function insert_id()
		{
			$query 	= self::connect()->insert_id;

			return $query;
		}
		
	}