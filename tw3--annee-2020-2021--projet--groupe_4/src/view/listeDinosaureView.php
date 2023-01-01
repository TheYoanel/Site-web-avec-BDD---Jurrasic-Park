<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

th{
  background-color: cadetblue;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>

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
				<a class='insidePage' href="index.php?Collections">Collections</a>
				<a href="index.php?InfosPratiques">A Propos</a>
				<a href="index.php?Connexion">Connexion</a>
			</ul>
		</div>
	</header>

<h2>Liste des dinosaures</h2>

<table>
	<thead>
	  <tr>
		<th>Nom</th>
		<th>Nom latin</th>
		<th>Regne</th>
		<th>Taille</th>
		<th>Longueur</th>
		<th>Vitesse</th>
		<th>Description</th>
		<th>Danger</th>
		<th>Régime</th>
	  </tr>
  </thead>

  <tbody>
    <?php while ($row = $stmt->fetch()): ?>
        <tr>
            <td><?php echo $row['nom']; ?></td>
            <td><?php echo $row['nomlatin']; ?></td>
            <td><?php echo $row['regne']; ?></td>
            <td><?php echo $row['taille']."m"; ?></td>
            <td><?php echo $row['longueur']."m"; ?></td>
            <td><?php echo $row['vitesse']." km/h"; ?></td>
            <td><?php echo $row['description']; ?></td>
            <td><?php echo $row['danger']; ?></td>
            <td><?php echo $row['regime']; ?></td>
        </tr>
    <?php endwhile; ?>
   </tbody>


</table>

<footer> Page réalisée en HTML5, CSS et PHP </footer>

</body>
</html>
