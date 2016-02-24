<?php
#HTTP Headers
require ("core/controllers/headers.php");

#Lets load the <head/> file
$template -> LoadTemplateFile('head');

#Then maybe include the main css and javascript file
$template -> LoadCss('main');
$template -> LoadJavascript('main');

#Also the real header because it's shown on every page :)
$language['header'] = $template -> LoadLanguageFile('header');
$header_array = array(
	'themePath'		=>		$template -> templatePath . $template -> theme . '/',
	'language'		=>		$language['header'],
	'userMenu'		=>		CreateUserMenu()
);
$template -> LoadTemplateFile('header', 'header', $header_array);

switch($page){
	case 'login':
		if(!$pageid)
			$template -> LoadTemplateFile('login', 'login', array(
				'language'		=>		$language['login'],
				'failedLogin'	=>		false
			));
		else if(!$account)
			$template -> LoadTemplateFile('login', 'login', array(
				'language'		=>		$language['login'],
				'failedLogin'	=>		true
			));
	break;
	
	case 'logout':
		if($uid){
			
		}
	break;
	
	default:
		SetPageTitle($forum['name']);
		$template -> LoadTemplateFile('index');
	break;
}
?>