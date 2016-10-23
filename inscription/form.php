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