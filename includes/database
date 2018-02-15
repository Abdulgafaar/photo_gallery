<?php
require_once("config.php");
/**
* This class is to connect to the database of photo_gallary
*/
class MySQLDatabase {
	  private $connection;
	function __construct(){
		$this->open_connection();
	}
	public function open_connection()
	{
		$this->connection =mysql_connect(DB_SERVER, DB_USER, DB_PASS);
		if(!$this->connection){
			die("database connection failed: ". mysql_error());
		}else {
			$db_select = mysql_select_db(DB_NAME, $this->connection);
			if (!$db_select){
				die("Database selection failed: " . mysql_error());
			}
		}
	}
    public function close_connection(){
	    if (isset($this->connection)){
		   mysql_close($this->connection);
		   unset($this->connection);
	    }
    }
    

    public function query($sql){
    	$result = mysql_query($sql, $this->connection);
    	$this->confirm_query($result_set);
    	if(!$result){
    		die("Database query failed: " .  mysql_error());
    	}
    	return $result;
    }
    private function confirm_query($result){
    	if(!$result){
    		die("Database query failed: " .  mysql_error());
    	}
    }
}
$database = new MySQLDatabase();
$db =& $database;


?>
