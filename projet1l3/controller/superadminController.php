<?php

	if (isset($_POST['connexion'])){

       //recuperation des donnee
		$login = $_POST['login'];
		$motdepasse = $_POST['motdepasse'];
		
		//Connexion a la base de donnee
       $host = 'localhost';
		$user = 'root';
		$pwd = '';
		$dbname = 'projet1l3';
		$connect = mysqli_connect($host, $user, $pwd, $dbname);
      
      $lire =mysqli_query($connect,"SELECT * FROM superadmin") ;
    
       while ($tab = mysqli_fetch_row($lire)) {
				if ($tab[5] == $login && $tab[6] == $motdepasse) {
					header("location:../View/superadmin/indexsuperadmin.php");
				}
				
			}
		

	}


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
      $sql1 =mysqli_query($connect,"INSERT INTO users VALUES(NULL,'$nom','$prenom','$email','$telephone','$login','$motdepasse',$etat)") ;
        mysqli_execute($sql1);
      $sql2 =mysqli_query($connect,"INSERT INTO inscrits VALUES(NULL,'$nom','$prenom','$email','$telephone','$login','$motdepasse',$etat)") ;
        mysqli_execute($sql2);
        //echo "$nom, $prenom, $email, $telephone, $login, $motdepasse";

		header("location:../View/superadmin/ajoutuser.php");

	}


	if (isset($_POST['ajouter'])){

       //recuperation des donnee
		$nom = $_POST['nomadmin'];
		$prenom = $_POST['prenomadmin'];
		$email = $_POST['emailadmin'];
		$telephone = $_POST['telephoneadmin'];
		$login = $_POST['loginadmin'];
		$motdepasse = $_POST['pwdadmin'];
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
      $sql1 =mysqli_query($connect,"INSERT INTO admins VALUES(NULL,'$nom','$prenom','$email','$telephone','$login','$motdepasse',$etat)") ;
        mysqli_execute($sql1);
      $sql2 =mysqli_query($connect,"INSERT INTO inscrits VALUES(NULL,'$nom','$prenom','$email','$telephone','$login','$motdepasse',$etat)") ;
        mysqli_execute($sql2);
        //echo "$nom, $prenom, $email, $telephone, $login, $motdepasse";

		header("location:../View/superadmin/ajoutadmin.php");

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
       	  	
       	    $stock1=mysqli_query($con,"DELETE FROM users WHERE iduser=$tab[0]");
       	  	mysqli_execute($stock1);
       	  	
					header("location:../View/superadmin/listusers.php");
				
       	  }
		}
	}


	if (isset($_POST['supprimer'])){

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
       	  	
       	    $stock1=mysqli_query($con,"DELETE FROM admins WHERE idadmin=$tab[0]");
       	  	mysqli_execute($stock1);
       	  	
					header("location:../View/superadmin/listadmins.php");
				
       	  }
		}
	}

?>