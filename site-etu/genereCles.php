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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Genération de votre clé API</title>
</head> 
<header>
    <div id="banniere">
    <p><img src="./images/ucp.png" alt="ucp"/></p>
    </div>
</header>
<body>
    <h1> Demande de clé API </h1>
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
        <fieldset>
            <legend><h2>Entrer votre mail</h2> </legend> 
            <div>
            <form action="genereCles.php" method="get">
                Email:<input type="mail" name="Mail_Api">
                <input type="submit" name="sub" value="Valider">
            </form>
            </div>
        </fieldset>
    </td>
</tr>
</table>

<?php
function randomCle($longueur){
    $caracteres = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $longueurMax = strlen($caracteres);
    $chaineAlea = '';
    for($i = 0; $i <$longueur; $i++){
		$chaineAlea .= $caracteres[rand(0, $longueurMax - 1)];

}
return $chaineAlea;
}


function apiMail($email){
    $RecupFich=file('./data/api.csv');
    $api="";
    for($i=0; $i < sizeof($RecupFich); $i++){
        $ligne=explode(";" , $RecupFich[$i]);
        if($email==$ligne[0]){
            $api=$ligne[1];
        }
    }
    return $api;
}
$apiCle=randomCle(10);
$mail='';
if(isset($_GET['Mail_Api'])){
    $mail=$_GET['Mail_Api'];
    if(apiMail($mail)){
        echo "<p> Votre clé est la suivante: " .apiMail($mail)."</p>";
    }
    else{
        $write_ligne="$mail;$apiCle;\n";
        $fichier=fopen('./data/api.csv', 'a');
        fwrite($fichier, $write_ligne);

        echo"<p> Votre clé est la suivante: ".$apiCle."</p>";
    }
}

?>
</body>
</html>