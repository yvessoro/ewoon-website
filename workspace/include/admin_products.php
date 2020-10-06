<!-- Export -->
<div class="widget has-shadow">
    <div class="widget-body">
        <div class="table-responsive">
            <table id="export-table" class="table mb-0">
                <thead>
                    <tr>
                        <th>Photo</th>
                        <th>Désignation</th>
                        <th>Description</th>
                        <th>Référence</th>
                        <th>Prix</th>
                        <th>Poids</th>
                        <th>Statut</th>
                        <th>Type</th>
                        <th>Modèle</th>
                        <th>Carburant</th>
                        <th>Etat</th>
                        <th>Marque</th>
                        <th>Fabricant</th>
                        <th>version</th>
                        <th>Annonceur</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $res = $db->getAllProducts();
                    if (mysqli_num_rows($res) > 0) {
                        while ($row = mysqli_fetch_array($res)) {
                            $id = $row["idproduit"];
                            $filename = $row["photo"];
                            $designation = stripslashes($row["designation"]);
                            $description = stripslashes($row["description"]);
                            $reference = stripslashes($row["reference"]);
                            $prix = stripslashes($row["prix"]);
                            $poids = stripslashes($row["poids"]);
                            $statut = stripslashes($row["statut"]);
                            $type = stripslashes($row["type"]);
                            $modele = stripslashes($row["modele"]);
                            $carburant = stripslashes($row["carburant"]);
                            $etat = stripslashes($row["etat"]);
                            $marque = stripslashes($row["marque"]);
                            $fabricant = stripslashes($row["fabricant"]);
                            $version = stripslashes($row["version"]);

                            $res1 = $db->getAnnonceurByProduct($row["idannonceur"]);
                            if (mysqli_num_rows($res1) > 0) {
                                while ($rowA = mysqli_fetch_array($res1)) {
                                    $annonceur = stripslashes($rowA["nom"]." ".$rowA["prenom"]);
                                }
                            }else{
                                $annonceur = "EWOON";
                            }
                            
                            ?>
                        <tr>
                            <?php if(empty($filename)){ ?>
                                <td><?php echo "Aucune image" ?></td>
                            <?php } else { ?>
                                <td><img src="./upload/<?php echo $filename; ?>" alt="..." class="margin" width="150" height="100"></td>
                            <?php } ?>
                            <td><?php echo $designation ?></td>
                            <td><?php echo $description ?></td>
                            <td><?php echo $reference ?></td>
                            <td><?php echo $prix ?></td>
                            <td><?php echo $poids ?></td>
                            <?php if($statut==1) {?>
                                <td><span style="width:100px;"><span class="badge-text badge-text-small success">Validé</span></span></td>
                            <?php }else if($statut==2) {?>
                                <td><span style="width:100px;"><span class="badge-text badge-text-small danger">En attente</span></span></td>
                            <?php } ?>
                            <td><?php echo $type ?></td>
                            <td><?php echo $modele ?></td>
                            <td><?php echo $carburant ?></td>
                            <td><?php echo $etat ?></td>
                            <td><?php echo $marque ?></td>
                            <td><?php echo $fabricant ?></td>
                            <td><?php echo $version ?></td>
                            <td><?php echo $annonceur ?></td>
                            <td class="td-actions">
                                <a href="business/validate_product.php?idproduit=<?php echo $row["idproduit"]; ?>"><i class="la la-check edit"></i></a>
                                <a href="business/delete_product.php?idproduit=<?php echo $row["idproduit"]; ?>"><i class="la la-close delete"></i></a>
                            </td>
                        </tr>
                        <?php }
                    } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- End Export -->