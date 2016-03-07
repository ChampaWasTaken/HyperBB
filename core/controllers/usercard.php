<?php
/*
  The user card handler
  It is called via jquery onclick event
*/
require ("../functions.php");
if(GetPost('uid')){
  require ("../../config.php");
  require ("../../external/libs/Smarty.class.php");
  require ("../classes/template.class.php");
  require ("../classes/user.class.php");

  $smarty   = new Smarty();
  $template = new Template('../../'.$settings['tempPath'], '../../'.$settings['langPath'], $smarty);
  $user     = new User(NULL, GetPost('uid'));
  $template -> theme = GetPost('theme');
  $template -> language = GetPost('language');
  $language['usercard'] = $template -> LoadLanguageFile('usercard');
  $template -> LoadTemplateFile('usercard', NULL, [
    'language'    =>    $language['usercard'],
    'user'        =>    $user -> loadUserCard(),
	'userId'	  =>	GetPost('uid')
  ]);

  $db -> DestroyConnection();
}
?>
