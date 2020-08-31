<!-- Export -->
<div class="widget has-shadow">
    <div class="widget-body">
        <div class="table-responsive">
            <table id="export-table" class="table mb-0">
                <thead>
                    <tr>
                        <th>Photo</th>
                        <th>Identifiant</th>
                        <th>Libellé</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $res = $db->getAllCategories();
                    if (mysqli_num_rows($res) > 0) {
                        while ($row = mysqli_fetch_array($res)) {
                            $id = $row["idcategorie"];
                            $nom = stripslashes($row["libelle"]);
                            $filename = $row["photo"];
                            ?>
                        <tr>
                            <?php if(empty($filename)){ ?>
                                <td><?php echo "Aucune image" ?></td>
                            <?php } else { ?>
                                <td><img src="./upload/<?php echo $filename; ?>" alt="..." class="margin" width="150" height="100"></td>
                            <?php } ?>
                            <td><span class="text-primary"><?php echo $id ?></span></td>
                            <td><?php echo $nom ?></td>
                            <td class="td-actions">
                                <a href="#"><i class="la la-edit edit"></i></a>
                                <a href="business/delete_categorie.php?idCategorie=<?php echo $row["idcategorie"]; ?>"><i class="la la-close delete"></i></a>
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