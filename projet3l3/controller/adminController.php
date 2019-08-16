<?php

	if (isset($_POST['valider'])){

       //recuperation des donnee
		$nom = $_POST['nomuser'];
		$prenom = $_POST['prenomuser'];
		$email = $_POST['emailuser'];
		$telephone = $_POST['telephoneuser'];
		$login = $_POST['loginuser'];
		$motdepasse = $_POST['pwduser'];
		$etat = $_POST['etat'];

		//Connexion a la base de donnee
       $connect = null;
  try {
    $connect =  new PDO("mysql:dbname=projet1l3;host=127.0.0.1", "root", "");

  } catch (Exception $e) {
    echo $e;
  }
/*if ($connect) {
	echo "connexion success";
}
else{
	echo "erreur";
}*/
		//insertion a la base de donnee
      $sql1 =mysqli_query($connect,"INSERT INTO users VALUES(NULL,'$nom','$prenom','$email','$telephone','$login','$motdepasse',$etat)") ;
        mysqli_execute($sql1);
      $sql2 =mysqli_query($connect,"INSERT INTO inscrits VALUES(NULL,'$nom','$prenom','$email','$telephone','$login','$motdepasse',$etat)") ;
        mysqli_execute($sql2);
        //echo "$nom, $prenom, $email, $telephone, $login, $motdepasse";

		header("location:../View/admins/ajoutuser.php");

	}

	if (isset($_POST['delete'])){

       //recuperation des donnee
		$id = $_POST['id'];
		
		//Connexion a la base de donnee
       $host = 'localhost';
		$user = 'root';
		$pwd = '';
		$dbname = 'projet1l3';
		$con = mysqli_connect($host, $user, $pwd, $dbname);
      
      $lire =mysqli_query($con,"SELECT * FROM users") ;

      // mysqli_execute($lire);
    
       while ($tab = mysqli_fetch_row($lire)) {
       	  if ($id== $tab[0]) {
       	  	
       	    $stock=mysqli_query($con,"DELETE FROM users WHERE iduser=$tab[0]");
       	  	mysqli_execute($stock);
					header("location:../View/admins/listusers.php");
				
       	  }
		}
	}
?>