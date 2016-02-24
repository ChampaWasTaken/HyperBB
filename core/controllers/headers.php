<?php
switch($page){
	case 'login':
		require ("core/controllers/login.php");
	break;
	
	case 'logout':
		require ("core/controllers/logout.php");
	break;
}
?>