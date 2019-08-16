<?php 

	/**
	 * 
	 */
	class Superadmins
	{
		private $Supernom;
		private $Superprenom;
		private $Superemail;
		private $Supertelephone;
		private $Superlogin;
		private $Superpwd;
		
		public function __construct($nom, $prenom, $email,$telephone, $login, $pwd, $profil)
		{
			$this->SuperSuperSupernom = $nom; 
			$this->SuperSuperprenom = $prenom; 
			$this->Superemail = $email; 
			$this->Supertelephone = $telephone;
			$this->Superlogin = $login; 
			$this->Superpwd = $pwd;
			$this->Superprofil = $profil;  
		}

		public function getNom(){return $this->Supernom;}
		public function getPrenom(){return $this->Superprenom;}
		public function getEmail(){return $this->Superemail;}
		public function getTelephone(){return $this->Supertelephone;}
		public function getLogin(){return $this->Superlogin;}
		public function getPwd(){return $this->Superpwd;}
		
	}

 ?>