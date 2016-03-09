<?php
class Forum{
	public $boardId;
	
	public function __construct($boardId = 0){
		global $db;
		$this -> boardId = $db -> SafeString($boardId);
	}
	
	public function LoadCategories(){
		global $db;
		
		$q = "SELECT 	". $db -> prefix ."categories.category_id, ". $db -> prefix ."categories.category_name,
						". $db -> prefix ."categories.category_desc, ". $db -> prefix ."categories.category_groups	
			FROM ". $db -> prefix ."categories";
			
		return $db -> ReturnData($q, true);
	}
	
	public static function LoadBoards($categoryId){
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
			WHERE ". $db -> prefix ."boards.board_category = '". $db -> SafeString($categoryId) ."'";
			
		return $db -> ReturnData($q, true);
	}
}
?>