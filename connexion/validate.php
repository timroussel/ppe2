<?php
    //Only check this once the user fill in the form.
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        try {
            $success = false;
            $fic = fopen('../password.htaccess', 'r');  // Ouverture du fichier en lecteure seule
            while (!feof($fic)) {			// On parcour le fichier
			     $ligne = fgets($fic);
			     $datas = explode(';', $ligne);   //On sépare les différentes informations avec un explode qui va aller dans le tableau $datas
                if (sha1($_POST['password']) == $datas[0] && $_POST['identifiant'] == $datas[1]){
                    $success = true;
                    break;
                }
            }
            fclose($fic);
            if ($success == false){
                $error = "identifiant incorrect";
            }
        } catch (Exception $e) {
            $error = $e->getMessage();
        }
    }
?>