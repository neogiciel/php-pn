<?php include('../include/global.php');?>
<?php include(APPLICATION_PATH."/templates/top_admin.php");?>
<?php include(APPLICATION_PATH."/db/dbmysql.php");?>
<?php 
if(isset($_GET['fAction'])){
	$fAction = $_GET['fAction']; 
}else{
	$fAction = ""; 
}
//--------------------------------
// modification du theme
//--------------------------------
if($fAction == "Add")
{
	
	$dbId = dbAddPersonne(
				$_POST['fNOM'],
				$_POST['fPRENOM'],
				$_POST['fAGE']);

		
}


?>
<!--- page --->
<table cellpadding="0" cellspacing="10" border="0" width="100%">
<tr>
<td class="titre" vAlign="top">
<IMG height="16" src="<?php print(APPLICATION_URL);?>/pix/puce.gif" width="21" align="absMiddle" name="image"> Personne</font>
<IMG height="16" src="<?php print(APPLICATION_URL);?>/pix/puce2.gif" width="11" align="absMiddle" name="image"> Ajout d'une Personne</font>
</td>
</tr>

<tr>
<td class="txt" vAlign="top">
	
	Fournisseur ajoute avec succes
	<!----------------- ajout admin ----------->
	<form action="listpersonne.php" method="post">
	<table cellpadding="2" cellspacing="2" width="60%" border="0">
	<td align="center" colspan="2">
	<input type="Submit" name="fValider" value=" Retour " class="forms"><br>
	</td>
	</tr>
	</table>
	</form>
	<!---------------- /ajout admin ------------>
</td>
</tr>

</table>
<!--- /page --->
<?php include(APPLICATION_PATH."/templates/pied_admin.php");?>

