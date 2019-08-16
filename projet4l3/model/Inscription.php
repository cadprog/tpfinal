<?php
/**
 * 
 */
class Inscription
{
	
	 private $champs;

   public function input($champs){

   echo "<label>$champs</label><br>";
   	echo "<input type='text' name='$champs' placeholder='$champs' class='form-control'required><br><br>";
   }

   public function submit(){
     echo"<button type='submit' name='envoyer' class='btn btn-success'>Envoyer</button>&nbsp;&nbsp;";
   }

    public function reset(){
   	  echo"<button type='reset' name='annuler' class='btn btn-danger'>Annuler</button>";
   }

}

?>