<!-- Export -->
<div class="widget has-shadow">
    <div class="widget-body">
        <div class="table-responsive">
            <table id="export-table" class="table mb-0">
                <thead>
                    <tr>
                        <th>Immatriculation</th>
                        <th>N° VIN</th>
                        <th>Marque</th>
                        <th>Modèle</th>
                        <th>version</th>
                        <th>Carburant</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $res = $db->getAllCarsByUser($_SESSION['ID']);
                    if (mysqli_num_rows($res) > 0) {
                        while ($row = mysqli_fetch_array($res)) {
                            $id = $row["idvehicule"];
                            $immatriculation = stripslashes($row["immatriculation"]);
                            $vin = stripslashes($row["vin"]);
                            $statut = stripslashes($row["statut"]);
                            $modele = stripslashes($row["modele"]);
                            $carburant = stripslashes($row["carburant"]);
                            $marque = stripslashes($row["marque"]);
                            $version = stripslashes($row["version"]);
                            ?>
                        <tr>
                            <td><?php echo $immatriculation ?></td>
                            <td><?php echo $vin ?></td>
                            <td><?php echo $marque ?></td>
                            <td><?php echo $modele ?></td>
                            <td><?php echo $version ?></td>
                            <td><?php echo $carburant ?></td>
                            <td class="td-actions">
                                <a href="#"><i class="la la-edit edit"></i></a>
                                <a href="business/delete_car.php?idvehicule=<?php echo $row["idvehicule"]; ?>"><i class="la la-close delete"></i></a>
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