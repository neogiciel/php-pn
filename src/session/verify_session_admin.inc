<?php
//-------------------------------------------------------------------------
//	Fichier : verify_session_admin.inc
//	Module: session
// ------------------------------------------------------------------------
//------------------------------
// Verification de la session
//------------------------------
 if(isset($_SESSION['role'])&&($_SESSION['role'] == 'A')){
	//Ne Rien faire
}else{
	//redirectUrl(APPLICATION_URL);
}
?>

