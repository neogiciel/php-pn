<?php
//Verification de la session visiteur
//include(APPLICATION_PATH."/session/verify_session_admin.php");
?>
<html>
<head>
<title>Test PHP</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" href="<?php print(APPLICATION_URL);?>/css/admin.css" type="text/css">
<link rel="icon" type="image/png" href="<?php print(APPLICATION_URL);?>/pix/flavico.png" />
<script language="JavaScript">
function confirmPopup(theURL,varText) 
{ //v2.0
	if(confirm(varText))
		document.location.href=theURL; 
};
</script>
</head>
<body bgcolor="#f5f6ec" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<?php include(APPLICATION_PATH."/templates/entete_admin.php");?>
<?php include(APPLICATION_PATH."/templates/menu_admin.php");?>
