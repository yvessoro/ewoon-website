<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'include/metas.php'; ?>
</head>

<body>
    <!-- HEADER -->
    <header>
        <!-- top Header -->
        <?php include 'include/top-header.php'; ?>
        <!-- /top Header -->

        <!-- header -->
        <?php include 'include/header.php'; ?>
        <!-- container -->
    </header>
    <!-- /HEADER -->

    <!-- NAVIGATION -->
    <?php include 'include/navigation.php'; ?>
    <!-- /NAVIGATION -->

    <!-- BREADCRUMB -->
    <div id="breadcrumb">
        <div class="container">
            <ul class="breadcrumb">
                <i class="fa fa-car" style="color:#F8694A;"> Identifiez votre véhicule pour obtenir un choix de produits
                    compatibles.</i>
            </ul>
        </div>
    </div>
    <!-- /BREADCRUMB -->
    <?php include 'include/search_oils.php'; ?>

    <!-- section -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- ASIDE -->
                <div id="aside" class="col-md-3">
                    <div class="aside" style="padding:10px;">
                        <h4 class="footer-header">FILTRES</h4>
                        <form action="#" method="post">
                            <h5 class="footer-header">Viscosité</h5>
                            <div class="form-group">
                                <div>
                                    <input type="checkbox" id="1" class="vh">
                                    <label for="1">0W10</label>
                                </div>
                                <div>
                                    <input type="checkbox" id="7" class="vh">
                                    <label for="7">0W20</label>
                                </div>
                                <div>
                                    <input type="checkbox" id="8" class="vh">
                                    <label for="8">0W30</label>
                                </div>
                            </div>
                            <h5 class="footer-header">Type d'huile</h5>
                            <div class="form-group">
                                <div>
                                    <input type="checkbox" id="2" class="vh">
                                    <label for="2">Moteur</label>
                                </div>
                                <div>
                                    <input type="checkbox" id="3" class="vh">
                                    <label for="3">Frein</label>
                                </div>
                                <div>
                                    <input type="checkbox" id="4" class="vh">
                                    <label for="4">Transmission</label>
                                </div>
                            </div>
                            <h5 class="footer-header">Marque</h5>
                            <div class="form-group">
                                <div>
                                    <input type="checkbox" id="5" class="vh">
                                    <label for="5">Shell</label>
                                </div>
                                <div>
                                    <input type="checkbox" id="6" class="vh">
                                    <label for="6">Total</label>
                                </div>
                                <div>
                                    <input type="checkbox" id="7" class="vh">
                                    <label for="7">Elf</label>
                                </div>
                            </div>
                            <h5 class="footer-header">Quantité</h5>
                            <div class="form-group">
                                <div>
                                    <input type="checkbox" id="8" class="vh">
                                    <label for="8">1 Litre</label>
                                </div>
                                <div>
                                    <input type="checkbox" id="9" class="vh">
                                    <label for="9">2 Litres</label>
                                </div>
                                <div>
                                    <input type="checkbox" id="10" class="vh">
                                    <label for="10">5 Litres</label>
                                </div>
                            </div>
                            <button class="primary-btn search-btn" style="margin-top:10px;"><i class="fa fa-search"></i>
                                Filtrer</button>
                        </form>
                    </div>
                    <!-- aside widget -->
                </div>
                <!-- /ASIDE -->

                <!-- MAIN -->
                <div id="main" class="col-md-9">

                    <!-- STORE -->
                    <?php include 'include/oils.php'; ?>
                    <!-- /STORE -->
                </div>
                <!-- /MAIN -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /section -->

    <!-- FOOTER -->
    <?php include 'include/footer.php'; ?>
    <!-- /FOOTER -->

    <!-- jQuery Plugins -->
    <?php include 'include/js.php'; ?>

</body>

</html>