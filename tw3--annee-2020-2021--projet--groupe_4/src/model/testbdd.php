<?php
// Sous WAMP
// $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');


try
{
	$bdd = new PDO("mysql:host=".HOST."; dbname=".BASENAME."",  LOGIN, PASSWORD);
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}


$reponse = $bdd->query('SELECT id FROM utilisateurs');

while ($donnees = $reponse->fetch())
{
	echo $donnees['id'] . '<br />';
}

$reponse->closeCursor();

?>

