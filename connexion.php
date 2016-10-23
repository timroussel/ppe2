<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link href="css/bootstrap.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="form.css">
        <title>Connexion</title>
    </head>
    <body>
        <?php
        if (empty($_POST))
        {
            $_POST = print_r("");
        }
        ?> 
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12">
                    <img src="img/7892.png" alt="Gefor" class="center-block img-circle">
                    <h1 class="text-center">Formulaire de connexion</h1>
                </div>
            </div> 
            <form action="" method="POST" class="row">
                <div class="col-xs-12 col-md-6 col-md-offset-3">
                    <div class="form-group">
                        <label for="identifiant">Identifiant</label>
                        <input type="text" class="form-control" placeholder="Identifiant" value="<?php echo (!empty($_POST["identifiant"]) ? $_POST["identifiant"] : ""); ?>" name="identifiant" id="identifiant" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Mot de passe</label>
                        <input type="password" class="form-control" placeholder="Mot de passe" value="<?php echo (!empty($_POST["password"]) ? $_POST["password"] : ""); ?>" name="password" id="password" required>
                    </div>
                    <div class="button">
                        <input type="submit" class="btn btn-success" value="Envoyer" />
                        <input type="reset" class="btn btn-warning" value="Annuler" />
                  </div>
                </div>
                <?php  
		          $fic = fopen('password.htaccess', 'r');  // Ouverture du fichier en lecteure seule
		          while (!feof($fic)) {					 // On parcour le fichier
			     $ligne = fgets($fic);
			     $datas = explode(';', $ligne);       // On sépare les différentes informations avec un explode qui va aller dans le tableau $datas
			     if (sha1($_POST['password']) == $datas[0] && $_POST['identifiant'] == $datas[1]) {   // si le mot de passe et le login sont pareils alors je suis connecté
				echo "Vous êtes connectés";	
			         }
		          }
		          fclose($fic); // fermeture du fichier 
                ?>
            </form>
        </div>
    </body>
</html>