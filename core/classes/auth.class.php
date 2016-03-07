<?php
class Auth{
	public static function AuthenticateUser($user, $password){
		global $db;
		$user 			= 	$db -> SafeString($user);
		
		$q = "SELECT password, salt, hbbid FROM ". $db -> prefix ."users WHERE name = '". $user ."' LIMIT 1";
		$data = $db -> ReturnData($q);
		
		if(!empty($data['salt'])){
			if(Main::HashCompare($data['salt'], $password, $data['password']))
				return $data['hbbid'];
			else
				return false;
		} else
			return false;
	}
}
?>