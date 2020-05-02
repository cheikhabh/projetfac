<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Connexion</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<link href="style.css" rel="stylesheet">
	</head> 
<body> 
<table>
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
					<p>Email:  <br/> <input required type="mail" name="mail"/> </p>
					<p>Mot de passe: <br/> <input required  minlength="8" type="password" name="password"/> </p>
					<input type="hidden" name="formtype" value="connexion" />	
					<input type="submit" name="valider" value="Se connecter"/>
							   
				</form>
				</div>
				</fieldset>
			</td>
		</tr>
</table>

<p><a href="index.php">Inscription</a></p>

</body>
</html>