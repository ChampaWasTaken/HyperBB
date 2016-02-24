<?php
if(!$pageid){
	$language['login'] = $template -> LoadLanguageFile('login');
	SetPageTitle($forum['name'] . ' | ' . $language['login']['page_title']);
} else if($pageid == 'auth') {
	require ("core/classes/auth.class.php");
	
	$language['login'] = $template -> LoadLanguageFile('login');
	$account = Auth::AuthenticateUser(GetPost('login_username'), GetPost('login_password'));
	if($account)
		HBBSetCookie('hbb', $account, time() + 3600);
}
?>