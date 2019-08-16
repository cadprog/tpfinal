<?php

include "../model/database.php";
include "../model/index.php";
 
 $db = new Database();
if (isset($_POST['publier'])){

	//recuperation des données
	$login_user = $_POST['login_user'];
	$titre = $_POST['titre'];
	$poste = $_POST['poste'];

$pubindex = new pubindex($titre,$poste,$login_user);
	//ajout avec connexion à la base inclu
	$db->addpub($pubindex);
	header("location:../View/index.php");
}



?>