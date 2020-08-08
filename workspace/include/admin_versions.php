<!-- Export -->
<div class="widget has-shadow">
    <div class="widget-body">
        <div class="table-responsive">
            <table id="export-table" class="table mb-0">
                <thead>
                    <tr>
                        <th>Libellé</th>
                        <th>Portes</th>
                        <th>Couleur</th>
                        <th>Modèle</th>
                        <th>Carburant</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $res = $db->getAllVersions();
                    if (mysqli_num_rows($res) > 0) {
                        while ($row = mysqli_fetch_array($res)) {
                            $id = $row["idversion"];
                            $nom = stripslashes($row["libelle"]);
                            $portes = stripslashes($row["nbre_porte"]);
                            $couleur = stripslashes($row["couleur"]);
                            $modele = stripslashes($row["modele"]);
                            $carburant = stripslashes($row["carburant"]);
                            ?>
                        <tr>
                            <td><?php echo $nom ?></td>
                            <td><?php echo $portes ?></td>
                            <td><?php echo $couleur ?></td>
                            <td><?php echo $modele ?></td>
                            <td><?php echo $carburant ?></td>
                            <td class="td-actions">
                                <a href="#"><i class="la la-edit edit"></i></a>
                                <a href="business/delete_version.php?idversion=<?php echo $row["idversion"]; ?>"><i class="la la-close delete"></i></a>
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