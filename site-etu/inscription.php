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

?>


<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Inscription</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<header>
    <div id="banniere">
    <p><img src="./images/ucp.png" alt="ucp"/></p>
    </div>
</header>
 	
<body>
<h1>Souscription des étudiants</h1>
	<nav>
		<div id="menu">
			<ul>
				<li><a href="index.php">Inscription</a></li>
				<li><a href="connexion.php">Connexion</a></li>
				<li><a href="genereCles.php">Cle API</a></li>
				<li><a href="doc_api.php">DocAPI</a></li>
			</ul>
		</div>
	</nav>
<?php 
	
	function inscrip(){
	if (isset($_GET['email'])) {
	$etu=file('./data/etudiants.csv');
	$found= FALSE;
	for ($i=0; $i < sizeof($etu) ; $i++) { 
		$lignes= explode(";", $etu[$i]);
		$lignes[1]=str_replace("\n","",$lignes[1]);
		if ($_GET['email']==$lignes[2] && md5($_GET['email'].$_GET['password'])==$lignes[3]) {
	        $found=TRUE;
	    }
	    
	}
	if ($found==TRUE){
	    echo "Vous êtes déjà inscrit";
	    
	}
	else{
		
       $ecriture= fopen("./data/etudiants.csv", "a");
		fwrite($ecriture, $_GET['nom'].";".$_GET['prenom'].";".$_GET['email'].";".md5($_GET['email'].$_GET['password']).";".$_GET['filiere'].";".$_GET['groupe'].";"."\n");
		fclose($ecriture);	
	   	echo "Vous vous êtes bien inscrits. \n";	    
	        
	}
	}
}
inscrip();

?>



<p><a href="connexion.php"> Connectez-vous </a> </p>

</body>
</html>


