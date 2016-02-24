<?php
class Installation{
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
		global $con, $db;
		if(empty($adminData['name']) || empty($adminData['email']) || empty($adminData['password']) || empty($adminData['password2'])) return false;
		else if($adminData['password'] == $adminData['password2']){
			$q = "INSERT INTO `users` (`hbbid`, `name`, `password`, `email`, `member_group`, `register_date`) VALUES
			('". userHash($adminData['name'], $adminData['email']) ."', '". $adminData['name'] ."',
			'". userHash($adminData['name'], $adminData['password']) ."', '". $adminData['email'] ."',
			'1', '". time() ."')";
			
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
	}
	
	public static function CreateUserbase(){
		global $con, $db;
		$db -> MultyQuery(array(
			"CREATE TABLE IF NOT EXISTS `users` (
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
			"ALTER TABLE `users`
				ADD PRIMARY KEY (`id`);",
			"ALTER TABLE `users`
			  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;"
		));
	}
}
?>