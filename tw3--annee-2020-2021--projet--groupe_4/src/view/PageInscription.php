



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

<header>
                <div class='NavigationBar'>
                        <h2 class ='logoPage'> Jurassic Poop </h2>
                        <img src="images/jurassicParkLogo.png" alt="logo" width="70" height="50"        >
                        <ul class='menu'>
                                <li><a href="index.php">Accueil</a></li>
                                <li><a href="index.php?Collections">Collections</a></li>
                                <li><a href="index.php?InfosPratiques">A Propos</a></li>
                                <li><a class='insidePage' href="index.php?Connexion">Connexion</a></li>
                        </ul>
                </div>
        </header>




	<form class="box" action="" method="POST">
        <h2> Inscription </h2>
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

    <a href='index.php?Connexion'> Déjà un compte ? Cliquez ici</a>

	</form>
	

    

	<footer> Page réalisé en HTML5, CSS et PHP </footer>

</body>
</html>



