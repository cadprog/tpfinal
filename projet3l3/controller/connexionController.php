<?php
	
  if (isset($_POST['Connexion'])){
  
       //recuperation des donnee
    $login = $_POST['Login'];
    $motdepasse = $_POST['Motdepasse'];
    //Connexion a la base de donnee

  $connect = null;
  try {
    $connect =  new PDO("mysql:dbname=projet1l3;host=127.0.0.1", "root", "");

  } catch (Exception $e) {
    echo $e;
  }

//.............redirection utilisateurs..............................

  if(!is_null($connect)){
       $element1 = $connect->prepare("SELECT * from users");
       $element1->execute();
       
      while ($tab= $element1->fetch()) {
         if ($tab[5] == $login && $tab[6] == $motdepasse) {
          echo "redirection user";
          header("location:../View/users/indexuser.php");
         }
         else
          echo "Votre demande de compte n'as pas encore été valider. veuillez ressayer ultérieurement!";      
      } 
    }
//................redirections administrateurs..........................
   if(!is_null($connect)){
      $element2 = $connect->prepare("SELECT * FROM admins");
       $element2->execute();
       while ($table= $element2->fetch()) {
        if ($table[5] == $login && $table[6] == $motdepasse) {
          header("location:../View/admins/listusers.php");
        }
        else
          echo "Votre demande de compte n'as pas encore été valider. veuillez ressayer ultérieurement!";
      }
    }
//..............redirection Superadministrateur.........................    
      if(!is_null($connect)){ 
        $element3 =$connect->prepare("SELECT * FROM superadmin") ;
        $element3->execute();
       while ($tabl = $element3->fetch()) {
        if ($tabl[5] == $login && $tabl[6] == $motdepasse) {
          header("location:../View/superadmin/indexsuperadmin.php");
        }
        else
          echo "Votre demande de compte n'as pas encore été valider. veuillez ressayer ultérieurement!";
      }

   }
 }
?>