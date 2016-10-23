<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link href="css/bootstrap.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="form.css"/>
        <title>Merci</title>
    </head>
    <body>
        <div class="container">
            <div class="jumbotron">
                <div class="row">
                    <div class="col-xs-12 col-md-6">
                        <?php 
                            $prenom = $_POST['prenom'];
                        ?>
                        <p>Merci <?php echo $prenom ?>, nous reviendrons vers toi au plus vite ! <br /> Les stagiaires BTS SIO.</p> 
                    </div>
                </div>
                <div>
                    <?php 
                        if(isset($_POST['nom']))
                            $nom=$_POST['nom'];
                    
                        if(isset($_POST['prenom']))
                            $prenom=$_POST['prenom'];
                        
                        if(isset($_POST['email']))
                            $email=$_POST['email'];
                                                    
                        if(isset($_POST['section']))  
                            $section=$_POST['section'];
                                                    
                        if(isset($_POST['description']))  
                            $description=$_POST['description'];
                        
                        if(empty($nom) OR empty($prenom) OR empty($email) OR empty($section) OR empty($description))
                        { 
                            echo "Attention, aucun champs ne doit être vide !"; 
                        } 
                        else      
                        {
                            
                            try 
                            {
                                $database = new PDO('mysql:host=localhost;dbname=intervention;charset=utf8', 'root', '');

                                $req = $database->prepare('INSERT INTO utilisateur(mail, nom, prenom, section) VALUES(:MailUtilisateur, :NomUtilisateur, :PrenomUtilisateur, :SectionUtilisateur)');                            
                                $req->execute(array(
                                    'MailUtilisateur' => $email,
                                    'NomUtilisateur' => $nom,
                                    'PrenomUtilisateur' => $prenom,
                                    'SectionUtilisateur' => $section,
                                    ));

                                $req2 = $database->prepare("INSERT INTO `intervention` (`MotifIntervention`, `SolutionIntervention`, `DateIntervention`) VALUES (:MotifIntervention, 's', UTC_DATE())");
                                
                                $req2->execute(array(
                                    'MotifIntervention' => $description,
                                ));

                                $database = null;
                            } catch (PDOException $e) {
                                print "Erreur !: " . $e->getMessage() . "<br/>";
                                die();
                            }
                            
                        }  
                    ?>
                </div>
            </div>
        </div>
    </body>
</html>