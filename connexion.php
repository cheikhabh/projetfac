<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Connexion</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<link href="css/style.css" rel="stylesheet">
	</head> 
<body> 

	<fieldset class ="login">
		<legend><h2>Connectez vous</h2> </legend> 
		<div>
		<form  method="post" action="">
			<div class = "erreur-connexion">
				<?php
					$matchFound = (isset($_GET["erreur"]) && trim($_GET["erreur"]) == 'connexionErreur');
					if($matchFound){
						echo '<p>Login ou mot de passe incorrect.</p>';
					}
				
				?>
			</div>
			<p>Email:  <br/> <input required type="mail" name="mail"/> </p>
			<p>Mot de passe: <br/> <input required  minlength="8" type="password" name="password"/> </p>
				
			<input type="submit" name="valider" value="Cliquer pour afficher vos informations "/>
					   
		</form>
		</div>
	</fieldset>
	<br>
	<br>
	<a href="index.php"><span class="pw-oublie">Inscription</span></a>

</body>
</html>