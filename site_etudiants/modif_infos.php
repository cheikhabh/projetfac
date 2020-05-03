<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Modification des données</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<header>
    <div id="banniere">
    <p><img src="./ucp.png" alt="ucp"/></p>
    </div>
</header>
 
	<body> 
	<h1>Modification des informations personnelles</h1>
	<div id="menu">
		<ul>
			<li><a href="index.php">Inscription</a></li>
			<li><a href="connexion.php">Connexion</a></li>
			<li><a href="genereCles.php">Demande de cle API</a></li>
			<li><a href="#">Doc API</a></li>
		</ul>
	</div>

	
	<?php
		$fichier = fopen("etudiants.csv","r");
		$modif_contenu="";
		$newline = $_GET["nom"].";".$_GET["prenom"].";".$_GET["email"].";".md5($_GET["email"].$_GET["password"]).";".$_GET["filiere"].";".$_GET["groupe"]."\n";
		while (($line = fgets($fichier))!== FALSE) {
			$num_line=explode(";", $line);
			if ($_GET["email"]==$num_line[2]) {

				$modif_contenu = $modif_contenu . $newline;

			}
			else
			{
				$modif_contenu = $modif_contenu . $line;
			}
		}
		fclose($fichier);
		$modif_fichier=fopen("etudiants.csv", "w");
		fputs($modif_contenu,$modif_contenu);
		fclose($modif_fichier);
		echo "Vos données sont modifiés";
		exit();
	?>
</body>
</html>



