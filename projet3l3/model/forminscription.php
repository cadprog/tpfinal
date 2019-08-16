<?php
	
	class Formulaire 
{
  const INPUT = "text";
  const SUBMIT = "submit";
  const RESET = "reset";
  const PASSWORD = "password";
  private $tag;

  public function __construct($tag='p')
  {
    $this->tag = $tag;
  }


  protected function cadre($html)
  {
    return "<".$this->tag.">".$html."</".$this->tag.">";
  }

  protected function getHtml($name, $type=self::INPUT)
  {
    if($type=="text" || $type == "password"){
      return "<label>".$name."</label>"."<input type=".$type." name=".$name.">";
    }else return "<button type=".$type." name=".$name.">".$name."</button>";
  }

  /**
  * input permet d'afficher un champ de texte dans le html
  */
  
  public function input($name)
  {
    return $this->cadre($this->getHtml($name));
  }


  public function password($name)
  {
    return $this->cadre($this->getHtml($name, self::PASSWORD));
  }

  public function submit($name)
  {
    return $this->getHtml($name, self::SUBMIT);
  }

  public function reset($name)
  {
    return  $this->getHtml($name, self::RESET);
  }


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