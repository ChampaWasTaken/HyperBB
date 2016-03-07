<?php
require ("install/index.html");
require ("core/functions.php");
require ("core/classes/fileInit.class.php");

#Define the root for further usage
define('HROOT', dirname(__FILE__).'/');

#Set up the content-type
header('Content-type: text/html; charset=utf-8');

#Set up the script locale to prevent buggs with character functions
setlocale(LC_CTYPE, 'C');

#Enable the error reporting
error_reporting(E_ALL);

#Disable the php load limit
@set_time_limit(0);

#Get the install step
$step = GetGet('step');

#Load up some files
fileInit::load('install/install.js', 'js');

#Set the page title
if($step && $step != 1)
	SetPageTitle('HyperBB Installation '. $step .'/7');
else
	SetPageTitle('Welcome to HyperBB');

switch($step){
	case 1:
		require ("install/templates/home.php");
	break;
	
	case 2:
		require ("install/templates/terms.php");
	break;
	
	case 3:
		require ("install/templates/database.php");
	break;
	
	case 4:
		require ("core/classes/main.class.php");
		require ("install/install.class.php");
		$configData = array(
			'db_type'		=>		GetPost('db_type'),
			'db_server'		=>		GetPost('db_server'),
			'db_user'		=>		GetPost('db_user'),
			'db_password'	=>		GetPost('db_password'),
			'db_database'	=>		GetPost('db_database'),
			'db_prefix'		=>		GetPost('db_prefix')
		);
		Installation::CreateConfigFile($configData);
		require ("config.php");
		
		//Installation::CreateDatabase();
		
		$utc = new DateTimeZone('UTC');
		$dt = new DateTime('now', $utc);
		
		require ("install/templates/community.php");
		
		$db -> DestroyConnection();
	break;
	
	case 5:
		require ("core/classes/main.class.php");
		require ("install/install.class.php");
		$configData = array(
			'forum_name'		=>		GetPost('community_name'),
			'forum_base_url'	=>		GetPost('community_url'),
			'forum_timezone'	=>		GetPost('community_timezone')
		);
		Installation::EditConfigFile($configData);
		require ("install/templates/admincreation.php");
	break;
	
	case 6:
		require ("core/classes/main.class.php");
		require ("install/install.class.php");
		require ("config.php");
		$adminData = array(
			'name'				=>		$db -> SafeString(GetPost('admin_username')),
			'email'				=>		$db -> SafeString(GetPost('admin_email')),
			'password'			=>		$db -> SafeString(GetPost('admin_password')),
			'password2'			=>		$db -> SafeString(GetPost('admin_password2')),
		);
		
		$creation = Installation::CreateAdminAccount($adminData);
		
		require("install/templates/status.php");
		
		$db -> DestroyConnection();
	break;
	
	case 7:
		require ("install/templates/finished.php");
	break;
	
	default:
		require ("install/templates/home.php");
	break;
}
?>