<?php
class fileInit{
	public static function load($file, $type){
		switch($type){
			case 'js':
				echo '<script src="', $file ,'"></script>';
			break;
		}
		return true;
	}
}
?>