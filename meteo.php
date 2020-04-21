<?php
session_start()
?>



<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Informations métérologiques des villes</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<?php
    echo "<h1>Informations métérologiques ".$_GET["Villes"]." </h1>";
    setcookie("villes",$_GET["Villes"],time()+3600));
    echo "Vous avez choisi la ville de : ".$_COOKIE["villes"]."";
    echo "<br>";
	$jsonText=file_get_contents("http://api.openweathermap.org/data/2.5/forecast?q=".$_GET['Villes']."&units=metric&lang=fr&APPID=da883478a4cea4dab7afbba060799b10");
	$jsonArray= json_decode($jsonText,True);
?>

		<ul id=arriere>
			<li>
				<?php
				if($_GET['choix']=='jour')
				{
					echo "Vous avez choisi la météo actuelle et des prochaines heures de la journée";
					echo "<br>";
					echo "<br>";
					echo "Température actuel : ".$jsonArray["list"]["0"]["main"]["temp"]."°C";
					echo "<br>";
					echo "Date : ".$jsonArray["list"]["0"]["dt_txt"];
					echo "<br>";
	        		echo "Temps : ".$jsonArray["list"]["0"]["weather"]["0"]["description"];
	        		echo "<br>";
					echo "<img src='http://openweathermap.org/img/wn/".$jsonArray["list"]["0"]["weather"]["0"]["icon"].".png'/>";
					echo "Température : ".$jsonArray["list"]["1"]["main"]["temp"]."°C";
					echo "<br>";
					echo "Date : ".$jsonArray["list"]["1"]["dt_txt"];
					echo "<br>";
	        		echo "Temps : ".$jsonArray["list"]["1"]["weather"]["0"]["description"];
	        		echo "<br>";
					echo "<img src='http://openweathermap.org/img/wn/".$jsonArray["list"]["0"]["weather"]["0"]["icon"].".png'/>";
					echo "Température : ".$jsonArray["list"]["2"]["main"]["temp"]."°C";
					echo "<br>";
					echo "Date : ".$jsonArray["list"]["2"]["dt_txt"];
					echo "<br>";
	        		echo "Temps : ".$jsonArray["list"]["2"]["weather"]["0"]["description"];
	        		echo "<br>";
					echo "<img src='http://openweathermap.org/img/wn/".$jsonArray["list"]["2"]["weather"]["0"]["icon"].".png'/>";

				}
				elseif ($_GET['choix']=='demain') {
					echo "Vous avez choisi la météo de demain";
					echo "<br>";
					echo "<br>";
					echo "Date : ".$jsonArray["list"]["8"]["dt_txt"];
					echo "<br>";
					echo "Température : ".$jsonArray["list"]["8"]["main"]["temp"]."°C"; 
					echo "<br>";
					echo "Temps : ".$jsonArray["list"]["8"]["weather"]["0"]["description"];	
					echo "<br>";
					echo "<img src='http://openweathermap.org/img/wn/".$jsonArray["list"]["8"]["weather"]["0"]["icon"].".png'/>";
					echo "Température : ".$jsonArray["list"]["9"]["main"]["temp"]."°C";
					echo "<br>";
					echo "Date : ".$jsonArray["list"]["9"]["dt_txt"];
					echo "<br>";
	        		echo "Temps : ".$jsonArray["list"]["9"]["weather"]["0"]["description"];
	        		echo "<br>";
					echo "<img src='http://openweathermap.org/img/wn/".$jsonArray["list"]["9"]["weather"]["0"]["icon"].".png'/>";
					echo "Température : ".$jsonArray["list"]["10"]["main"]["temp"]."°C";
					echo "<br>";
					echo "Date : ".$jsonArray["list"]["10"]["dt_txt"];
					echo "<br>";
        			echo "Temps : ".$jsonArray["list"]["10"]["weather"]["0"]["description"];
        			echo "<br>";
					echo "<img src='http://openweathermap.org/img/wn/".$jsonArray["list"]["10"]["weather"]["0"]["icon"].".png'/>";

				}
				elseif ($_GET['choix']=="jours_3") {
					echo "Vous avez choisi d'afficher la météo sur 3 jours";
					echo "<br>";
					echo "<br>";
					echo "Température actuel : ".$jsonArray["list"]["0"]["main"]["temp"]."°C";
					echo "<br>";
					echo "Date : ".$jsonArray["list"]["0"]["dt_txt"];
					echo "<br>";
	        		echo "Temps : ".$jsonArray["list"]["0"]["weather"]["0"]["description"];
	        		echo "<br>";
					echo "<img src='http://openweathermap.org/img/wn/".$jsonArray["list"]["0"]["weather"]["0"]["icon"].".png'/>";
					echo "Température : ".$jsonArray["list"]["1"]["main"]["temp"]."°C";
					echo "<br>";
					echo "Date : ".$jsonArray["list"]["1"]["dt_txt"];
					echo "<br>";
	        		echo "Temps : ".$jsonArray["list"]["1"]["weather"]["0"]["description"];
	        		echo "<br>";
					echo "<img src='http://openweathermap.org/img/wn/".$jsonArray["list"]["0"]["weather"]["0"]["icon"].".png'/>";
					echo "Température : ".$jsonArray["list"]["2"]["main"]["temp"]."°C";
					echo "<br>";
					echo "Date : ".$jsonArray["list"]["2"]["dt_txt"];
					echo "<br>";
	        		echo "Temps : ".$jsonArray["list"]["2"]["weather"]["0"]["description"];
	        		echo "<br>";
					echo "<img src='http://openweathermap.org/img/wn/".$jsonArray["list"]["2"]["weather"]["0"]["icon"].".png'/>";
					echo "Date : ".$jsonArray["list"]["8"]["dt_txt"];
					echo "<br>";
					echo "Température : ".$jsonArray["list"]["8"]["main"]["temp"]."°C"; 
					echo "<br>";
					echo "Temps : ".$jsonArray["list"]["8"]["weather"]["0"]["description"];	
					echo "<br>";
					echo "<img src='http://openweathermap.org/img/wn/".$jsonArray["list"]["8"]["weather"]["0"]["icon"].".png'/>";
					echo "Température : ".$jsonArray["list"]["9"]["main"]["temp"]."°C";
					echo "<br>";
					echo "Date : ".$jsonArray["list"]["9"]["dt_txt"];
					echo "<br>";
	        		echo "Temps : ".$jsonArray["list"]["9"]["weather"]["0"]["description"];
	        		echo "<br>";
					echo "<img src='http://openweathermap.org/img/wn/".$jsonArray["list"]["9"]["weather"]["0"]["icon"].".png'/>";
					echo "Température : ".$jsonArray["list"]["10"]["main"]["temp"]."°C";
					echo "<br>";
					echo "Date : ".$jsonArray["list"]["10"]["dt_txt"];
					echo "<br>";
        			echo "Temps : ".$jsonArray["list"]["10"]["weather"]["0"]["description"];
        			echo "<br>";
					echo "<img src='http://openweathermap.org/img/wn/".$jsonArray["list"]["10"]["weather"]["0"]["icon"].".png'/>";

					echo "Date : ".$jsonArray["list"]["16"]["dt_txt"];
					echo "<br>";
					echo "Température : ".$jsonArray["list"]["16"]["main"]["temp"]."°C";
					echo "<br>";
					echo "Temps : ".$jsonArray["list"]["16"]["weather"]["0"]["description"];
					echo "<br>";
					echo "<img src='http://openweathermap.org/img/wn/".$jsonArray["list"]["16"]["weather"]["0"]["icon"].".png'/>";
					echo "Température : ".$jsonArray["list"]["17"]["main"]["temp"]."°C";
					echo "<br>";
					echo "Date : ".$jsonArray["list"]["17"]["dt_txt"];
					echo "<br>";
        			echo "Temps : ".$jsonArray["list"]["17"]["weather"]["0"]["description"];
        			echo "<br>";
					echo "<img src='http://openweathermap.org/img/wn/".$jsonArray["list"]["17"]["weather"]["0"]["icon"].".png'/>";
					echo "Température : ".$jsonArray["list"]["18"]["main"]["temp"]."°C";
					echo "<br>";
					echo "Date : ".$jsonArray["list"]["18"]["dt_txt"];
					echo "<br>";
        			echo "Temps : ".$jsonArray["list"]["18"]["weather"]["0"]["description"];
        			echo "<br>";
					echo "<img src='http://openweathermap.org/img/wn/".$jsonArray["list"]["18"]["weather"]["0"]["icon"].".png'/>";
				}
				
				?>
			</li>
		</ul>

<footer>
	<p> <a href="index.html"> Retour sur la carte de la France </a> </p>
</footer>
</body>
</html>