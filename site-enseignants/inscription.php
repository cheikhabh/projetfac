<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Inscription</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<h1>Souscription des enseignants</h1>
<header>
    <div id="banniere">
    <p><img src="./ucp.png" alt="ucp"/></p>
    </div>
</header>

<body>
	<nav>
		<div id="menu">
			<ul>
				<li><a href="index.php">Inscription</a></li>
				<li><a href="connexion.php">Connexion</a></li>
				<li><a href="#">Contact</a></li>
				<li><a href="#">A propos</a></li>
			</ul>
		</div>
	</nav>

<?php 
	
	function inscrip(){
	$etu=file('profs.csv');
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
		
       $ecriture= fopen("profs.csv", "a");
		fwrite($ecriture, $_GET['nom'].";".$_GET['prenom'].";".$_GET['email'].";".md5($_GET['email'].$_GET['password']).";"."\n");
		fclose($ecriture);	
	   	echo "Vous vous êtes bien inscrits. \n";	    
	        
	}
	
}
inscrip();

?>



<p><a href="connexion.php"> Connectez-vous </a> </p>

</body>
</html>