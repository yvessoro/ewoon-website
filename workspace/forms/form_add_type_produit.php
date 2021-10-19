<form class="form-horizontal" action="business/add_type_produit.php" method="post">
    <div class="form-group row d-flex align-items-center mb-5">
        <label class="col-lg-3 form-control-label">Libellé</label>
        <div class="col-lg-9">
            <div class="input-group">
                <input type="text" id="libelle" name="libelle" placeholder="..." class="form-control">
            </div>
        </div>
    </div>
    <div class="form-group row d-flex align-items-center mb-5">
        <label class="col-lg-3 form-control-label">Catégorie</label>
        <div class="col-lg-9">
            <div class="input-group">
                <select name="categorie" id="categorie" class="custom-select form-control">
                <?php
                    $res = $db->getAllCategories();
                    if (mysqli_num_rows($res) > 0) {
                        while ($row = mysqli_fetch_array($res)) {
                            $id = $row["idcategorie"];
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