<?php
class Database{
	public 	
			$server,
			$user,
			$password,
			$database,
			$prefix,
			$query;
	
	public function __construct($server, $user, $password, $database, $prefix){
		$this -> server			=		$server;
		$this -> user			=		$user;
		$this -> password		=		$password;
		$this -> database		=		$database;
		$this -> prefix			=		$prefix;
	}
	
	public function CreateConnection(){
		$con = new mysqli($this -> server, $this -> user, $this -> password, $this -> database);
		if($con -> connect_error){
			WriteLog("failed_connection", "Failed to connect to ". $this -> user ."@". $this -> server ." - ". $con -> connect_error);
			die("Connection @". $this -> server ." failed: " . $con -> connect_error);
		}
		return $con;
	}
	
	public function Error(){
		global $con;
		return $con -> errno;
	}
	
	public function DestroyConnection(){
		global $con;
		$con -> close();
	}
	
	public function TQuery(){
		global $con;
		return $con -> query($this -> query);
	}
	
	public function Query($q){
		global $con;
		return $con -> query($q);
	}
	
	public function CountRows($q){
		global $con;
		return $q -> num_rows;
	}
	
	public function SafeString($q){
		global $con;
		return $con -> real_escape_string($q);
	}
	
	public function MultyQuery($queries){
		if(!is_array($queries)) echo 'MultyQuery parametar must be an array!';
		else
			foreach($queries AS $query)
				$this -> Query($query);
	}
	
	public function ReturnData($q, $more = false){
		global $con;
		$site_data = array();
		if(!$more){
			$get = $con -> query($q);
			if(!$get) { echo $con -> errno; return false; }
			else{
				$site_data = $get -> fetch_array(MYSQLI_ASSOC);
				return $site_data;
			}
		} else if($more) {
			$get = $con -> query($q); $count = 0;
			if(!$get) { return false; }
			if($get -> num_rows > 0){
				while($sitedata = $get -> fetch_array(MYSQLI_ASSOC)){
					$site_data[$count] = $sitedata;
					$count ++;
				}
			}
			return $site_data;
		}
	}
}
?>