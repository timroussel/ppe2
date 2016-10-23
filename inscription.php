<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link href="css/bootstrap.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="form.css">
        <title>Inscription</title>
    </head>
    <body>
    <?php
        if (empty($_POST)){
	   $_POST = print_r("");	
        }
    ?>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <img src="img/7892.png" alt="Gefor" class="center-block img-circle">
                    <h1 class="text-center">Formulaire d'inscription</h1>
                </div>
            </div> 
            <form action="" method="POST" class="row">
                <div class="col-xs-12 col-md-6 col-md-offset-3">
                    <div class="form-group">
                        <label for="identifiant">Identifiant</label>
                        <input type="text" class="form-control" placeholder="Identifiant" name="identifiant" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Mot de passe</label>
                        <input type="password" class="form-control" placeholder="Mot de passe" name="password" required>
                    </div>
                    <div class="form-group">
                        <label for="password2">Confirmation du mot de passe</label>
                        <input type="password" class="form-control" placeholder="Mot de passe" name="password2" required>
                    </div>
                    <div class="form-group">
                        <label for="nom">Nom</label>
                        <input type="text" class="form-control" placeholder="Nom" name="nom" required>
                    </div>
                    <div class="form-group">
                        <label for="prenom">Prénom</label>
                        <input type="text" class="form-control" placeholder="Prénom" name="prenom" required>
                    </div>
                    <div class="form-group">
                        <label name="groupe">Choisir votre groupe</label>
                        <select class="form-control"  name="groupe" >
                            <option value="stagiaire">Stagiaire</option>
                            <option value="formateur">Formateur</option>
                            <option value="administrateur">Administrateur</option>
                        </select>
                    </div>
                    <div class="button">
                        <input type="submit" class="btn btn-success" value="Envoyer" />
                        <input type="reset" class="btn btn-warning" value="Annuler" />
                  </div>
                </div>
            </form>
            <?php
            $pwd = sha1($_POST['password']);
            $pwd2 = sha1($_POST['password2']);
            
            if ($pwd == "da39a3ee5e6b4b0d3255bfef95601890afd80709") {
                echo " ";
                }
            elseif ($pwd == $pwd2) {
                $today = date("F j, Y, g:i a"); 
                $fp = fopen('password.htaccess', 'a');
                $donnees = fwrite($fp, $pwd .';'.$_POST['identifiant'] .';'. $_POST['nom'] .';'.$_POST['prenom'] .';'. $_POST['groupe'] .';'. $today. "\r\n");		
                echo "Votre inscription a bien été prise en compte.";
                fclose($fp);
                    }
            else {
                echo "les mots de passe sont différents !";
                }
            ?>
        </div>
    </body>
</html>