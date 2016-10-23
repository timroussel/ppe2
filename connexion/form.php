<form action="" method="POST" class="row">
    <div class="col-xs-12 col-md-6 col-md-offset-3">
        <div class="form-group">
            <label for="identifiant">Identifiant</label>
            <input type="text" class="form-control" placeholder="Identifiant" value="<?php echo (!empty($_POST["identifiant"]) ? $_POST["identifiant"] : ""); ?>" name="identifiant" id="identifiant" required>
        </div>
        <div class="form-group">
            <label for="password">Mot de passe</label>
            <input type="password" class="form-control" placeholder="Mot de passe" value="<?php echo (!empty($_POST["password"]) ?$_POST["password"] : ""); ?>" name="password" id="password" required>
        </div>
        <div class="button">
            <input type="submit" class="btn btn-success" value="Envoyer" />
            <input type="reset" class="btn btn-warning" value="Annuler" />
        </div>
    </div>
</form>