<?php
class Main{
	
	/*
		* The 'HyperHash' function makes strong hashes using random salts
		
		* @param $string - the string that is going to be hashed
	*/
	
	public static function HyperHash($string){
		$hash['salt'] = mcrypt_create_iv(22, MCRYPT_DEV_URANDOM);
		$hash['password'] = password_hash($string, PASSWORD_BCRYPT, ['cost' => 9, 'salt' => $hash['salt']]);
		return $hash;
	}
	
	/*
		* This function compares two hashed strings
		
		* @param $salt - the salt for the provided string
		* @param $string - the string you want to hash with the provided salt
		* @param $source - the hash you want to compare the string with
		* @return - true if the hashes compare, false if they don't
	*/
	
	public static function HashCompare($salt, $string, $source){
		$compare = password_hash($string, PASSWORD_BCRYPT, ['cost' => 9, 'salt' => $salt]);
		if($compare == $source) return true;
		else return false;
	}
	
	/*
		* This function checks if an email string is valid
		
		* @param $email - the string you want to check
		* @return true if its valid, false if its not
	*/
	
	public static function ValidEmail($email){
		if(strpos($email, '@') === false || strpos($email, '.') === false) return false;
		else return true;
	}
	
	/*
		* With this, we can sanitaze input so it can be passed to javascript functions
		
		* @param $string - the string we want to sanitaze
		* @return - sanitazed string
	*/
	
	public static function SanitazeInputForJs($string){
		return str_replace("\r\n", "", $string);
	}
}
?>