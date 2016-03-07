<?php
class Installation extends Main{
	public static function formatOffset($offset){
        $hours = $offset / 3600;
        $remainder = $offset % 3600;
        $sign = $hours > 0 ? '+' : '-';
        $hour = (int) abs($hours);
        $minutes = (int) abs($remainder / 60);

        if ($hour == 0 AND $minutes == 0) {
            $sign = ' ';
        }
        return $sign . str_pad($hour, 2, '0', STR_PAD_LEFT) .':'. str_pad($minutes,2, '0');
	}
	
	public static function CreateAdminAccount($adminData){
		global $db;
		if(empty($adminData['name']) || empty($adminData['email']) || empty($adminData['password']) || empty($adminData['password2'])) return false;
		else if($adminData['password'] == $adminData['password2']){
			$password = Installation::HyperHash($adminData['password']);
			$q = "INSERT INTO `". $db -> prefix ."users` (`hbbid`, `name`, `password`, `email`, `member_group`, `register_date`, `salt`) VALUES
			('". userHash($adminData['name'], $adminData['email']) ."', '". $adminData['name'] ."',
			'". $password['password'] ."', '". $adminData['email'] ."', '1', '". time() ."', '". $password['salt'] ."')";
			
			$db -> Query($q);
			return true;
		} else
			return false;
	}
	
	public static function EditConfigFile($configData){
		$config = read_File('config.php');
		$config = str_replace('forum_name', 	$configData['forum_name'], 		$config);
		$config = str_replace('forum_base_url', $configData['forum_base_url'], 	$config);
		$config = str_replace('forum_timezone', $configData['forum_timezone'], 	$config);
		write_File('config.php', $config);
	}
	
	public static function CreateConfigFile($configData){
		$config = read_File('install/config.hbbcfg');
		$config = str_replace('db_type', 		$configData['db_type'], 		$config);
		$config = str_replace('db_server', 		$configData['db_server'], 		$config);
		$config = str_replace('db_user', 		$configData['db_user'], 		$config);
		$config = str_replace('db_password', 	$configData['db_password'], 	$config);
		$config = str_replace('db_database', 	$configData['db_database'], 	$config);
		$config = str_replace('db_prefix', 		$configData['db_prefix'], 		$config);
		write_File('config.php', $config);
	}
	
	public static function CreateDatabase(){
		Installation::CreateUserbase();
		Installation::CreateCategorybase();
		Installation::CreateBoardbase();
	}
	
	public static function CreateCategorybase(){
		global $db;
		$db -> MultyQuery([
			"CREATE TABLE IF NOT EXISTS `". $db -> prefix ."categories` (
			  `id` int(11) NOT NULL,
			  `category_name` varchar(255) NOT NULL,
			  `category_desc` varchar(255) NOT NULL,
			  `category_subforum` int(11) NOT NULL,
			  `category_groups` text NOT NULL
			) ENGINE=InnoDB DEFAULT CHARSET=latin1;",
			"ALTER TABLE `". $db -> prefix ."categories`
				ADD PRIMARY KEY (`id`);",
			"INSERT INTO `". $db -> prefix ."categories` (`category_id`, `category_name`, `category_desc`, `category_subforum`, `category_groups`) VALUES
			(1, 'HyperBB Development', 'Just a random category passing through', 0, ''),
			(2, 'HyperBB Development', 'Just a random category passing through', 0, '');"
		]);
	}
	
	public static function CreateBoardbase(){
		global $db;
		$db -> MultyQuery([
			"CREATE TABLE IF NOT EXISTS `". $db -> prefix ."boards` (
				  `board_id` int(11) NOT NULL,
				  `board_name` varchar(255) NOT NULL,
				  `board_desc` varchar(510) NOT NULL,
				  `board_groups` text NOT NULL,
				  `board_category` int(11) NOT NULL
				) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;",
			"ALTER TABLE `". $db -> prefix ."boards`
				ADD PRIMARY KEY (`board_id`);",
			"INSERT INTO `". $db -> prefix ."boards` (`board_id`, `board_name`, `board_desc`, `board_groups`, `board_category`) VALUES
			(1, 'Test board', 'One test board', '', 1),
			(2, 'Test board', '', '', 1),
			(3, 'Test board', 'Another one', '', 2);"
		]);
	}
	
	public static function CreateUserbase(){
		global $db;
		$db -> MultyQuery(array(
			"CREATE TABLE IF NOT EXISTS `". $db -> prefix ."users` (
			  `id` int(11) NOT NULL,
			  `hbbid` varchar(100) NOT NULL,
			  `name` varchar(80) NOT NULL,
			  `password` varchar(80) NOT NULL,
			  `email` varchar(80) NOT NULL,
			  `member_group` tinyint(3) NOT NULL,
			  `notifications` tinyint(3) NOT NULL,
			  `register_date` int(11) NOT NULL,
			  `last_login` int(11) NOT NULL,
			  `theme` varchar(80) NOT NULL,
			  `language` varchar(80) NOT NULL
			) ENGINE=InnoDB DEFAULT CHARSET=latin1;",
			"ALTER TABLE `". $db -> prefix ."users`
				ADD PRIMARY KEY (`id`);",
			"ALTER TABLE `". $db -> prefix ."users`
			  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;"
		));
	}
}
?>