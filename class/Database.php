<?php

class Database{
	// property
	public $host 	 = DB_HOST;
	public $user 	 = DB_USER;
	public $password = DB_PASS;
	public $dbname 	 = DB_NAME;

	public $link;
	public $error;

	private function connectDB(){
		// mysqli connection
		$this->link = new mysqli($this->host, $this->user, $this->password, $this->dbname);

		if(!$this->link){
			$this->error = "Db connection failed".$this->link->mysqli_error();
			return false;
		}
	}


}






?>