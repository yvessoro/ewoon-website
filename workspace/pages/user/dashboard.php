<?php 
$res = $db->getCountUserCars($_SESSION['ID']);
if (mysqli_num_rows($res) > 0) {
    while ($row = mysqli_fetch_array($res)) {
      $_SESSION['cars']=$row["stats"];
    }
}

$res = $db->getCountUserOrders($_SESSION['ID']);
if (mysqli_num_rows($res) > 0) {
    while ($row = mysqli_fetch_array($res)) {
      $_SESSION['orders']=$row["stats"];
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
                include 'include/header_user.php';
            ?>
            <!-- Begin Page Content -->
            <div class="page-content d-flex align-items-stretch">
                <?php
                    include 'include/user_navigation.php';
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
                                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-new-car">Enregistrer un véhicule</button>
	                                </div>
	                                </div>
	                            </div>
                            </div>
                        </div>
                        <!-- End Page Header -->
                        <?php
                            include 'include/user_stats.php';
                            include 'include/modal_add_car.php';
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