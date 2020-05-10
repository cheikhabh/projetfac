<?php

function logs(){
  $date = "[".date('d')."/".date('m')."/".date('y')."] ";
  $hour = "[".date('H').":".date('i').":".date('s')."] ";
  $ip = $_SERVER['REMOTE_ADDR'];
  $url = $_SERVER['PHP_SELF'];
  $answer = $date.$hour.$ip." connecte to ".$url."\n";

  $files = fopen('./data/logs/logs.txt', 'a+');
  fputs($files,$answer);
  fclose($files);
}
logs();

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
    <p><img src="./images/ucp.png" alt="ucp"/></p>
    </div>
 </header>
	<body> 
	<h1>Informations de l'etudiant</h1>
	<nav>
		<div id="menu">
			<ul>
				<li><a href="index.php">Inscription</a></li>
				<li><a href="connexion.php">Connexion</a></li>
				<li><a href="genereCles.php">Cle API</a></li>
				<li><a href="doc_api.php">Doc API</a></li>
			</ul>
		</div>
	</nav>
<?php

	$informations=file("./data/etudiants.csv");
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