<?php 
$res = $db->getCountAnnonceurs();
if (mysqli_num_rows($res) > 0) {
    while ($row = mysqli_fetch_array($res)) {
      $_SESSION['annonceurs']=$row["stats"];
    }
}

$res = $db->getCountProducts();
if (mysqli_num_rows($res) > 0) {
    while ($row = mysqli_fetch_array($res)) {
      $_SESSION['products']=$row["stats"];
    }
}

$res = $db->getCountAdmins();
if (mysqli_num_rows($res) > 0) {
    while ($row = mysqli_fetch_array($res)) {
      $_SESSION['admins']=$row["stats"];
    }
}

$res = $db->getCountMarques();
if (mysqli_num_rows($res) > 0) {
    while ($row = mysqli_fetch_array($res)) {
      $_SESSION['marques']=$row["stats"];
    }
}

$res = $db->getCountFabricants();
if (mysqli_num_rows($res) > 0) {
    while ($row = mysqli_fetch_array($res)) {
      $_SESSION['fabricants']=$row["stats"];
    }
}
?>
<!DOCTYPE html>
<!--
Item Name: Elisyam - Web App & Admin Dashboard Template
Version: 1.5
Author: SAEROX

** A license must be purchased in order to legally use this template for your project **
-->
<html lang="fr">
    <head>
        <?php
            include 'include/meta_links.php';
        ?>
    </head>
    <body id="page-top">
        <!-- Begin Preloader -->
        <div id="preloader">
            <div class="canvas">
                <img src="assets/img/logo.png" alt="logo" class="loader-logo">
                <div class="spinner"></div>   
            </div>
        </div>
        <!-- End Preloader -->
        <div class="page bg-2 rounded-widget">
            <!-- Begin Header -->
            <?php
                include 'include/header.php';
            ?>
            <!-- Begin Page Content -->
            <div class="page-content d-flex align-items-stretch">
                <?php
                    include 'include/admin_navigation.php';
                ?>
                <!-- End Left Sidebar -->
                <div class="content-inner compact">
                    <div class="container-fluid">
                        <!-- Begin Page Header-->
                        <div class="row">
                            <div class="page-header">
	                            <div class="d-flex align-items-center">
	                                <h2 class="page-header-title">Tableau de bord</h2>
	                                <div>
	                                <div class="page-header-tools">
                                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-annonceur">Ajouter un annonceur</button>
                                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-product">Ajouter une pièce</button>
	                                </div>
	                                </div>
	                            </div>
                            </div>
                        </div>
                        <!-- End Page Header -->
                        <?php
                            include 'include/admin_stats.php';
                            include 'include/modal_add_annonceur.php';
                            include 'include/modal_add_administrateur.php';
                            include 'include/modal_add_product.php';
                        ?>
                    </div>
                    <!-- End Container -->
                    <a href="#" class="go-top"><i class="la la-arrow-up"></i></a>
                </div>
                <!-- End Content -->
            </div>
            <!-- End Page Content -->
        </div>
        <?php
            include 'include/js_links.php';
        ?>
    </body>
</html>