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
<html>
<head>
	<title>Modification des données perso</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<header>
    <div id="banniere">
    <p><img src="./images/ucp.png" alt="ucp"/></p>
    </div>
</header>
 	
	<body> 
	<h1>Modification de vos informations personnelles</h1>
	<h2>Si vous souhaitez modifier vos informations, faites-le ci-dessous</h2>
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
					<div>
					<form method="get" action="modif_infos.php">
						<p>Nom:  <br/> <input required  minlength="3" type="text" name="nom"/> </p>
						<p>Prenom:  <br/> <input required  minlength="3" type="text" name="prenom" value="<?php if (isset($_SESSION['email'])){ echo $_SESSION['email'];} ?>" /> </p>
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

					<input type="submit" name="valider" value="Valider"/>		
					</form>
					
					</div>
				</fieldset>
			</td>
		</tr>
	</table>	

</body>
</html>









