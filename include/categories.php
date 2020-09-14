<div class="section section-grey">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- section-title -->
            <div class="col-md-12">
                <div class="section-title">
                    <h2 class="title">Notre catalogue de pièces </h2>
                </div>
            </div>
            <!-- /section-title -->

            <?php
                $res = $db->getAllCategories();
                if (mysqli_num_rows($res) > 0) {
                    while ($row = mysqli_fetch_array($res)) {
                        $id = $row["idcategorie"];
                        $nom = stripslashes($row["libelle"]);
                        $filename = $row["photo"];
                        ?>
                        <!-- banner -->
                        <div class="col-md-4 col-sm-6">
                            <a class="banner banner-1" href="#">
                                <img src="workspace/upload/<?php echo $filename; ?>" alt="">
                                <div class="banner-caption text-center">
							        <h4 class="primary-btn"><?php echo $nom; ?></h2>
                                </div>
                            </a>
                        </div>
                        <!-- /banner -->
                <?php }
            } ?>

        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>