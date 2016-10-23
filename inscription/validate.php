 <?php
    //Only check this once the user fill in the form.
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $pwd = sha1($_POST['password']);
        $pwd2 = sha1($_POST['password2']);
        //User type 2 differents password, error
        if($pwd != $pwd2){
            $error = "Les mots de passes ne sont pas identiques";
            return;
        }
        try{
            $today = date("F j, Y, g:i a"); 
            $fp = fopen('../password.htaccess', 'a');
            $donnees = fwrite($fp, $pwd .';'.$_POST['identifiant'] .';'. $_POST['nom'] .';'.$_POST['prenom'] .';'. $_POST['groupe'] .';'. $today. "\r\n");	
            fclose($fp);
            $success = true;    
        } catch (Exception $e) {
            $error = $e->getMessage();
        }
    }
?>