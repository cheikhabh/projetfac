<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Connexion</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php

	//recuperation des paramètres email et mot de passe
	$email = $_POST["email"];
	$password = $_POST["password"];

	$doesUserExist = FALSE;
	$fichier = "etudiants.csv";
	$lines = file($fichier);
	
	for($i=0;$i<sizeof($lines);$i++){
			
		$line = $lines[$i];
		$tab= explode(",",$line);
	}

	if( $doesUserExist == TRUE )
	{ 
		echo("Vous êtes bien connecté");		
		exit();
	}
	else
	{ 
		exit();  
	}

?>
</body>
</html>