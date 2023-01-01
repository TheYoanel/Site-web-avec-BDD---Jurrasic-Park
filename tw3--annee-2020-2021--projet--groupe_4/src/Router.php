<?php

require_once('view/View.php');
require_once("controller/Controller.php");
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
	
	function main($db){
		$this->view = new View();
        $this->controller = new Controller($this->view, $db);


		// $database = new DataBase();

		$personnage1 = new Authentification();
		

		if(isset($_POST['login']) && isset($_POST['mdp'])){
			$personnage1->connectUser($_POST['login'],$_POST['mdp']);
		}


		if($personnage1->isUserConnected() && isset($_POST['deco'])){
			$personnage1->disconnectUser();
		}

		
		// On verifie ici que la requete POST existe et qu'elle n'est pas vide
		// a faire plus propre
		if(isset($_POST['login_inscription']) && isset($_POST['mdp_inscription']) && isset($_POST['email_inscription']) && (!empty($_POST['email_inscription'])) && (!empty($_POST['login_inscription'])) &&(!empty($_POST['mdp_inscription']))){

			if($personnage1->nameUserAlreadyUsed($_POST['login_inscription']) == false){

				//modif a faire ici
				$personnage1->createAccount($_POST['login_inscription'],$_POST['mdp_inscription'], "",$_POST['email_inscription']);
				$personnage1->connectUser($_POST['login_inscription'],$_POST['mdp_inscription']);

			}
			else{
				//AFFICHER MESSAGE ERREUR ICI
			}
			

		}
			

		

		if (isset($_GET['InfosPratiques'])) {
			$this->controller->showAPropos();
			
		}

		elseif (isset($_GET['Collections'])) {
			$this->controller->showCollections();
			
		}


// SERT A AFFICHER LA PAGE DE CONNEXION OU DECONNEXION EN FONCTION DE SI L UTILISATEUR EST CONNECTEE OU NON

		elseif(isset($_GET['Connexion'])){

			if(empty($_SESSION['user'])){
				$this->view->makePageDeConnexion();
			}
	
			if(!empty($_SESSION['user'])){
				$this->view->makePageDeDeconnexion();
			}

		}

// SERT A AFFICHER LA PAGE DECONNEXION DIRECTEMENT QUAND ON VIENT DE S'INSCRIRE

		elseif(isset($_GET['Inscription'])){
			
			if(empty($_SESSION['user'])){
				$this->view->makePageInscription();
			}
	
			if(!empty($_SESSION['user'])){
				$this->view->makePageDeDeconnexion();
			}
		}

// SERT A AFFICHER LA PAGE ACCUEIL SI RIEN N'EST VALIDE 
		else{
			$this->controller->showHome();
		}


		
		

		
	}

	
}


?>