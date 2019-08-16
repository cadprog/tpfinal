<?php

include "../model/database.php";
include "../model/Users.php";
 
 $db = new Database();
if (isset($_POST['envoyer'])){

	//recuperation des données
	$login = $_POST['login'];
	$pwd = $_POST['motdepasse'];


   $user = new User($login,$pwd);
	//ajout avec connexion à la base inclu
	$db->adduser($user);
	header("location:../View/index.php");
}



?>