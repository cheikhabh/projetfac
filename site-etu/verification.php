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

session_start();
$_SESSION['email']=$_GET['email'];
function verification(){
    $lecture=file('./data/etudiants.csv');
    $found= FALSE;
    for ($i=0; $i < sizeof($lecture) ; $i++) { 
        $Rlignes= explode(";", $lecture[$i]);
        $Rlignes[1]=str_replace("\n","",$Rlignes[1]);
        if ($_GET['email']==$Rlignes[2] && md5($_GET['email'].$_GET['password'])==$Rlignes[3]) {
            $found=TRUE;
        }
        
    }
    if ($found==TRUE){
        header('Location: ./infos.php');
        exit();
    }
    else{
        header('Location: ./connexion.php');
        exit();
    }
}
verification()
?>
