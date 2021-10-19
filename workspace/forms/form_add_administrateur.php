<form class="form-horizontal" action="business/add_admin.php" method="post">
    <div class="form-group row d-flex align-items-center mb-5">
        <label class="col-lg-3 form-control-label">Nom</label>
        <div class="col-lg-9">
            <div class="input-group">
                <input type="text" id="nom" name="nom" placeholder="..." class="form-control">
            </div>
        </div>
    </div>
    <div class="form-group row d-flex align-items-center mb-5">
        <label class="col-lg-3 form-control-label">Prénom(s)</label>
        <div class="col-lg-9">
            <div class="input-group">
                <input type="text" id="prenom" name="prenom" placeholder="..." class="form-control">
            </div>
        </div>
    </div>
    <div class="form-group row d-flex align-items-center mb-5">
        <label class="col-lg-3 form-control-label">Nom d'utilisateur</label>
        <div class="col-lg-9">
            <div class="input-group">
                <input type="text" id="username" name="username" placeholder="..." class="form-control">
            </div>
        </div>
    </div>
    <div class="form-group row d-flex align-items-center mb-5">
        <label class="col-lg-3 form-control-label">Mot de passe</label>
        <div class="col-lg-9">
            <div class="input-group">
                <input type="password" id="password" name="password" placeholder="..." class="form-control">
            </div>
        </div>
    </div>
    <div class="text-right">
        <button class="btn btn-warning" type="submit">Enregistrer</button>
    </div>
</form>