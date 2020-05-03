<?php
    print_r($_FILES);
    if(isset($_FILES['photos']) && !empty($_FILES['photos']['name'])) {
    $tailleMax = 2097152;
    $extensionsValides = array('jpg', 'jpeg', 'gif', 'png');
    if($_FILES['photos']['size'] <= $tailleMax) {
        $extensionUpload = strtolower(substr(strrchr($_FILES['photos']['name'], '.'), 1));
        if(in_array($extensionUpload, $extensionsValides)) {
            $chemin = "./photos/".$_FILES['photos']['name'].".".$extensionUpload;
        $resultat = move_uploaded_file($_FILES['photos']['tmp_name'], $chemin);
            echo $chemin;

        } 
        } 
        }

        ?>
