<?php
/*
	Hyper Bulletin Board
	Coding and desing done by Champa -> 
	This is probably the most important file (not a template) which loads all of the templates
*/

#Start the buffer
ob_start();

#Lets include the forum configuration
require_once ("config.php");
require_once ("core/functions.php");

#Report all errors if we are under development else all of them except the deprecated ones
if($settings['underdev']) {
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
} else
	error_reporting(error_reporting() & (-1 ^ E_DEPRECATED));

#Include main classes and files
require ("external/libs/Smarty.class.php");
require ("core/classes/template.class.php");
require ("core/classes/user.class.php");
require ("core/classes/main.class.php");
require ("core/menu.php");

#Initialize our classes
$smarty		= 	new Smarty();
$template 	= 	new Template($settings['tempPath'], $settings['langPath'], $smarty);

#Load the user from the database (if he is logged in)
if(GetCookie('hbb')){
	$uid = $db -> SafeString(GetCookie('hbb'));
	$userClass = new User($uid);
	$user = $userClass -> loadData();
}

#Setting up classes
$smarty -> debugging		= 	false;
$smarty -> caching			= 	false;
$smarty -> cache_lifetime	= 	120;
$template -> language = 'English';
$template -> theme = 'Paper';

#The 'get' variables that we use to proccess requests
$page		= 	GetGet('page');
$pageid		=	GetGet('id');

#Anwsering requests (From this file, we do all of the back-end logic and display the theme templates)
require ("core/controllers/main.php");

#Destroy our database connection upon exiting the script
$db -> DestroyConnection();

#Flush the buffer
ob_flush();
?>