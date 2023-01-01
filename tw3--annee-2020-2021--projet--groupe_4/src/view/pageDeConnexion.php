<!DOCTYPE html>
<html lang="fr">
<head>
	<title> Jurassic Poop </title>
	<link rel="stylesheet" href="skin/site.css" />
	<meta charset="UTF-8" />
</head>

<body>
	<header>
		<div class='NavigationBar'>
			<h2 class ='logoPage'> Jurassic Poop </h2>
			<img src="images/jurassicParkLogo.png" alt="logo" width="70" height="50"	>
			<ul class='menu'>
				<a href="index.php">Accueil</a>
				<a href="index.php?Collections">Collections</a>
				<a href="index.php?InfosPratiques">A Propos</a>
				<a class='insidePage' href="index.php?Connexion">Connexion</a>
			</ul>
		</div>
	</header>



	<h2> Page de connexion </h2>

	<form action="" method="POST">
    <div>


    <label>Login : <input type="text" name="login" id="login"></label>
    </div>
    <div>

    <label> Mot de passe <input type="password" name="mdp" id="mdp"></label>
    </div>
    <button type="submit"> Se connecter </button>

    </form>
    <a href='index.php?Inscription'>Pas encore inscrit ? Cliquez ici</a>

	<footer> Page réalisée en HTML5, CSS et PHP </footer>

</body>
</html>



