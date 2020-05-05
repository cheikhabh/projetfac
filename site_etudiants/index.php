<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Inscription des étudiants</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<link href="style.css" rel="stylesheet">
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
				<li><a href="genereCles.php">Demande de cle API</a></li>
				<li><a href="doc_api.html">Doc API</a></li>
			</ul>
		</div>
	</nav>
	<table align="center">
		<tr>		
			<td width="80%">
				<fieldset class ="login">
					<legend><h2>Inscription des étudiants</h2> </legend> 
					<div>
					
					<form method="get" action="inscription.php">
						<p>Nom:  <br/> <input required  minlength="3" type="text" name="nom"/> </p>
						<p>Prénom:  <br/> <input required  minlength="3" type="text" name="prenom"/> </p>
						<p>Email:  <br/> <input required  type="email" name="email"/> </p>
						<p>Mot de passe: <br/> <input required  minlength="8" type="password" name="password"/> </p>
						<p>Filiere: <br/> </p>
						<select name="filiere">
	    					<option name ='filiere' value='L1-MIPI'>L1-MIPI</option>
    						<option name ='filiere' value='L2-MI'>L2-MI</option>
    						<option name ='filiere' value='L3-I'>L3-I</option>
    						<option name ='filiere' value='LP-RS'>LP-RS</option>
    						<option name ='filiere' value='LPI-WS'>LPI-WS</option>
   						</select>
   						<p>Groupe: <br/></p>
   						<select name="groupe">
	    					<option name ='groupe' value='A1'>A1</option>
    						<option name ='groupe' value='B2'>B2</option>
    						<option name ='groupe' value='LPI-1'>LPI-1</option>
    						<option name ='groupe' value='LPI-2'>LPI-2</option>
    						<option name ='groupe' value='LPI-3'>LPI-3</option>
   						</select>
   						<br/>
   						
   						
						
						<div class = "erreur-connexion">
							<?php
								$matchFound = (isset($_GET["erreur"]) && trim($_GET["erreur"]) == 'erreurInscription');
								if($matchFound){
									echo '<p>Login existe, veuillez vous connectez.</p>';
								}
							
							?>
								
						</div>
					<p> Choisir votre photo de profil :</p>
					<p><input type="file" id="img" name="avatar" accept="image/*" /></p>
					<input type="hidden" name="formtype" value="inscription" />	
					<input type="submit" name="valider" value="Valider"/>	   
					</form>
					
					
					</div>
				</fieldset>
			</td>
		</tr>
		</tbody>
	</table>


</body>
</html>