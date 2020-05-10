<!DOCTYPE html>
<html lang="fr">
<head>
  <title>Trombinoscope</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<header>
    <div id="banniere">
    <p><img src="./ucp.png" alt="ucp"/></p>
    </div>
</header>


<body>
<h1>Trombinoscope</h1>
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
<p>Découvrez la liste des filières et des groupes du département informatique de l'université:</p>
<table>

   <tr>
       <th>Filiere</th>
       <th>Première année</th>
       <th>Deuxieme année</th>
       <th>Troisième année</th>

   </tr>
<?php 

  $recup_data = file_get_contents('http://projet-cheikh-site1.alwaysdata.net/API_groupe.php');
  $data = json_decode($recup_data,true);
  for ($i=0; $i < 4 ; $i++) { 
  	echo "
     <tr>
      <td>".$data["listeFilieres"]["$i"]["nomFiliere"]."</td>
      <td>".$data["listeFilieres"]["$i"]["groupes"][0]."</td>
      <td>".$data["listeFilieres"]["$i"]["groupes"][1]."</td>
      <td>".$data["listeFilieres"]["$i"]["groupes"][2]."</td>
      <td>".$data["listeFilieres"]["$i"]["groupes"][3]."</td>
      <td>".$data["listeFilieres"]["$i"]["groupes"][4]."</td>
     </tr>
  ";
  	
  }

?>
</table>
<p>Retrouvez en mosaique les étudiants par filiere et par groupe <a href="filiere.php">en cliquant ici</p>
</body>
</html>
