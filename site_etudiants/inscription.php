<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Inscription</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<h1>Souscription des étudiants</h1>

<?php 
	
	function inscrip(){
	$etu=file('etudiants.csv');
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
		
       $ecriture= fopen("etudiants.csv", "a");
		fwrite($ecriture, $_GET['nom'].";".$_GET['prenom'].";".$_GET['email'].";".md5($_GET['email'].$_GET['password']).";".$_GET['filiere'].";".$_GET['groupe'].";"."\n");
		fclose($ecriture);	
	   	echo "Vous vous êtes bien inscrits. \n";	    
	        
	}
	
}
inscrip();

?>



<p><a href="connexion.php"> Connectez-vous </a> </p>

</body>
</html>


