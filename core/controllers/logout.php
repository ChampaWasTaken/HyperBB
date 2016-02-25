<?php
if(GetCookie('hbb'))
	DestroyCookies();

Redirect('index.php');
?>