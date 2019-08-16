<?php

	if (isset($_POST['admin'])){

       //recuperation des donnee
		$id = $_POST['id'];
		
		//Connexion a la base de donnee
       $host = 'localhost';
		$user = 'root';
		$pwd = '';
		$dbname = 'projet1l3';
		$connect = mysqli_connect($host, $user, $pwd, $dbname);
      
      $lire =mysqli_query($connect,"SELECT * FROM inscrits") ;

      // mysqli_execute($lire);
    
       while ($tab = mysqli_fetch_row($lire)) {
       	  if ($id== $tab[0]) {
       	  	 $tab[7]=1;
       	  	$stock=mysqli_query($connect,"INSERT INTO admins VALUES(NULL,'$tab[1]','$tab[2]','$tab[3]','$tab[4]','$tab[5]','$tab[6]','$tab[7]')");
       	  	mysqli_execute($stock);
					header("location:../View/superadmin/listadmins.php");
				
       	  }
		}
	}


    if (isset($_POST['user'])){

       //recuperation des donnee
		$id = $_POST['id'];
		
		//Connexion a la base de donnee
       $host = 'localhost';
		$user = 'root';
		$pwd = '';
		$dbname = 'projet1l3';
		$connect = mysqli_connect($host, $user, $pwd, $dbname);
      
      $lire =mysqli_query($connect,"SELECT * FROM inscrits") ;

      // mysqli_execute($lire);
    
       while ($tab = mysqli_fetch_row($lire)) {
       	  if ($id== $tab[0]) {
       	  	 $tab[7]=0;
       	  	$stock=mysqli_query($connect,"INSERT INTO users VALUES(NULL,'$tab[1]','$tab[2]','$tab[3]','$tab[4]','$tab[5]','$tab[6]','$tab[7]')");
       	  	mysqli_execute($stock);
					header("location:../View/superadmin/listadmins.php");
				
       	  }
		}
	}

?>
