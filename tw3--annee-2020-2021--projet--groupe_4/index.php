<?php
/*
 * On indique que les chemins des fichiers qu'on inclut
 * seront relatifs au répertoire src.
 */
set_include_path("./src");

/* Inclusion des classes utilisées dans ce fichier */
require_once("config/config.php");
require_once("src/model/DinosaureStorageMySQL.php");
require_once("Router.php");

/*
 * Cette page est simplement le point d'arrivée de l'internaute
 * sur notre site. On se contente de créer un routeur
 * et de lancer son main.
 */

 /* Connexion à MySQL */

try {
    $dbh = new PDO("mysql:host=".HOST."; dbname=".BASENAME."",  LOGIN, PASSWORD);
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}

$db = new  DinosaureStorageMySQL($dbh);

$router = new Router();
$router->main($db);
?>