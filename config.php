<?php
require ("core/database/database.mysqli-oop.php");

#Database setup
$database['type']		=		'database.mysqli-oop';
$database['server']		=		'localhost';
$database['user']		=		'root';
$database['password']	=		'';
$database['database']	=		'hbb';
$database['prefix']		=		'';

#Community info
$forum['name']			=		'HyperBB Development';
$forum['base_url']		=		'http://localhost/hbb';
$forum['timezone']		=		'Europe/Sarajevo';

#Some forum settings
$settings['tempPath']	=		'themes/';
$settings['langPath']	=		'languages/';
$settings['underdev']	=		true;

$db = new Database($database['server'], $database['user'], $database['password'], $database['database'], $database['prefix']);

$con = $db -> CreateConnection();
?>