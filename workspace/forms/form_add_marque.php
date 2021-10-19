<form class="form-horizontal" action="business/add_marque.php" method="post" enctype="multipart/form-data">
    <div class="form-group row d-flex align-items-center mb-5">
        <label class="col-lg-3 form-control-label">Libellé</label>
        <div class="col-lg-9">
            <div class="input-group">
                <input type="text" id="libelle" name="libelle" placeholder="..." class="form-control">
            </div>
        </div>
    </div>
    <div class="form-group row d-flex align-items-center mb-5">
        <label class="col-lg-3 form-control-label mt-3">Photo</label>
        <div class="col-lg-9">
            <div class="input-group">
                <input type="file" name="files[]">
            </div>
        </div>
    </div>
    <div class="text-right">
        <button class="btn btn-warning" type="submit">Enregistrer</button>
    </div>
</form>