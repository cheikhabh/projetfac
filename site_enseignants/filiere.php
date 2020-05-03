<?php
session_start();
?>


<!DOCTYPE html>
<html>
<head>
	<title>Trombinoscope</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<nav>
 
<h1>Trombinoscope</h1>
	<h2>Eleves de <?php echo $_GET['filiere']?></h2>

	<?php

	if(isset($_GET['filiere'])){
		$recup_data = file_get_contents('http://projet-cheikh-site1.alwaysdata.net/API.php?filiere='.$_GET['filiere'].'?groupe='.$_GET['groupe'].'&key=yGUQcJiVss');
		$donnees = json_decode($recup_data,true);
		//var_dump($data);
		$number = count($donnees["etudiant"]);
		for ($i=0; $i <$number ; $i++) {
				echo "<div>";
				echo "<img src=".$donnees["etudiant"][$i]['picture'].">";
				echo "<div>";
				echo "<p> Nom : ".$donnees["etudiant"][$i]['nom']."  </p>";
				echo "<p> Prenom : ".$donnees["etudiant"][$i]['prenom']." </p>";
				echo "<p> Email : ".$donnees["etudiant"][$i]['email']."</p>";
				echo"</div>";
				echo "</div>";	
		}
		
	}


?>

</body>
</html>
