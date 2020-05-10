<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Espace Enseignants</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
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
<table align="center">
		<tr>		
			<td width="80%">
				<fieldset class ="login">
					<legend><h2>Inscription des enseignants</h2> </legend> 
					<div>
					
					<form method="get" action="inscription.php">
						<p>Nom:  <br/> <input required  minlength="3" type="text" name="nom"/> </p>
						<p>Prénom:  <br/> <input required  minlength="3" type="text" name="prenom"/> </p>
						<p>Email:  <br/> <input required  type="email" name="email"/> </p>
						<p>Mot de passe: <br/> <input required  minlength="8" type="password" name="password"/> </p>
						<div class = "erreur-connexion">
							<?php
								$matchFound = (isset($_GET["erreur"]) && trim($_GET["erreur"]) == 'erreurInscription');
								if($matchFound){
									echo '<p>Login existe, veuillez vous connectez.</p>';
								}
							
							?>
						<input type="submit" name="valider" value="Valider"/>
					</div>
					</form>
					</div>
				</fieldset>
			</td>
		</tr>
</table>
</body>
</html>