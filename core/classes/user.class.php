<?php
class User{
	public $uniqueId;
	
	public function __construct($uniqueId){
		$this -> uniqueId = $uniqueId;
	}
	
	public function loadData(){
		global $db;
		$q = "SELECT name, member_group, notifications FROM ". $db -> prefix ."users WHERE hbbid = '". $this -> uniqueId ."' LIMIT 1";
		return $db -> ReturnData($q);
	}
}
?>