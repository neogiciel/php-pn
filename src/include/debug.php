<?php 
//-------------------------------------------------------------------------
//	Fichier : debug.inc
//	Module: include
//
//	Auteur : Patrice RADIN
//
// Description: affichage des varible de debug
// ------------------------------------------------------------------------
?>
<font color="#666666">
<hr width="100%">
<b>Variables d'envirronements:</b><br>
HTTP_ACCEPT : <?php if(isset($_SERVER['HTTP_ACCEPT'])){print($_SERVER['HTTP_ACCEPT']);};?><br>
HTTP_ACCEPT_ENCODING : <?php if(isset($_SERVER['HTTP_ACCEPT_ENCODING'])){print($_SERVER['HTTP_ACCEPT_ENCODING']);};?><br>
HTTP_ACCEPT_LANGUAGE : <?php if(isset($_SERVER['HTTP_ACCEPT_LANGUAGE'])){print($_SERVER['HTTP_ACCEPT_LANGUAGE']);};?><br>
HTTP_COOKIE : <?php if(isset($_SERVER['HTTP_COOKIE'])){print($_SERVER['HTTP_COOKIE']);};?><br>
HTTP_COOKIE_DATA : <?php if(isset($_SERVER['HTTP_COOKIE_DATA'])){print($_SERVER['HTTP_COOKIE_DATA']);};?><br>
HTTP_HOST : <?php if(isset($_SERVER['HTTP_HOST'])){print($_SERVER['HTTP_HOST']);};?><br>
HTTP_REFERER : <?php if(isset($_SERVER['HTTP_REFERER'])){print($_SERVER['HTTP_REFERER']);};?><br>
REMOTE_ADDR : <?php if(isset($_SERVER['REMOTE_ADDR'])){print($_SERVER['REMOTE_ADDR']);};?><br>
REQUEST_URI : <?php if(isset($_SERVER['REQUEST_URI'])){print($_SERVER['REQUEST_URI']);};?><br>
HTTP_USER_AGENT : <?php if(isset($_SERVER['HTTP_USER_AGENT'])){print($_SERVER['HTTP_USER_AGENT']);};?><br>
QUERY_STRING : <?php if(isset($_SERVER['QUERY_STRING'])){print($_SERVER['QUERY_STRING']);};?><br>
REMOTE_ADDR : <?php if(isset($_SERVER['REMOTE_ADDR'])){print($_SERVER['REMOTE_ADDR']);};?><br>
REMOTE_PORT : <?php if(isset($_SERVER['REMOTE_PORT'])){print($_SERVER['REMOTE_PORT']);};?><br>

<hr width="100%">
<b>Variables CGI:</b><br>
<?php if(isset($_POST)){
 	 	while(list($lvar,$lvaleur) = each($_POST)){
?>
		FORM.<?php print("$lvar")?> : <?php print("$lvaleur")?><br>
<?php 
 		}
 }
?>
 
<?php if(isset($_GET)){
 	 	while(list($lvar,$lvaleur) = each($_GET)){
?>
		URL.<?php print("$lvar")?> : <?php print("$lvaleur")?><br>
<?php 
 		}
 }
?>
 <!------------ /code a mettre --------------------->
 
<?php if(isset($_SESSION)){
 	 	while(list($lvar,$lvaleur) = each($_SESSION)){
?>
		SESSION.<?php print("$lvar")?> : <?php print("$lvaleur")?><br>
<?php 
 		}
 }
?>


<hr width="100%">
</font>

