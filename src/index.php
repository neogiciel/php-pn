<?php include("include/global.php");?>
<!------------ test du login et password -------->
<?php require_once(APPLICATION_PATH.'/templates/top_admin.php');?>
<!--- page --->
<table cellpadding="0" cellspacing="10" border="0" width="100%">
<tr>
<td class="titre" vAlign="top">
<IMG height="16" src="<?php print(APPLICATION_URL);?>/pix/puce.gif" width="21" align="absMiddle" name="image">Administration</font>
</td>
</tr>
<tr>
<td vAlign="top" class="txt"> 
Bienvenue sur l&#180;interface d&#180;administration.
	<center>
	<table cellpadding="2" cellspacing="2" border="0">
	<tr>
	<td><a href="<?php print(APPLICATION_URL);?>/personne/listpersonne.php" border=0><img src="<?php print(APPLICATION_URL);?>/pix/home_admin.png" align="absMiddle" name="image" border=0></a></td>
	</tr>
	</table>
	</center>
	
	
<td>
</tr>
</table>
<!--- /page --->
<?php require_once(APPLICATION_PATH.'/templates/pied_admin.php');?>
