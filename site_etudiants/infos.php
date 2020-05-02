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
<body>

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