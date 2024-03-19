<?php
//*****************************************************************************************
// dbmysql.php
// Auteur : Patrice RADIN
// Description : fonction de la gestion de la base de donn�es	
//
//*****************************************************************************************


//*****************************************************************************************
// Methodes Generale de la base de donn�es
// 
//*****************************************************************************************

//-----------------
//Open connection
//-----------------
function dbOpenConnection(){
#$db = mysql_connect(APPLICATION_DB_SERVER,APPLICATION_DB_LOGIN,APPLICATION_DB_PASSWORD);
$db = new mysqli(APPLICATION_DB_SERVER,APPLICATION_DB_LOGIN,APPLICATION_DB_PASSWORD);
if ($db->connect_error) {
	die("Connection failed: " . $db->connect_error);
}
//mysql_select_db(APPLICATION_DB_BASE,$db);
$db->select_db(APPLICATION_DB_BASE);
return($db);
};
//-----------------
//Closse connection
//-----------------
function dbCloseConnection($db){
//mysql_close($db);
};

//---------------------------
// Nombre d'enregistrment
//---------------------------
function dbGetNb($result)
{
   if($result == "")
	return(0);
   $nb = mysqli_num_rows($result);
   return($nb);
};
//---------------------------
// Ligne enregistre
//---------------------------
function dbNextLine($result)
{
	$row = mysqli_fetch_array($result,MYSQLI_BOTH);
	return($row);
};

//----------------------------
// dbSelect
//----------------------------
function dbSQLSelect($dbQuery){
//ouverture de la connection
$db = dbOpenConnection();
//requete
$result = $db->query($dbQuery);
//printf(" RequeteSQL = ".$dbQuery);printf("<br>");
//fermeture de la connection
dbCloseConnection($db);
//retour
return($result);
}; 

//*****************************************************************************************
// PERSONNE
// Gestion des personnes
//*****************************************************************************************

//----------------------------
//dbGetListAdmin
//----------------------------
function dbGetListPersonne(){

//ouverture de la connection
$db = dbOpenConnection();

//requete
$result = $db->query("SELECT * FROM PERSONNE ORDER BY ID");

if (!$result) {
	traceError(1,"[dbMysql.inc] dbGetListPersonne = ".mysql_error());
}

//fermeture de la connection
dbCloseConnection($db);
//retour
return($result);
}; 


//----------------------------
//dbGetAdminFromId
//----------------------------
function dbGetPersonneFromId($id){

//ouverture de la connection
$db = dbOpenConnection();

//requete
$result = $db->query("SELECT * FROM PERSONNE WHERE ID = '$id'");

if (!$result) {
	traceError(1,"[dbMysql.inc] dbGetPersonneFromId = ".mysql_error());
}

//fermeture de la connection
dbCloseConnection($db);
//retour
return($result);
}; 


//----------------------------
//dbAddPersonne
//----------------------------
function dbAddPersonne($dbNOM,
					$dbPRENOM,
					$dbAGE){

//ouverture de la connection
$db = dbOpenConnection();

//requete
$result = $db->query("insert into PERSONNE (NOM,PRENOM,AGE) values ('$dbNOM','$dbPRENOM','$dbAGE')");

if (!$result) {
	traceError(1,"[dbMysql.inc] dbAddPersonne = ".mysql_error());
}

//Recupere nouvellement insere
$result = $db->query("SELECT LAST_INSERT_ID() AS ID FROM PERSONNE WHERE ID = LAST_INSERT_ID()");
$colonne = dbNextLine($result);
$dbId = $colonne['ID'];	
//fermeture de la connection
dbCloseConnection($db);
//retour
return($dbId);

}; 

 
//----------------------------
//dbUpdatePersonne
//----------------------------
function dbUpdatePersonne($dbId,
					$dbNOM,
					$dbPRENOM,
					$dbAGE){

					
//ouverture de la connection
$db = dbOpenConnection();

//requete
$result = $db->query("UPDATE PERSONNE
			SET NOM = '$dbNOM',
			PRENOM = '$dbPRENOM',
			EMAIL = '$dbAGE'",$db);

if (!$result) {
	traceError(1,"[dbMysql.inc] dbUpdatePeronne = ".mysql_error());
}

			
//fermeture de la connection
dbCloseConnection($db);
//retour
return($dbId);

}; 

//----------------------------
//dbDeletePersonne
//----------------------------
function dbDeletePersonne($dbId){

//ouverture de la connection
$db = dbOpenConnection();

//requete
$result = $db->query("DELETE FROM PERSONNE WHERE ID = '$dbId'");

if (!$result) {
	traceError(1,"[dbMysql.inc] dbDeletePersonne = ".mysql_error());
}

			   
//fermeture de la connection
dbCloseConnection($db);
//retour
return($result);

};

?>