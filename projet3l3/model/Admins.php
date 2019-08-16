<?php 

	/**
	 * 
	 */
	class Admins
	{
		private $nomadmin;
		private $prenomadmin;
		private $emailadmin;
		private $telephoneadmin;
		private $loginadmin;
		private $pwdadmin;
		private $profil;
		
		public function __construct($nom, $prenom, $email,$telephone, $login, $pwd, $profil)
		{
			$this->nomadmin = $nom; 
			$this->prenomadmin = $prenom; 
			$this->emailadmin = $email; 
			$this->telephoneadmin = $telephone;
			$this->loginadmin = $login; 
			$this->pwdadmin = $pwd;
			$this->profil = $profil;  
		}

		public function getNom(){return $this->nomadmin;}
		public function getPrenom(){return $this->prenomadmin;}
		public function getEmail(){return $this->emailadmin;}
		public function getTelephone(){return $this->telephoneadmin;}
		public function getLogin(){return $this->loginadmin;}
		public function getPwd(){return $this->pwdadmin;}
		public function getProfil(){return $this->profil;}
		
	}

 ?>