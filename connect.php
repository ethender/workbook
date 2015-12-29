<?php
	//class for connecting the databases
	class connect {
		private $host = 'localhost';
		private $username ='root';
		private $password ='19931993';
		private $database ='test';

		//construtor
		function  __construct(){
			$conn = $this->databaseConnect();
			if(!empty($conn)){
				$this->selectDatabase($conn);
			}
		}	
		
		// database connect
		function  databaseConnect(){
			if(($connection = mysql_connect($this->host,$this->username,$this->password)) === false)die("could not connect database");
			return  $connection;
		}
		
		//select the database
		function selectDatabase($connection){
			if((mysql_select_db($this->database,$connection)) === false)die("could not select the database");
		}
	}

?>