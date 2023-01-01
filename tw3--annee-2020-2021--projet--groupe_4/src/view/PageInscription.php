



<?php

require_once('View.php');



?>


<!DOCTYPE html>
<html lang="fr">
<head>
	<title> A propos  </title>
	<link rel="stylesheet" href="skin/site.css" />
	<meta charset="UTF-8" />
</head>
<body>

	<div class='NavigationBar'>
		<h2 class ='logoPage'> Jurassic Poop </h2>
		<ul class='menu'>
			<a  href="index.php">Accueil</a>
			<a href="index.php?Collections">Collections</a>
			<a class='insidePage' href="index.php?InfosPratiques">A Propos</a>
			<a href="index.php?Connexion">Connexion</a>
		</ul>
	</div>



	<h2> Inscription </h2>

	<form action="" method="POST">
    <div>

    <label>Login : <input type="text" name="login_inscription" id="login_inscription"></label>
    </div>
    <div>

    <label> Password <input type="password" name="mdp_inscription" id="mdp_inscription"></label>
    </div>

	<div>

    <label> Email <input type="email" name="email_inscription" id="email_inscription"></label>
    </div>
	
    <button type="submit"> S'inscrire </button>

    </form>

    

	<footer> Page réalisé en HTML5, CSS et PHP </footer>

</body>
</html>



