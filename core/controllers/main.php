<?php
#HTTP Headers
require ("core/controllers/headers.php");

#Lets load the <head/> file
$template -> LoadTemplateFile('head', NULL, [
	'theme'				=>		$template -> theme,
	'language'		=>		$template -> language
]);

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
	case 'board':
		require ("core/classes/board.class.php");
		$board = new Board($pageid);
		$boardInfo = $board -> loadBoardData();
		SetPageTitle($forum['name'] . ' | ' . $boardInfo['board_name']);
		$language['boards'] = $template -> LoadLanguageFile('boards');
		$template -> LoadTemplateFile('board', 'boards', [
			'language'			=>		$language['boards'],
			'boardInfo'			=>		$boardInfo
		]);
	break;
	
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
		if(!$pageid){
			$language['registration'] = $template -> LoadLanguageFile('register');
			SetPageTitle($forum['name'] . ' | ' . $language['registration']['page_title']);
			$agreement = Main::SanitazeInputForJs(read_File('agreement.hbb'));
			$template -> LoadTemplateFile('register', 'auth', [
				'language'		=>		$language['registration'],
				'agreement'		=>		$agreement
			]);
		} else if($pageid == 'continue') {
			require ("core/classes/register.class.php");
			$agreement = Main::SanitazeInputForJs(read_File('agreement.hbb'));
			$language['registration'] = $template -> LoadLanguageFile('register');
			SetPageTitle($forum['name'] . ' | ' . $language['registration']['page_title']);

			$registerState = Registration::RegisterUser([
				'username'		=>		GetPost('register_username'),
				'email'			=>		GetPost('register_email'),
				'password'		=>		GetPost('register_password'),
				'password2'		=>		GetPost('register_password2')
			]);

			$template -> LoadTemplateFile('registerContinue', 'auth', [
				'language'		=>		$language['registration'],
				'regStatus'		=>		$registerState,
				'agreement'		=>		$agreement
			]);
		}
	break;

	default:
		SetPageTitle($forum['name']);
		require ("core/classes/forum.class.php");
		$forum = new Forum();
		$language['boards'] = $template -> LoadLanguageFile('boards');
		$categories = $forum -> LoadCategories();
		$cShfl = explode("|", GetCookie('cshfl'));
		foreach($cShfl as $catId)
			if(isset($catId))
				$catShuffle[$catId] = true;

		foreach($categories as $category)
			$boards[$category['category_id']] = $forum::LoadBoards($category['category_id']);

		$template -> LoadTemplateFile('boards', 'boards', [
			'themePath'		=>		$template -> templatePath . $template -> theme . '/',
			'language'		=>		$language['boards'],
			'categories'	=>		$forum -> LoadCategories(),
			'boards'		=>		$boards,
			'catShuffle'	=>		$catShuffle
		]);

	break;
}
?>
