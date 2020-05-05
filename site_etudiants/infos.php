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
				<li><a href="doc_api.html">Doc API</a></li>
			</ul>
		</div>
	</nav>
<?php

	$informations=file("etudiants.csv");
	$tab=array();
	for ($i=0; $i < sizeof($informations) ; $i++) { 
	    $csv=explode(";", $informations[$i]);
	    if ($_SESSION['email']== $csv[2]){
	        $info=$csv;
	    }
	}
?>

<?php	
	echo "<p>Nom : $info[0]</p>";
	echo "<p>Prenom : $info[1]</p>";
	echo "<p> E-mail : $info[2]</p>";
	echo "<p>Filiere : $info[4]</p>";
	echo "<p> Groupe : $info[5]</p>";
	echo "<img src=".$_SESSION['photo'].">";
?>

<p>Si vous voulez modifier vos informations, <a href="modif.php">cliquez-ici </a></p>
</body>
</html>