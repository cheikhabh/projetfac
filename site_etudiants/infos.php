<?php 
session_start(); 
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Informations de l'étudiant</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<header>
    <div id="banniere">
    <p><img src="./ucp.png" alt="ucp"/></p>
    </div>
 </header>
	<body> 
	<h1>Informations de l'etudiant</h1>
	<nav>
		<div id="menu">
			<ul>
				<li><a href="index.php">Inscription</a></li>
				<li><a href="connexion.php">Connexion</a></li>
				<li><a href="genereCles.php">Demande de cle API</a></li>
				<li><a href="#">Doc API</a></li>
			</ul>
		</div>
	</nav>
<?php
	
	echo "<p>Nom : ".$_SESSION['nom']."</p>";
	echo "<p>Prenom : ".$_SESSION['prenom']."</p>";
	echo "<p> E-mail : ".$_SESSION['email']."</p>";
	echo "<p>Filiere : ".$_SESSION['filiere']."</p>";
	echo "<p> Groupe : ".$_SESSION['groupe']."</p>";
	echo "<img src=".$_SESSION['photo'].">";
?>

<p>Si vous voulez modifier vos informations, <a href="modif_infos.html">cliquez-ici </a></p>
</body>
</html>