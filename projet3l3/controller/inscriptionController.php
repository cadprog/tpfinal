<?php
	

	if (isset($_POST['valider'])){

       //recuperation des donnee
		$nom = $_POST['nominscrit'];
		$prenom = $_POST['prenominscrit'];
		$email = $_POST['emailinscrit'];
		$telephone = $_POST['telephoneinscrit'];
		$login = $_POST['logininscrit'];
		$motdepasse = $_POST['pwdinscrit'];
		$etat = $_POST['etat'];

		//Connexion a la base de donnee
       $host = 'localhost';
		$user = 'root';
		$pwd = '';
		$dbname = 'projet1l3';
		$connect = mysqli_connect($host, $user, $pwd, $dbname);
/*if ($connect) {
	echo "connexion success";
}
else{
	echo "erreur";
}*/
		//insertion a la base de donnee
      $sql1 =mysqli_query($connect,"INSERT INTO inscrits VALUES(NULL,'$nom','$prenom','$email','$telephone','$login','$motdepasse',$etat)") ;
        mysqli_execute($sql1);
        //echo "$nom, $prenom, $email, $telephone, $login, $motdepasse";

		header("location:../View/inscrits/inscription.php");

	}
?>