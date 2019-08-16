<?php 

	/**
	 * 
	 */
	class Inscrits
	{
		private $nominscrit;
		private $prenominscrit;
		private $emailinscrit;
		private $telephoneinscrit;
		private $logininscrit;
		private $pwdinscrit;
		private $etat;
		
		public function __construct($nom, $prenom, $email,$telephone, $login, $pwd, $etat)
		{
			$this->nominscrit = $nom; 
			$this->prenominscrit = $prenom; 
			$this->emailinscrit = $email; 
			$this->telephoneinscrit = $telephone;
			$this->logininscrit = $login; 
			$this->pwdinscrit = $pwd;  
			$this->etat = $etat;  
		}

		public function getNom(){return $this->nominscrit;}
		public function getPrenom(){return $this->prenominscrit;}
		public function getEmail(){return $this->emailinscrit;}
		public function getTelephone(){return $this->telephoneinscrit;}
		public function getLogin(){return $this->logininscrit;}
		public function getPwd(){return $this->pwdinscrit;}
		
		public function getEtat(){return $this->etat;}
	}

 ?>