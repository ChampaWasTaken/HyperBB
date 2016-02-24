<?php
function CreateUserMenu(){
	global $db, $language;
	
	$menu_base = array(
		$language['header']['menu_home']		=>		'index.php'
	);
	
	$menu_guest = array(
		$language['header']['menu_login']		=>		'index.php?page=login',
		$language['header']['menu_register']	=>		'index.php?page=register'
	);
	
	$menu_user = array(
		$language['header']['menu_profile']		=>		'index.php?page=profile',
		$language['header']['menu_search']	=>		'index.php?page=search',
		$language['header']['menu_logout']	=>		'index.php?page=logout'
	);
	
	if(!GetCookie('hbb'))
		$menu = array_merge($menu_base, $menu_guest);
	else
		$menu = array_merge($menu_base, $menu_user);
	
	return $menu;
}
?>