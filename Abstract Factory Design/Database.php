<?php
	abstract class Database{
		
		public function connectDB();
		public function query();
		public function insertId();
		
		public function setHost($host){
			//Set Host Here...
		}
		
		public function setDB($db){
			//Set Database Here...
		}
		
		public function setUser($user){
			//Set User Here...
		}
		
		public function setPass($pass){
			//Set Password Here...
		}
	}

?>