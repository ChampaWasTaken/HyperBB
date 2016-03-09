<?php
class Board extends Forum{

	public function __construct($boardId){
		parent::__construct($boardId);
	}
	
	public function loadBoardData(){
		global $db;
		$q = "SELECT board_name, board_desc, board_groups FROM ". $db -> prefix ."boards WHERE board_id = '". $this -> boardId ."' LIMIT 1";
		return $db -> ReturnData($q);
	}
	
	public function loadSubboards(){
		global $db;
		
		$q = "SELECT 	". $db -> prefix ."boards.board_id, ". $db -> prefix ."boards.board_name,
						". $db -> prefix ."boards.board_desc, ". $db -> prefix ."boards.board_groups,
						". $db -> prefix ."boards.board_posts, ". $db -> prefix ."boards.board_visits,
						". $db -> prefix ."boards.board_last_post, ". $db -> prefix ."boards.board_last_poster,
						". $db -> prefix ."boards.board_last_post_title, ". $db -> prefix ."boards.board_last_post_date,
						". $db -> prefix ."users.name, ". $db -> prefix ."users.avatar
			FROM ". $db -> prefix ."boards
			INNER JOIN ". $db -> prefix ."users ON
			". $db -> prefix ."boards.board_last_poster = ". $db -> prefix ."users.id
			WHERE ". $db -> prefix ."boards.board_board = '". $this ->  boardId."'";
			
		return $db -> ReturnData($q, true);
	}
	
	public function loadThreads(){
		
	}
}
?>