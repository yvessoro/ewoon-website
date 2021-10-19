<form class="form-horizontal" action="business/add_version.php" method="post">
    <div class="form-group row d-flex align-items-center mb-5">
        <label class="col-lg-3 form-control-label">Libellé</label>
        <div class="col-lg-9">
            <div class="input-group">
                <input type="text" id="libelle" name="libelle" placeholder="..." class="form-control">
            </div>
        </div>
    </div>
    <div class="form-group row d-flex align-items-center mb-5">
        <label class="col-lg-3 form-control-label mt-3">Portes</label>
        <div class="col-lg-9">
            <div class="input-group">
                <input type="number" id="portes" name="portes" placeholder="..." class="form-control">
            </div>
        </div>
    </div>
    <div class="form-group row d-flex align-items-center mb-5">
        <label class="col-lg-3 form-control-label">Couleur</label>
        <div class="col-lg-9">
            <div class="input-group">
                <input type="text" id="couleur" name="couleur" placeholder="..." class="form-control">
            </div>
        </div>
    </div>
    <div class="form-group row d-flex align-items-center mb-5">
        <label class="col-lg-3 form-control-label">Modèle</label>
        <div class="col-lg-9">
            <div class="input-group">
                <select name="idmodele" id="idmodele" class="custom-select form-control">
                <?php
                    $res = $db->getAllModeles();
                    if (mysqli_num_rows($res) > 0) {
                        while ($row = mysqli_fetch_array($res)) {
                            $id = $row["idmodele"];
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
    <div class="form-group row d-flex align-items-center mb-5">
        <label class="col-lg-3 form-control-label">Carburant</label>
        <div class="col-lg-9">
            <div class="input-group">
                <select name="idcarburant" id="idcarburant" class="custom-select form-control">
                <?php
                    $res = $db->getAllCarburants();
                    if (mysqli_num_rows($res) > 0) {
                        while ($row = mysqli_fetch_array($res)) {
                            $id = $row["idcarburant"];
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