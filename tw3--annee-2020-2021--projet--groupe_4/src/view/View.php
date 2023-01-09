<?php


/**
 * 
 */
class View
{
	private $router;

	public function __construct(Router $router) {
		$this->router = $router;
	}

	function makeAccueilPage()
	{
		include("template.php");
	}

	function makeListPage($stmt){
		$stmt->execute();
		include("listeDinosaureView.php");
	}

	function makeDinosaurPage($data){
		$nom = $data['nom'];
		$regime = $data['regime'];
		$imageURL = $data['image'];
		$description = $data['descriptionDetaille'];
		$vitesse = $data['vitesse'];
		include("dinosaureView.php");
	}

	function makeAProposPage(){
		include("aProposPage.php");
	}

	function makePageDeConnexion(){
		include('pageDeConnexion.php');
	}

	function makePageDeDeconnexion(){
		include('pageDeDeconnexion.php');
	}

	function makePageInscription(){
		include('pageInscription.php');
	}

	function makePageEspaceMembre(){
		include('pageEspaceMembre.php');
	}


}


?>