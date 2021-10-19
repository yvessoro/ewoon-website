<form class="form-horizontal" action="business/add_modele.php" method="post" enctype="multipart/form-data">
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
    <div class="form-group row d-flex align-items-center mb-5">
        <label class="col-lg-3 form-control-label">Année</label>
        <div class="col-lg-9">
            <div class="input-group">
                <input type="text" id="annee" name="annee" placeholder="..." class="form-control">
            </div>
        </div>
    </div>
    <div class="form-group row d-flex align-items-center mb-5">
        <label class="col-lg-3 form-control-label">Marque</label>
        <div class="col-lg-9">
            <div class="input-group">
                <select name="marque" id="marque" class="custom-select form-control">
                <?php
                    $res = $db->getAllMarques();
                    if (mysqli_num_rows($res) > 0) {
                        while ($row = mysqli_fetch_array($res)) {
                            $id = $row["idmarque"];
                            $nom = $row["libelle"];
                            ?>
                                <option value="<?php echo $id; ?>"><?php echo $nom; ?></option>
                            <?php
                        }
                    }?>
                </select>
            </div>
        </div>
    </div>
<div class="text-right">
    <button class="btn btn-warning" type="submit">Enregistrer</button>
</div>
</form>