<?php
session_start();
?>


<!DOCTYPE html>
<html>
<head>
	<title>Trombinoscope</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
<h1>Trombinoscope</h1>
	<ul id="deroulant">
		<li><a href="#">L1-MIPI</a>
			<ul>
				<li><a href="filiere.php?filiere=L1-MIPI&groupe=A1&key=yGUQcJiVss">L1-MIPI-A1</a></li>
	  			<li><a href="filiere.php?filiere=L1-MIPI&groupe=B2&key=yGUQcJiVss">L1-MIPI-B2</a></li>
			</ul>
	  	</li>
	
	  	<li><a href="#">LPI-WS</a>
			<ul>
				<li><a href="filiere.php?filiere=LPI-WS&groupe=LPI-1&key=yGUQcJiVss">LPI-L1</a></li>
				<li><a href="filiere.php?filiere=LPI-WS&groupe=LPI-2&key=yGUQcJiVss">LPI-L2</a></li>
				<li><a href="filiere.php?filiere=LPI-WS&groupe=LPI-3&key=yGUQcJiVss">LPI-L3</a></li>
			</ul>
		</li>

		<li><a href="#">LP-RS</a>
  			<ul>
				<li><a href="filiere.php?filiere=LP-RS&groupe=LPI-1&key=yGUQcJiVss">LP-RS-LPI-1</a></li>
				<li><a href="filiere.php?filiere=LP-RS&groupe=LPI-2&key=yGUQcJiVss">LP-RS-LPI-2</a></li>
				<li><a href="filiere.php?filiere=LP-RS&groupe=LPI-3&key=yGUQcJiVss">LP-RS-LPI-3</a></li>
  			</ul>
  		</li>

  		<li><a href="#">L2-MI</a>
  			<ul>
		  		<li><a href="filiere.php?filiere=L2-MI&groupe=A1&key=yGUQcJiVss">L2-MI-A1</a></li>
		  		<li><a href="filiere.php?filiere=L2-MI&groupe=B2&key=yGUQcJiVss">L2-MI-B2</a></li>
  			</ul>	
    	</li>

    	<li><a href="#">L3-I</a>
			<ul>
				<li><a href="filiere.php?filiere=L3-I&groupe=A1&key=yGUQcJiVss">L3-I-A1</a></li>
				<li><a href="filiere.php?filiere=L3-I&groupe=B2&key=yGUQcJiVss">L3-I-B2</a></li>
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
		$recup_data = file_get_contents('http://projet-cheikh-site1.alwaysdata.net/API.php?filiere='.$_GET['filiere'].'&groupe='.$_GET['groupe'].'&key=yGUQcJiVss');
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
<input type="button" value="Imprimer" onClick="window.print()">
</form>
<p><a href="index.php">Retour a la page inscription</a></p>
<p><a href="connexion.php">Retour a la page connexion</a></p>

			
</body>
</html>
