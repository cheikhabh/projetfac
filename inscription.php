<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Inscription</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php

	$nom = $_POST["nom"];
	$prenom = $_POST["prenom"];
	$email = $_POST["email"];
	$password = $_POST["password"];
	$filiere = $_POST["filiere"];
	$groupe = $_POST["groupe"];
	file_put_contents('etudiants.csv', $nom.",".$prenom.",".$email.",".$password.",".$filiere.",".$groupe);
	for($i=0;$i<sizeof($lines);$i++){	
		$line = $lines[$i];
		echo $line.'\n';
		$tab= explode(",",$line);

		if ($tab[2] == $email && $tab[3] == $login){
			
			$doesUserExist = TRUE;
			break; //Sortir de la boucle
		}
	}



?>

</body>
</html>
