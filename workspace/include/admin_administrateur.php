<!-- Export -->
<div class="widget has-shadow">
    <div class="widget-body">
        <div class="table-responsive">
            <table id="export-table" class="table mb-0">
                <thead>
                    <tr>
                        <th>Identifiant</th>
                        <th>Nom</th>
                        <th>Prénom(s)</th>
                        <th>Nom d'utilisateur</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $res = $db->getAllAdmins();
                    if (mysqli_num_rows($res) > 0) {
                        while ($row = mysqli_fetch_array($res)) {
                            $id = $row["idAdministrateur"];
                            $nom = stripslashes($row["nom"]);
                            $prenom = stripslashes($row["prenom"]);
                            $username = $row["pseudo"];
                            ?>
                            <tr>
                                <td><span class="text-primary"><?php echo $id ?></span></td>
                                <td><?php echo $nom ?></td>
                                <td><?php echo $prenom ?></td>
                                <td><?php echo $username ?></td>
                                <td class="td-actions">
                                    <a href="#"><i class="la la-edit edit"></i></a>
                                    <a href="business/delete_admin.php?idAdmin=<?php echo $row["idAdministrateur"]; ?>"><i class="la la-close delete"></i></a>
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