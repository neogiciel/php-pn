<?php include('../include/global.php');?>
<?php include(APPLICATION_PATH."/templates/top_admin.php");?>
<?php include(APPLICATION_PATH."/db/dbmysql.php");?>
<?php

//--------------------------------
//Initialisation des variables
//--------------------------------
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

//--------------------------------
// suppression d'un mot
//--------------------------------
if($fAction == "Delete")
{
	dbDeletePersonne($fId);
	
}


//-------------------------------------------
// R�cuperation de la liste des services
//-------------------------------------------
$result = dbGetListPersonne();
$tempNbRecord =  dbGetNb($result);
//Navigation
$tempNbMaxLine = 20;
$tempIndexPage = 0;
?>
<!--- page --->
<table cellpadding="0" cellspacing="10" border="0" width="100%">
<tr>
<td class="titre" vAlign="top">
<IMG height="16" src="<?php print(APPLICATION_URL);?>/pix/puce.gif" width="21" align="absMiddle" name="image"> Personne</font>
<IMG height="16" src="<?php print(APPLICATION_URL);?>/pix/puce2.gif" width="11" align="absMiddle" name="image"> Gestion des Personnes</font>
</td>
</tr>


<tr>
<td class="txt" vAlign="top">

	<!------------ tableau ---------->
	<table cellpadding="2" cellspacing="2" width="80%" border="0">
	<tr>
	<td class="tabtitre" align="left" colspan=10>Liste des Peronnes</td>
	</tr>
	<?php
	//Aucun enregistrement
	if($tempNbRecord == 0 ){
	?>
	<tr>
	<td class="tabcell" colspan=10>&nbsp;<img src="<?php print(APPLICATION_URL);?>/pix/tree.gif" width="8"  height="13">&nbsp;
	Aucune Personne n&#180;est actuellemement disponible
	</tr>
	<?php
	}else{
	?>
	<?php	
	//Teste si le parametre page est existant
		$tempIndexPage = $fPage;
		//Calcul le nombre de page	
		$tempNbPage = $tempNbRecord / $tempNbMaxLine;

		if($tempNbPage >1){
			//Regarde si le nombre n est pas plus grand
			if($tempNbPage == $tempIndexPage)
				$tempIndexPage = $tempIndexPage -1;
	?>
		<tr><td class="tabcell" colspan=10>
		<?php	for($p=0;$p<$tempNbPage;$p++){
				if($p == $tempIndexPage){?>
					<a href="listpersonne.php?fPage=<?php print($p);?>" class="tablien" ><font color="white"><?php print($p+1);?></font></a> |
		<?php }else{ ?>
					<a href="listpersonne.php?fPage=<?php print($p);?>" class="tablien" ><?php print($p+1);?></a> |
		<?php }	}?>
		</td></tr>
	<?php	}?>
	
	<tr>
	<td class="tabtitre">&nbsp;ID</td>
	<td class="tabtitre" nowrap>Prenom</td>
	<td class="tabtitre" nowrap>Nom</td>
	<td class="tabtitre" nowrap>Age</td>
	<td class="tabtitre">&nbsp;</td>
	<td class="tabtitre">&nbsp;</td>
	</tr>
	
	<?php
		//Liste des enregistrement
		for($i=0;$i<$tempNbRecord;$i++){
			$colonne = dbNextLine($result);
			if(($i >=  $tempNbMaxLine * $tempIndexPage)&&($i <  $tempNbMaxLine * ($tempIndexPage+1))){
	?>
	<tr>
	<td class="tabcell" valign="top">&nbsp;<img src="<?php print(APPLICATION_URL);?>/pix/tree.gif" width="8"  height="13">&nbsp;<?php print($colonne['ID']);?></td>
	<td class="tabcell" valign="top">&nbsp;<?php print($colonne['NOM']);?></td>
	<td class="tabcell" valign="top">&nbsp;<i><?php print($colonne['PRENOM']);?></i>&nbsp;</td>
	<td class="tabcell" valign="top">&nbsp;<?php print($colonne['AGE']);?></td>
	

	<td class="tabcell" valign="top">
	<a href="editpersonne.php?fAction=Edit&fId=<?php printf($colonne['ID'])?>&fPage=<?php print($tempIndexPage);?>" class="tablien" >&nbsp;Editer&nbsp;</a>
	</td>
	<td class="tabcell" valign="top">
	<a href="javascript:confirmPopup('listpersonne.php?fAction=Delete&fId=<?php print($colonne['ID']);?>&fPage=<?php print($tempIndexPage);?>','Voulez Vous Supprimer cet Enregitrement ?');" class="tablien" >&nbsp;Supprimer&nbsp;</a>
	</td>
	</tr>
	<?php 	}
		}
	}
	?>
	</table>
	<!------------ /tableau ---------->

</td>
</tr>

</table>
<!--- /page --->
<?php include(APPLICATION_PATH."/templates/pied_admin.php");?>

