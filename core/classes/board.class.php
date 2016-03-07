<?php
class Board{
	public $boardId;
	
	public function __construct($boardId){
		global $db;
		$this -> boardId = $db -> SafeString($boardId);
	}
	
	public function loadBoardData(){
		global $db;
		$q = "SELECT board_name, board_desc, board_groups FROM ". $db -> prefix ."boards WHERE board_id = '". $this -> boardId ."' LIMIT 1";
		return $db -> ReturnData($q);
	}
}
?>