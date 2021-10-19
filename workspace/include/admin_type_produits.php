<!-- Export -->
<div class="widget has-shadow">
    <div class="widget-body">
        <div class="table-responsive">
            <table id="export-table" class="table mb-0">
                <thead>
                    <tr>
                        <th>Identifiant</th>
                        <th>Libellé</th>
                        <th>Catégorie</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $res = $db->getAllTypeProduits();
                    if (mysqli_num_rows($res) > 0) {
                        while ($row = mysqli_fetch_array($res)) {
                            $id = $row["idtypeProduit"];
                            $nom = stripslashes($row["typeProduit"]);
                            $categorie = stripslashes($row["categorie"]);
                            ?>
                        <tr>
                            <td><span class="text-primary"><?php echo $id ?></span></td>
                            <td><?php echo $nom ?></td>
                            <td><?php echo $categorie ?></td>
                            <td class="td-actions">
                                <a href="#"><i class="la la-edit edit"></i></a>
                                <a href="business/delete_type_produit.php?idTypeProduit=<?php echo $row["idtypeProduit"]; ?>"><i class="la la-close delete"></i></a>
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