<?php
header('Content-Type: application/json');

// Depuis le site 2
// $filieresJSON = file_get_contents("https://...URL_SITE1...../API/getAPI.php?requete=ALL&key=ABCDEFGHHIJK");
// json_decode

readfile("./filieres_groupes.json");


exit();
