<?php 

	/**
	 * 
	 */
	class Users
	{
		private $nomuser;
		private $prenomuser;
		private $emailuser;
		private $telephoneuser;
		private $loginuser;
		private $pwduser;
		private $profil;
		
		public function __construct($nom, $prenom, $email,$telephone, $login, $pwd, $profil)
		{
			$this->nomuser = $nom; 
			$this->prenomuser = $prenom; 
			$this->emailuser = $email; 
			$this->telephoneuser = $telephone;
			$this->loginuser = $login; 
			$this->pwduser = $pwd;
			$this->profil = $profil;  
		}

		public function getNom(){return $this->nomuser;}
		public function getPrenom(){return $this->prenomuser;}
		public function getEmail(){return $this->emailuser;}
		public function getTelephone(){return $this->telephoneuser;}
		public function getLogin(){return $this->loginuser;}
		public function getPwd(){return $this->pwduser;}
		public function getProfil(){return $this->profil;}
		
	}

 ?>