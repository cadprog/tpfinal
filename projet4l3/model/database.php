<?php

	 
	/**
	 * 
	 */
	class Database
	{
		private $db;
		const DB_HOST = "localhost";
		const DB_NAME = "projet";
		const USER_NAME = "root";
		const PWD = "";
		
		public function __construct($db_host = self::DB_HOST, $db_name = self::DB_NAME, $user_name = self::USER_NAME, $pwd = self::PWD)
		{
			try {
				$this->db = new PDO("mysql:host=".$db_host.";dbname=".$db_name, $user_name, $pwd);
				$this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			} catch (PDOException $e) {
				die('Erreur'.$e->getMessage());
			}
		}

		public function getDB(){
			return $this->db;
		}


		public function addpub(pubindex $pub){
			$sql = $this->getDB()->prepare("INSERT INTO publications VALUES (null, :titre, :contenu, :iduser)");

			$result = $sql->execute([
				'titre' => $pub->getTitre(),
				'contenu' => $pub->getContenu(),
				'iduser' => $pub->getIduser()
				]);

			return $result;
		}

		public function getAllpub(){
			$sql = $this->getDB()->prepare('SELECT * FROM publications');
			$sql->execute();

			$data = $sql->fetchAll(PDO::FETCH_OBJ);

			return $data;
		}

   
        public function trie($tab){
   	      for ($i=0; $i <count($tab); $i++) { 
                        for ($j=$i+1; $j <count($tab) ; $j++) { 
                            if ($tab[$i]->idpub < $tab[$j]->idpub) {
                               $temp=$tab[$i];
                               $tab[$i]=$tab[$j];
                               $tab[$j]=$temp;
                            }
                        }
                        
                    }
                    $pubs=($tab);
                    return $pubs;
        }

       
       public function adduser(User $user){

       $sql = $this->getDB()->prepare("INSERT INTO users  VALUES (Null, :login, :pwd)");

		                	$result = $sql->execute([
			                 	'login' => $user->getLogin(),
			                	'pwd' => $user->getPwd()
		             		]);
		             		return $result;


      /* $sql1 = $this->getDB()->prepare('SELECT * FROM users');
			$sql1->execute();

			$data = $sql1->fetchAll(PDO::FETCH_OBJ);

   	      for ($i=0; $i <count($data); $i++) { 
                        if ($data[$i]->login == $user->getLogin() && $data[$i]->pwd == $user->getPwd()) {
                           	echo "C'EST UTILISATEUR EXISTE DEJA!<br><a href='../view/inscription.php'>VEUILLEZ RESSAYER!</a>";
                        }
                        else{
                        $sql = $this->getDB()->prepare("INSERT INTO users  VALUES (Null, :login, :pwd)");

		                	$result = $sql->execute([
			                 	'login' => $user->getLogin(),
			                	'pwd' => $user->getPwd()
		             		]);
		             		return $result;
		             		}
                    }*/
		}


		public function verifieruser(User $user){
			$sql = $this->getDB()->prepare('SELECT * FROM users');
			$sql->execute();

			$data = $sql->fetchAll(PDO::FETCH_OBJ);

   	      for ($i=0; $i <count($data); $i++) { 
                        if ($data[$i]->login == $user->getLogin() && $data[$i]->pwd == $user->getPwd()) {
                        	$iduser=$data[$i]->id;
                        
                        	header('location:../view/createpub.php?id='.$iduser); 
                        }
                        else{
                        	echo "VOUS NE DISPOSEZ PAS D'UN COMPTE UTILISATEURS!<br><a href='../view/inscription.php'>VEUILLEZ VOUS INSCRIRE!</a>";
                        }  
                        
            }
        }

	


	}
?>