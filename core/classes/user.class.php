<?php
class User{
	public $uniqueId;
	public $databaseId;

	public function __construct($uniqueId = 0, $databaseId = 0){
		global $db;
		$this -> uniqueId = $db -> SafeString($uniqueId);
		$this -> databaseId = $db -> SafeString($databaseId);
	}

	public function loadData(){
		global $db;
		$db -> query = "SELECT name, member_group, notifications FROM ". $db -> prefix ."users
		WHERE hbbid = '". $this -> uniqueId ."' LIMIT 1";
		return $db -> TQuery();
	}

	public function loadUserCard(){
		global $db;
		$q = "SELECT name, avatar, cover, last_online, register_date, posts FROM ". $db -> prefix ."users
		WHERE id = '". $this -> databaseId ."' LIMIT 1";

		return $db -> ReturnData($q);
	}
}
?>
