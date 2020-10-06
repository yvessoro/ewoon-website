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
    <body class="bg-white">
        <!-- Begin Preloader -->
        <div id="preloader">
            <div class="canvas">
                <img src="assets/img/logo.png" alt="logo" class="loader-logo">
                <div class="spinner"></div>   
            </div>
        </div>
        <!-- End Preloader -->
        <!-- Begin Container -->
        <div class="container-fluid no-padding h-100">
            <div class="row flex-row h-100 bg-white">
                <!-- Begin Left Content -->
                <div class="col-xl-8 col-lg-5 col-md-5 col-sm-12 col-12 no-padding">
                    <div class="elisyam-bg background-01">
                        <div class="elisyam-overlay"></div>
                        <div class="authentication-col-content-2 mx-auto text-center">
                            <h1>EWOON</h1>
                            <span class="description">
                                Votre plateforme de vente de pièces auto en ligne
                            </span>
                            <ul class="login-nav nav nav-tabs mt-5 justify-content-center" role="tablist" id="animate-tab">
                                <li><a class="active" data-toggle="tab" href="#" role="tab" id="singin-tab" data-easein="zoomInUp">A propos</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Left Content -->
                <!-- Begin Right Content -->
                <div class="col-xl-4 col-lg-7 col-md-7 col-sm-12 col-12 my-auto no-padding">
                    <!-- Begin Form -->
                    <div class="authentication-form-2 mx-auto">
                        <div class="tab-content" id="animate-tab-content">
                            <!-- Begin Sign In -->
                            <div role="tabpanel" class="tab-pane show active" id="singin" aria-labelledby="singin-tab">
                                <div class="logo-centered">
                                    <a href="../index.php">
                                        <img src="assets/img/logo.png" alt="logo">
                                    </a>
                                </div>
                                <h3>Connectez-vous</h3>
                                <?php if ($_GET["error"]=="true") { ?>
                                    <p style="color:#FF0000;">Veuillez vérifier vos paramètres de connexion svp</p><br>
                                <?php } ?>
                                <form action="business/connexion_user.php" method="post">
                                    <div class="group material-input">
        							    <input type="text" id="username" name="username" required>
        							    <span class="highlight"></span>
        							    <span class="bar"></span>
        							    <label>Email</label>
                                    </div>
                                    <div class="group material-input">
        							    <input type="password" id="password" name="password" required>
        							    <span class="highlight"></span>
        							    <span class="bar"></span>
        							    <label>Mot de passe</label>
                                    </div>
                                    <div class="sign-btn text-center">
                                        <button type="submit" class="btn btn-warning">
                                            se connecter
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <!-- End Sign In -->
                        </div>
                    </div>
                    <!-- End Form -->                        
                </div>
                <!-- End Right Content -->
            </div>
            <!-- End Row -->
        </div>
        <!-- End Container -->    
        <?php
            include 'include/js_links.php';
        ?>
    </body>
</html>