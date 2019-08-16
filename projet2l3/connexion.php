<?php

class form{

   private $champs;


   public function input($champs){

   echo "<label>$champs</label><br>";
   	echo "<input type='text' name='$champs' placeholder='Entrez votre $champs' class='form-control'><br><br>";
   }

   public function submit(){
     echo"<button type='submit' name='connexion' class='btn btn-info'>Connexion</button>&nbsp;&nbsp;";
   }

    public function reset(){
   	  echo"<button type='reset' name='annuler' class='btn btn-danger'>Annuler</button>";
   }

}

?>