<!DOCTYPE html>
<html lang="fr">
<head>
	<title> Jurassic Poop </title>
	<link rel="stylesheet" href="skin/site.css" />
	<link rel="stylesheet" href="skin/dinosaure.css" />
	<meta charset="UTF-8" />
</head>

<body>
	<header>
		<div class='NavigationBar'>
			<h2 class ='logoPage'> Jurassic Poop </h2>
			<img src="images/jurassicParkLogo.png" alt="logo" width="70" height="50"	>
			<ul class='menu'>
				<li><a href="index.php">Accueil</a></li>
				<li><a class='insidePage' href="index.php?Collections">Collections</a></li>
				<li><a href="index.php?InfosPratiques">A Propos</a></li>
				<li><a href="index.php?Connexion">Connexion</a></li>
			</ul>
		</div>
	</header>

	<div class="dinoPage">
		<div  class="container">
			<h1> <?php echo $nom; ?> </h1>
			<h2> <?php echo $regime; ?> </h2>
			<?php echo "<img src=".$imageURL." alt=".$nom. ">"; ?>
		</div>
		<div class="lettrines"> 
			<p><?php echo $description; ?></p>

			<?php if($vitesse != null){
				echo "<p> Il pouvait atteindre une vitesse maximale de ". $vitesse . " km/h.</p>";
			}
			if ($regime == "Carnivore") {
				echo "<style>.dinoPage{background-color: coral;}</style>";
			}
			elseif ($regime == "Herbivore") {
				echo "<style>.dinoPage{background-color: #81c784;}</style>";
			}
			?>
		</div>
	</div>



<footer> Page réalisée en HTML5, CSS et PHP </footer>

</body>
</html>