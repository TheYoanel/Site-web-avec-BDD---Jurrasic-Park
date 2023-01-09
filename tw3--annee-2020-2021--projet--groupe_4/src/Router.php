<?php

require_once('view/View.php');
require_once("controller/controller.php");
require_once("model/Authentification.php");
require_once("model/Database.php");


if(!isset($_SESSION)){
    session_start();
}

/**
 * 
 */
class Router{

	private $view;
	private $controller;

	function getDinosaurURL($id){
		return "index.php?dinosaure=".$id;
	}
	
	function main($db){
		$this->view = new View($this);
        $this->controller = new Controller($this->view, $db);


		// $database = new DataBase();

		$personnage1 = new Authentification();
		

		if(isset($_POST['login']) && isset($_POST['mdp']) && (!empty($_POST['login'])) && (!empty($_POST['mdp']))){

			$login = $_POST['login'];
			$mdp = $_POST['mdp'];
			
			$personnage1->connectUser($login,$mdp);
			
		}


		if($personnage1->isUserConnected() && isset($_POST['deco'])){
			$personnage1->disconnectUser();
		}

		
		// On verifie ici que la requete POST existe et qu'elle n'est pas vide
		// a faire plus propre
		if(isset($_POST['login_inscription']) && isset($_POST['mdp_inscription']) && isset($_POST['email_inscription']) && (!empty($_POST['email_inscription'])) && (!empty($_POST['login_inscription'])) &&(!empty($_POST['mdp_inscription']))){


			//Changer cette technique, il ne faut a priori pas échapper à l'entrée
			$login_inscription = htmlspecialchars($_POST['login_inscription']);
			
			$mdp_inscription = htmlspecialchars($_POST['mdp_inscription']);
			$email_inscription = $_POST['email_inscription']; 

			
			

			if($personnage1->nameUserAlreadyUsed($login_inscription) == false){

				//modif a faire ici
				$personnage1->createAccount($login_inscription,$mdp_inscription,$email_inscription);
				$personnage1->connectUser($login_inscription,$mdp_inscription);
				

			}
			else{
				//AFFICHER MESSAGE ERREUR ICI
			}
			

		}

		// peut etre ici changer avec la variable de session
		if(isset($_POST['old_password'])&& isset($_POST['new_password'])){
			$personnage1->changePassword($_SESSION['user']['login'],$_POST['old_password'],$_POST['new_password']);
			
		}
			

		

		if (isset($_GET['InfosPratiques'])) {
			$this->controller->showAPropos();
			
		}

		elseif (isset($_GET['Collections'])) {
			$this->controller->showCollections();
			
		}

		elseif (isset($_GET['dinosaure'])){
			$this->controller->showDinosaur($_GET['dinosaure']);
		}


// SERT A AFFICHER LA PAGE DE CONNEXION OU SON ESPACE MEMBRE EN FONCTION DE SI L UTILISATEUR EST CONNECTEE OU NON

		elseif(isset($_GET['Connexion'])){

			if(empty($_SESSION['user'])){
				$this->controller->showConnexion();
			}
	
			if(!empty($_SESSION['user'])){
				$this->controller->showEspaceMembre();
				
			}

		}

// SERT A AFFICHER LA PAGE de l'espace membre DIRECTEMENT QUAND ON VIENT DE S'INSCRIRE

		elseif(isset($_GET['Inscription'])){
			
			if(empty($_SESSION['user'])){
				$this->controller->showInscription();
			}
	
			if(!empty($_SESSION['user'])){
				$this->controller->showEspaceMembre();
			}
		}

		elseif(isset($_GET['EspaceMembre']) && (!empty($_SESSION))){

			$this->controller->showEspaceMembre();
			
		}

// SERT A AFFICHER LA PAGE ACCUEIL SI RIEN N'EST VALIDE 
		else{
			$this->controller->showHome();
		}


		
		

		
	}

	
}


?>