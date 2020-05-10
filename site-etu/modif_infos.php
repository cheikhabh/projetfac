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

    if ($fichiercsv = fopen('./data/etudiants.csv', 'r'))
    {
        $newcontenu = '';
        $nouvelle_ligne = $_GET['nom'].";".$_GET['prenom'].";".$_GET['email'].";".md5($_GET['email'].$_GET['password']).";".$_GET['filiere'].";".$_GET['groupe']."\n";

        while (($ligne = fgets($fichiercsv)) !== FALSE)
        {
            $DonLine=explode(";", $ligne);
            if ($_GET['email'] == $DonLine[2])
            {
                $newcontenu = $newcontenu . $nouvelle_ligne;
            }
            else 
            {
                $newcontenu = $newcontenu . $ligne;
            }
        }
        fclose($fichiercsv);
        $Fecriture = fopen('./data/etudiants.csv', 'w');
        fputs($Fecriture, $newcontenu);
        fclose($Fecriture);
        exit(header("Location: ./infos.php"));
    }

?>
