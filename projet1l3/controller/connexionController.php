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

//.............redirection utilisateurs..............................
      $lire1 =mysqli_query($connect,"SELECT * FROM users") ;
    
       while ($tab = mysqli_fetch_row($lire1)) {
				if ($tab[5] == $login && $tab[6] == $motdepasse) {
					header("location:../View/users/indexuser.php");
				}
				else
					echo "Votre demande de compte n'as pas encore été valider. veuillez ressayer ultérieurement!";
				
			}
//................redirections administrateurs..........................

      $lire2 =mysqli_query($connect,"SELECT * FROM admins") ;
    
       while ($table = mysqli_fetch_row($lire2)) {
				if ($table[5] == $login && $table[6] == $motdepasse) {
					header("location:../View/admins/listusers.php");
				}
				else
					echo "Votre demande de compte n'as pas encore été valider. veuillez ressayer ultérieurement!";
			}
//..............redirection Superadministrateur.........................		
        $lire3 =mysqli_query($connect,"SELECT * FROM superadmin") ;
    
       while ($tabl = mysqli_fetch_row($lire3)) {
				if ($tabl[5] == $login && $tabl[6] == $motdepasse) {
					header("location:../View/superadmin/indexsuperadmin.php");
				}
				else
					echo "Votre demande de compte n'as pas encore été valider. veuillez ressayer ultérieurement!";
			}

	}
?>