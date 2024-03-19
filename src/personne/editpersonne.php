<?php include('../include/global.php');?>
<?php include(APPLICATION_PATH."/templates/top_admin.php");?>
<?php include(APPLICATION_PATH."/db/dbmysql.php");?>
<?php 

if(isset($_GET['fAction'])){
	$fAction = $_GET['fAction']; 
}else{
	$fAction = ""; 
}

if(isset($_GET['fId'])){
	$fId = $_GET['fId']; 
}else{
	$fId = ""; 
}
if(isset($_GET['fPage'])){
	$fPage = $_GET['fPage']; 
}else{
	$fPage = 0; 
}
//-------------------------------------------
// R�cuperation des information du Terrains
//-------------------------------------------
$result= dbGetPersonneFromId($fId);
$tempNbRecord =  dbGetNb($result);
$colonne = dbNextLine($result);

?>
<!--- page --->
<table cellpadding="0" cellspacing="10" border="0" width="100%">
<tr>
<td class="titre" vAlign="top" colspan="2">
<IMG height="16" src="<?php print(APPLICATION_URL);?>/pix/puce.gif" width="21" align="absMiddle" name="image"> Personne</font>
<IMG height="16" src="<?php print(APPLICATION_URL);?>/pix/puce2.gif" width="11" align="absMiddle" name="image"> Visualiser une Personne</font>
</td>
</tr>
<tr>
<td class="txt" vAlign="top">

	<!----------------- ajout admin ----------->
	<form action="listpersonne.php?fPage=<?php print($fPage)?>" method="post">
	<table cellpadding="2" cellspacing="2" width="80%" border="0">
	<tr><td class="tabtitre" colspan="2">Personne</td></tr>
	<tr>
	<td class="tabcell" width="200">ID :</td>
	<td class="tabcell"><?php printf($fId);?></td>
	</tr>
	<tr>
	<td class="tabcell" width="200">Prenom :</td>
	<td class="tabcell"><?php printf($colonne['PRENOM']);?></td>
	</tr>
	<tr>
	<td class="tabcell" width="200">Nom :</td>
	<td class="tabcell"><?php printf($colonne['NOM']);?></td>
	</tr>
	<tr>
	<td class="tabcell" width="200">Age :</td>
	<td class="tabcell"><?php printf($colonne['AGE']);?></td>
	</tr>
	
	<tr>
	<td align="center" colspan="2">
	<input type="Submit" name="fValider" value=" Retour " class="forms"><br>
	</td>
	</tr>
	</table>
	</form>
	<!---------------- /ajout admin ------------>
</td>
<td class="txt" width="40%" vAlign="top">


</td>
</tr>
</table>
<!--- /page --->
<?php include(APPLICATION_PATH."/templates/pied_admin.php");?>

