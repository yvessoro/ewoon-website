<form class="form-horizontal" action="business/add_car.php" method="post" enctype="multipart/form-data">
    <div class="form-group row d-flex align-items-center mb-5">
        <label class="col-lg-3 form-control-label">Immatriculation</label>
        <div class="col-lg-9">
            <div class="input-group">
                <input type="text" id="immatriculation" name="immatriculation" placeholder="..." class="form-control" required>
            </div>
        </div>
    </div>
    <div class="form-group row d-flex align-items-center mb-5">
        <label class="col-lg-3 form-control-label">N° VIN</label>
        <div class="col-lg-9">
            <div class="input-group">
                <input type="text" id="vin" name="vin" placeholder="..." class="form-control" required>
            </div>
        </div>
    </div>
    <div class="form-group row d-flex align-items-center mb-5">
        <label class="col-lg-3 form-control-label">Marque</label>
        <div class="col-lg-9">
            <div class="input-group">
                <select name="idmarque" id="idmarque" class="custom-select form-control">
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
        <label class="col-lg-3 form-control-label">Version</label>
        <div class="col-lg-9">
            <div class="input-group">
                <select name="idversion" id="idversion" class="custom-select form-control">
                <?php
                    $res = $db->getAllVersions();
                    if (mysqli_num_rows($res) > 0) {
                        while ($row = mysqli_fetch_array($res)) {
                            $id = $row["idversion"];
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