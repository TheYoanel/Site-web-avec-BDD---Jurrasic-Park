



<?php

if(!isset($_SESSION)){
    session_start();
}

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


    <h1>Espace Membre</h1>
    <h2> <?php echo "Bonjour " . $_SESSION['user']['login']; ?></h2>

    <h3>Editer votre profil</h3>
	<p>Changez votre mot de passe : </p>
	
    <form action="" method="POST">

    <div>

    <label> Mot de passe actuel <input type="password" name="old_password" id="old_password"></label>
    </div>

	<div>

    <label> Nouveau mot de passe <input type="password" name="new_password" id="new_password"></label>
    </div>
	
    <button type="submit"> Changer le mot de passe </button>
	</form>
	

	<form action="" method="post">
	<div>
		<label><button type="submit" name="deco">Se déconnecter</button></label>
	</div>
	

	</form>
	

    

	<footer> Page réalisé en HTML5, CSS et PHP </footer>

</body>
</html>



