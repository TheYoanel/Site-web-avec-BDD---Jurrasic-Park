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

    <h2> Page de connexion </h2>

    <div>

    <label>Login : <input type="text" name="login" id="login"></label>

    </div>

    <div>

    <label> Mot de passe :<input type="password" name="mdp" id="mdp"></label>

    </div>

    <button type="submit"> Se connecter </button>

    <a href='index.php?Inscription'>Pas encore inscrit ? Cliquez ici</a>

    </form>


        <footer> Page réalisée en HTML5, CSS et PHP </footer>

</body>

</html>
