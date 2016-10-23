<!DOCTYPE html>
<?php include("validate.php"); ?>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
        <title>Inscription</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <img src="../img/7892.png" alt="Gefor" class="center-block img-circle">
                    <h1 class="text-center">Formulaire d'inscription</h1>
                </div>
            </div> 
            <?php
            if(isset($error)){
                echo('<div class="alert alert-danger" role="alert"> <strong>Erreur !</strong> '.$error.'</div>');
            }
            if(isset($success)){
                ?>
                <div class="alert alert-success" role="alert"> <strong>Félicitations !</strong> votre inscription est prise en compte.</div>
                <a href="../connexion.php">Connectez vous</a>
                <?php
            }else{
                include("form.php");
            }
            ?>
        </div>
    </body>
</html>