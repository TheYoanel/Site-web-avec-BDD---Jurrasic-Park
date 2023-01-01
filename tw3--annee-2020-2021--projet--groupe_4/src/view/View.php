<?php


/**
 * 
 */
class View
{
	

	function makeAccueilPage()
	{
		include("template.php");
	}

	function makeListPage($stmt){
		$stmt->execute();
		include("listeDinosaureView.php");
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


}


?>