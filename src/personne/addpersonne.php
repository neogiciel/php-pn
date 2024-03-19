<?php include('../include/global.php');?>
<?php include(APPLICATION_PATH."/templates/top_admin.php");?>
<?php include(APPLICATION_PATH."/db/dbmysql.php");?>
<!--- page --->
<table cellpadding="0" cellspacing="10" border="0" width="100%">
<tr>
<td class="titre" vAlign="top">
<IMG height="16" src="<?php print(APPLICATION_URL);?>/pix/puce.gif" width="21" align="absMiddle" name="image"> Fournisseur</font>
<IMG height="16" src="<?php print(APPLICATION_URL);?>/pix/puce2.gif" width="11" align="absMiddle" name="image"> Ajouter un Fournisseur</font>
</td>
</tr>
<tr>
<td class="txt" vAlign="top">
  
	<!----------------- ajout admin ----------->
	<form action="addpersonneb.php?fAction=Add" method="post">
	<table cellpadding="2" cellspacing="2" width="60%" border="0">
	<tr><td class="tabtitre" colspan="2">Ajouter un Fournisseur</td></tr>
	<tr><td class="tabcell" width="200">Prenom :</td><td class="tabcell"><input type="text" class="forms" name="fNOM" value="" size="20"></td></tr>
	<tr><td class="tabcell" width="200">Nom :</td><td class="tabcell"><input type="text" class="forms" name="fPRENOM" value="" size="20"></td></tr>
	<tr><td class="tabcell" width="200">Age :</td><td class="tabcell"><input type="text" class="forms" name="fAGE" value="" size="20"></td></tr>
	
	<tr>
	<td align="center" colspan="2">
	<input type="Submit" name="fValider" value=" Ajouter " class="forms"><br>
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

