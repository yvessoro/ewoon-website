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
                    include 'include/annonceur_navigation.php';
                ?>
                <!-- End Left Sidebar -->
                <div class="content-inner compact">
                    <div class="container-fluid">
                        <!-- Begin Page Header-->
                        <div class="row">
                            <div class="page-header">
	                            <div class="d-flex align-items-center">
	                                <h2 class="page-header-title">Gestion des pièces</h2>
                                    <div>
                                        <div class="page-header-tools">
                                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-product">Ajouter</button>
                                        </div>
                                    </div>
	                            </div>
                            </div>
                        </div>
                        <!-- End Page Header -->
                        <?php
                            include 'include/annonceur_products.php';
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