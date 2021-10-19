<header class="header">
    <nav class="navbar fixed-top">
        <!-- Begin Topbar -->
        <div class="navbar-holder">
            <div class="row align-items-center">
                <div class="col-xl-4 col-2">
                    <!-- Toggle Button -->
                    <a id="toggle-btn" href="#" class="menu-btn active ml-2">
                        <span></span>
                        <span></span>
                        <span></span>
                    </a>
                    <!-- End Toggle -->
                </div>
                <div class="col-xl-4 col-3 d-flex justify-content-center">
                    <div class="navbar-header">
                        <a href="db-default.html" class="navbar-brand">
                            <div class="brand-image brand-big">
                                <h2><b>Espace client</b></h2>
                            </div>
                            <div class="brand-image brand-small">
                                <!--<img src="assets/img/logo.png" alt="logo" class="logo-small">-->
                                <h2><b>Espace client</b></h2>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-xl-4 col-7">
                    <!-- Begin Navbar Menu -->
                    <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center pull-right">
                        <!-- Search -->
                        <li class="nav-item d-flex align-items-center"><?php echo $_SESSION['NOM'].' '.$_SESSION['PRENOM']; ?></li>
                        <!-- End Search -->
                        <!-- Begin Quick Actions -->
                        <li class="nav-item"><a href="business/deconnexion.php"><i class="la la-sign-out"></i></a></li>
                        <!-- End Quick Actions -->
                    </ul>
                    <!-- End Navbar Menu -->
                </div>
            </div>
        </div>
        <!-- End Topbar -->
    </nav>
</header>
<!-- End Header -->