<?php
session_start();
setcookie("derniere_filiere",$_GET['filiere'],time()+3600);
setcookie("dernier_groupe",$_GET['groupe'],time()+3600);
?>


<!DOCTYPE html>
<html>
<head>
	<title>Trombinoscope</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style2.css">
</head>
<header>
    <div id="banniere">
    <p><img src="./ucp.png" alt="ucp"/></p>
    </div>
</header>
<body>
<h1>Trombinoscope</h1>
	<ul id="deroulant">
		<li><a href="#">L1-MIPI</a>
			<ul>
				<li><a href="filiere.php?filiere=L1-MIPI&groupe=A1&key=JOJn9LScqr">L1-MIPI-A1</a></li>
	  			<li><a href="filiere.php?filiere=L1-MIPI&groupe=B2&key=JOJn9LScqr">L1-MIPI-B2</a></li>
			</ul>
	  	</li>
	
	  	<li><a href="#">LPI-WS</a>
			<ul>
				<li><a href="filiere.php?filiere=LPI-WS&groupe=LPI-1&key=JOJn9LScqr">LPI-L1</a></li>
				<li><a href="filiere.php?filiere=LPI-WS&groupe=LPI-2&key=JOJn9LScqr">LPI-L2</a></li>
				<li><a href="filiere.php?filiere=LPI-WS&groupe=LPI-3&key=JOJn9LScqr">LPI-L3</a></li>
			</ul>
		</li>

		<li><a href="#">LP-RS</a>
  			<ul>
				<li><a href="filiere.php?filiere=LP-RS&groupe=LPI-1&key=JOJn9LScqr">LP-RS-LPI-1</a></li>
				<li><a href="filiere.php?filiere=LP-RS&groupe=LPI-2&key=JOJn9LScqr">LP-RS-LPI-2</a></li>
				<li><a href="filiere.php?filiere=LP-RS&groupe=LPI-3&key=JOJn9LScqr">LP-RS-LPI-3</a></li>
  			</ul>
  		</li>

  		<li><a href="#">L2-MI</a>
  			<ul>
		  		<li><a href="filiere.php?filiere=L2-MI&groupe=A1&key=JOJn9LScqr">L2-MI-A1</a></li>
		  		<li><a href="filiere.php?filiere=L2-MI&groupe=B2&key=JOJn9LScqr">L2-MI-B2</a></li>
  			</ul>	
    	</li>

    	<li><a href="#">L3-I</a>
			<ul>
				<li><a href="filiere.php?filiere=L3-I&groupe=A1&key=JOJn9LScqr">L3-I-A1</a></li>
				<li><a href="filiere.php?filiere=L3-I&groupe=B2&key=JOJn9LScqr">L3-I-B2</a></li>
			</ul>
        </li>
    </ul>

	<h2>Eleves de <?php echo $_GET['filiere']. " en " . $_GET['groupe']?></h2>
	<form align="center">
	<table align="center">
		<tr>
			<th>Nom</th>
			<th>Prenom</th>
			<th>Email</th>
		</tr>
	<?php

	if(isset($_GET['filiere'])){
		$recup_data = file_get_contents('http://projet-cheikh-site1.alwaysdata.net/API.php?filiere='.$_GET['filiere'].'&groupe='.$_GET['groupe'].'&key=JOJn9LScqr');
		$donnees = json_decode($recup_data,true);
		$number = count($donnees["etudiant"]);
		for ($i=0; $i <$number ; $i++) {
				echo 
				"<tr>
				<td> ".$donnees["etudiant"][$i]['nom']."  </td>
				<td> ".$donnees["etudiant"][$i]['prenom']." </td>
				<td> ".$donnees["etudiant"][$i]['email']."</td>
				</tr>
				";
		}
		
	}


?>
</table>
<br/>
<p><input type="button" value="Imprimer" onClick="window.print()"></p>
</form>
<p><a href="index.php">Retour a la page inscription</a></p>
<p><a href="connexion.php">Retour a la page connexion</a></p>

			
</body>
</html>
