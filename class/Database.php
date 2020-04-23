<?php
include_once 'config.php';

class Database{
	// property
	public $host 	 = DB_HOST;
	public $user 	 = DB_USER;
	public $password = DB_PASS;
	public $dbname 	 = DB_NAME;

	public $link;
	public $error;

	public function __construct(){
		$this->connectDB();
	}

	private function connectDB(){
		// mysqli connection
		$this->link = new mysqli($this->host, $this->user, $this->password, $this->dbname);

		if(!$this->link){
			$this->error = "Db connection failed".$this->link->mysqli_error();
			return false;
		}
	}


	// Select or Read Database
	public function select($query){
		$result = $this->link->query($query) or die ($this->link->error.__LINE__);
		if($result->num_rows > 0){
			return $result;
		}
		else{
			return false;
		}

	}

}






?>