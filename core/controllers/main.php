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
$template -> LoadTemplateFile('header', 'header', [
	'themePath'		=>		$template -> templatePath . $template -> theme . '/',
	'language'		=>		$language['header'],
	'userMenu'		=>		CreateUserMenu()
]);

switch($page){
	case 'login':
		if(!$pageid)
			$template -> LoadTemplateFile('login', 'auth', [
				'language'		=>		$language['login'],
				'failedLogin'	=>		false
			]);
		else if(!$account)
			$template -> LoadTemplateFile('login', 'auth', [
				'language'		=>		$language['login'],
				'failedLogin'	=>		true
			]);
	break;
	
	case 'register':
		$language['registration'] = $template -> LoadLanguageFile('register');
		SetPageTitle($forum['name'] . ' | ' . $language['registration']['page_title']);
		$template -> LoadTemplateFile('register', 'auth', [
			'language'		=>		$language['registration'],
			'failedLogin'	=>		false
		]);
	break;
	
	default:
		SetPageTitle($forum['name']);
		$template -> LoadTemplateFile('index');
	break;
}
?>