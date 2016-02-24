<?php
class Auth{
	public static function AuthenticateUser($user, $password){
		global $db;
		$user 			= 	$db -> SafeString($user);
		$password 		= 	userHash($user, $password);
		$q = "SELECT hbbid FROM ". $db -> prefix ."users WHERE name = '". $user ."' AND password = '". $password ."' LIMIT 1";
		$data = $db -> ReturnData($q);
		if(!empty($data['hbbid']))
			return $data['hbbid'];
		else
			return false;
	}
}
?>