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
		<title>Connexion</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<link href="style.css" rel="stylesheet">
	</head> 
	<header>
	    <div id="banniere">
	    <p><img src="./images/ucp.png" alt="ucp"/></p>
	    </div>
 	</header>
 	
<body>
	<h1>Espace Etudiant</h1>
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
	

<table align="center">
		<tr>		
			<td width="80%">
				<fieldset class ="login">
				<legend><h2>Connectez vous</h2> </legend> 
				<div>
				<form method="get" action="verification.php">
					<div class ="erreur-connexion">
						<?php
							$matchFound = (isset($_GET["erreur"]) && trim($_GET["erreur"]) == 'connexionErreur');
							if($matchFound){
								echo '<p>Login ou mot de passe incorrect.</p>';
							}
						
						?>
					</div>
					<p>Email:  <br/> <input required type="email" name="email"/> </p>
					<p>Mot de passe: <br/> <input required  minlength="8" type="password" name="password"/> </p>
					<input type="hidden" name="formtype" value="connexion" />	
					<input type="submit" name="valider" value="Se connecter"/>
							   
				</form>
				</div>
				</fieldset>
			</td>
		</tr>
</table>


</body>
</html>