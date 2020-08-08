<!-- Export -->
<div class="widget has-shadow">
    <div class="widget-body">
        <div class="table-responsive">
            <table id="export-table" class="table mb-0">
                <thead>
                    <tr>
                        <th>Photo</th>
                        <th>Libellé</th>
                        <th>Année</th>
                        <th>Marque</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $res = $db->getAllModeles();
                    if (mysqli_num_rows($res) > 0) {
                        while ($row = mysqli_fetch_array($res)) {
                            $id = $row["idmodele"];
                            $filename = $row["photo"];
                            $nom = stripslashes($row["libelle"]);
                            $annee = stripslashes($row["annee"]);
                            $marque = stripslashes($row["marque"]);
                            ?>
                        <tr>
                            <?php if(empty($filename)){ ?>
                                <td><?php echo "Aucune image" ?></td>
                            <?php } else { ?>
                                <td><img src="./upload/<?php echo $filename; ?>" alt="..." class="margin" width="150" height="100"></td>
                            <?php } ?>
                            <td><?php echo $nom ?></td>
                            <td><?php echo $annee ?></td>
                            <td><?php echo $marque ?></td>
                            <td class="td-actions">
                                <a href="#"><i class="la la-edit edit"></i></a>
                                <a href="business/delete_modele.php?idModele=<?php echo $row["idmodele"]; ?>"><i class="la la-close delete"></i></a>
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