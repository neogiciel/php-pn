<?php
error_reporting(E_ALL & ~E_NOTICE );
ini_set('display_errors', 1);
//-------------------------------------------------------------------------
//	Fichier : global.inc
//	Module: include
//
// Description: fichier de configuration generale du service
// ------------------------------------------------------------------------
//fichier de trace
if(isset($config)==FALSE){

//--------------------------------
// Variables gloables
//--------------------------------
define('APPLICATION_PROD', 'PROD');
if(APPLICATION_PROD == "PROD"){
	//GLOBAL
	define('APPLICATION_PATH', "/var/www/html");
	define('APPLICATION_URL', "http://php.neogiciel.com");
	//DB
	define('APPLICATION_DB_SERVER', '192.168.1.72');
	define('APPLICATION_DB_LOGIN', 'neogiciel');
	define('APPLICATION_DB_PASSWORD', 'matthias');
	define('APPLICATION_DB_BASE', 'entreprise');
}else{
//GLOBAL
	define('APPLICATION_PATH', "/var/www/html");
	define('APPLICATION_URL', "http://php.neogiciel.com");
	//DB
	define('APPLICATION_DB_SERVER', '192.168.1.72');
	define('APPLICATION_DB_LOGIN', 'neogiciel');
	define('APPLICATION_DB_PASSWORD', 'matthias');
	define('APPLICATION_DB_BASE', 'entreprise');
}
//-------------------------------
// Redirection des urls
//-------------------------------
function redirectUrl($url){
	$url = "Location: $url";header($url);die();
}

//--------------------------------
// Demarrage des session
//--------------------------------
//Gestion des sessions
session_start();
//declaration de la value string
$session_valuestring = "PHPSESSID=".session_id();
};
//----------------------
// fichier de config
//-----------------------
$config = 1;
?>
