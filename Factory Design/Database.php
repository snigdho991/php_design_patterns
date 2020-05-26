<?php

	class Database{
		public $link;
		public $driver;
		
		public function setDriver($driver){
			$this->driver = $driver;
		}
		
		public function connectionDB(){
			if($this->driver == "mysql"){
				$mngmysql = new ManageMysql();
				$mngmysql->setHost($host);
				$mngmysql->setDB($db);
				$mngmysql->setUser($user);
				$mngmysql->setPass($pass);
				$this->link = $mngmysql->connectDB();
			} elseif($this->driver == "sqlite"){
				$mngsqlite = new ManageSqlite();
				$mngsqlite->setHost($host);
				$mngsqlite->setDB($db);
				$mngsqlite->setUser($user);
				$mngsqlite->setPass($pass);
				$this->link = $mngsqlite->connectDB();
			}
		}
	}
?>