<!-- Export -->
<div class="widget has-shadow">
    <div class="widget-body">
        <div class="table-responsive">
            <table id="export-table" class="table mb-0">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Score</th>
                        <th>Date de fin</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $res = $db->getAllAgronomeActivites($_SESSION['ID']);
                    if (mysqli_num_rows($res) > 0) {
                        while ($row = mysqli_fetch_array($res)) {
                            $id = $row["idactivite"];
                            $nom = stripslashes($row["nom"]);
                            $score = stripslashes($row["score"]);
                            $date_fin = stripslashes($row["date_fin"]);
                            ?>
                        <tr>
                            <td><span class="text-primary"><?php echo $nom ?></span></td>
                            <td><?php echo $score ?></td>
                            <td><?php echo $date_fin ?></td>
                            <td class="td-actions">
                                <a href="#"><i class="la la-edit edit"></i></a>
                                <a href="business/delete_activite.php?idActivite=<?php echo $row["idactivite"]; ?>"><i class="la la-close delete"></i></a>
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