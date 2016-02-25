<?php
class User{
	public $uniqueId;
	
	public function __construct($uniqueId){
		$this -> uniqueId = $uniqueId;
	}
	
	public function loadData(){
		global $db;
		$db -> query = "SELECT name, member_group, notifications FROM users WHERE hbbid = '". $this -> uniqueId ."' LIMIT 1";
		return $db -> TQuery();
	}
}
?>