<form class="form-horizontal" action="business/add_product.php" method="post" enctype="multipart/form-data">
    <div class="form-group row d-flex align-items-center mb-5">
        <label class="col-lg-3 form-control-label">Désignation</label>
        <div class="col-lg-9">
            <div class="input-group">
                <input type="text" id="designation" name="designation" placeholder="..." class="form-control" required>
            </div>
        </div>
    </div>
    <div class="form-group row d-flex align-items-center mb-5">
        <label class="col-lg-3 form-control-label">Description</label>
        <div class="col-lg-9">
            <div class="input-group">
                <textarea rows="5" type="text" id="description" name="description" placeholder="..." class="form-control"><?php echo $observation; ?></textarea>
            </div>
        </div>
    </div>
    <div class="form-group row d-flex align-items-center mb-5">
        <label class="col-lg-3 form-control-label">Référence</label>
        <div class="col-lg-9">
            <div class="input-group">
                <input type="text" id="reference" name="reference" placeholder="..." class="form-control" required>
            </div>
        </div>
    </div>
    <div class="form-group row d-flex align-items-center mb-5">
        <label class="col-lg-3 form-control-label">Prix</label>
        <div class="col-lg-3">
            <div class="input-group">
                <input type="number" id="prix" name="prix" placeholder="..." class="form-control" required>
            </div>
        </div>
        <label class="col-lg-3 form-control-label">Poids</label>
        <div class="col-lg-3">
            <div class="input-group">
                <input type="text" id="poids" name="poids" placeholder="..." class="form-control">
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
        <label class="col-lg-3 form-control-label">Type</label>
        <div class="col-lg-9">
            <div class="input-group">
                <select name="idtypeProduit" id="idtypeProduit" class="custom-select form-control">
                <?php
                    $res = $db->getAllTypeProduits();
                    if (mysqli_num_rows($res) > 0) {
                        while ($row = mysqli_fetch_array($res)) {
                            $id = $row["idtypeProduit"];
                            $nom = $row["categorie"]." | ".$row["typeProduit"];
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
    <div class="form-group row d-flex align-items-center mb-5">
        <label class="col-lg-3 form-control-label">Fabricant</label>
        <div class="col-lg-9">
            <div class="input-group">
                <select name="idfabricant" id="idfabricant" class="custom-select form-control">
                <?php
                    $res = $db->getAllFabricants();
                    if (mysqli_num_rows($res) > 0) {
                        while ($row = mysqli_fetch_array($res)) {
                            $id = $row["idfabricant"];
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
        <label class="col-lg-3 form-control-label">Etat de la pièce</label>
        <div class="col-lg-9">
            <div class="input-group">
                <select name="idetatProduit" id="idetatProduit" class="custom-select form-control">
                <?php
                    $res = $db->getAllEtats();
                    if (mysqli_num_rows($res) > 0) {
                        while ($row = mysqli_fetch_array($res)) {
                            $id = $row["idetatProduit"];
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
        <label class="col-lg-3 form-control-label">Commentaire</label>
        <div class="col-lg-9">
            <div class="input-group">
                <textarea rows="5" type="text" id="commentaire" name="commentaire" placeholder="..." class="form-control"><?php echo $observation; ?></textarea>
            </div>
        </div>
    </div>
<div class="text-right">
    <button class="btn btn-warning" type="submit">Enregistrer</button>
</div>
</form>