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
                <li><a href="#">Pièces</a></li>
                <?php 
					$categorie="Recherche";
				?>
                <li class="active"><?php echo $categorie; ?></li>
            </ul>
        </div>
    </div>
    <!-- /BREADCRUMB -->

    <!-- section -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- ASIDE -->
                <div id="aside" class="col-md-3">
                    <div class="aside" style="padding:10px;">
                        <form action="?link=product" method="post">
                            <h4 class="footer-header">RECHERCHE PAR REFERENCE</h4>
                            <div class="form-group">
                                <input class="input" placeholder="Référence de la pièce" name="reference"
                                    id="reference">
                            </div>
                            <div class="form-group">
                                <input class="input" placeholder="Immatriculation / numéro chassis">
                            </div>
                            <button class="primary-btn search-btn"><i class="fa fa-search"></i> Rechercher</button>
                        </form> </br></br>
                        <form>
                            <h4 class="footer-header">RECHERCHE PAR VEHICULE</h4>
                            <div class="selectnav">
                                <select name="marque" id="marque">
                                    <option selected disabled>Marque</option>
                                    <?php
                                        $res = $db->getAllMarques();
                                        if (mysqli_num_rows($res) > 0) {
                                            while ($row = mysqli_fetch_array($res)) {
                                                $id = $row["idmarque"];
                                                $nom = $row["libelle"];
                                                ?>
                                    <option value="<?php echo $id; ?>"><?php echo $nom; ?></option>
                                    <?php
                                            }
                                        } 
                                    ?>
                                </select>
                            </div>
                            <div class="selectnav" style="margin-top:10px;">
                                <select name="modele" id="modele">
                                    <option selected disabled>Modèle/Année</option>
                                    <?php
                                        $res = $db->getAllModeles();
                                        if (mysqli_num_rows($res) > 0) {
                                            while ($row = mysqli_fetch_array($res)) {
                                                $id = $row["idmodele"];
                                                $nom = $row["libelle"];
                                                $annee = $row["annee"];
                                                ?>
                                    <option value="<?php echo $id; ?>"><?php echo $nom." - ".$annee; ?></option>
                                    <?php
                                            }
                                        } 
                                    ?>
                                </select>
                            </div>
                            <div class="selectnav" style="margin-top:10px;">
                                <select name="motorisation" id="motorisation">
                                    <option selected disabled>Motorisation</option>
                                    <?php
                                        $res = $db->getAllCarburants();
                                        if (mysqli_num_rows($res) > 0) {
                                            while ($row = mysqli_fetch_array($res)) {
                                                $id = $row["idcarburant"];
                                                $nom = $row["libelle"];
                                                ?>
                                    <option value="<?php echo $id; ?>"><?php echo $nom; ?></option>
                                    <?php
                                            }
                                        } 
                                    ?>
                                </select>
                            </div>
                            <button class="primary-btn search-btn" style="margin-top:10px;"><i class="fa fa-search"></i>
                                Rechercher</button>
                        </form>
                        <h3 class="aside-title">Filtre par note</h3>
                        <div>
                            <div class="product-rating">
                                <i class="fa fa-star" style="color:#FF9529;"></i>
                                <i class="fa fa-star" style="color:#FF9529;"></i>
                                <i class="fa fa-star" style="color:#FF9529;"></i>
                                <i class="fa fa-star" style="color:#FF9529;"></i>
                                <i class="fa fa-star" style="color:#FF9529;"></i>
                            </div>
                        </div>
                        <div>
                            <div class="product-rating">
                                <i class="fa fa-star" style="color:#FF9529;"></i>
                                <i class="fa fa-star" style="color:#FF9529;"></i>
                                <i class="fa fa-star" style="color:#FF9529;"></i>
                                <i class="fa fa-star" style="color:#FF9529;"></i>
                                <i class="fa fa-star-o empty"></i>
                            </div>
                        </div>
                        <div>
                            <div class="product-rating">
                                <i class="fa fa-star" style="color:#FF9529;"></i>
                                <i class="fa fa-star" style="color:#FF9529;"></i>
                                <i class="fa fa-star" style="color:#FF9529;"></i>
                                <i class="fa fa-star-o empty"></i>
                                <i class="fa fa-star-o empty"></i>
                            </div>
                        </div>
                        <div>
                            <div class="product-rating">
                                <i class="fa fa-star" style="color:#FF9529;"></i>
                                <i class="fa fa-star" style="color:#FF9529;"></i>
                                <i class="fa fa-star-o empty"></i>
                                <i class="fa fa-star-o empty"></i>
                                <i class="fa fa-star-o empty"></i>
                            </div>
                        </div>
                        <div>
                            <div class="product-rating">
                                <i class="fa fa-star" style="color:#FF9529;"></i>
                                <i class="fa fa-star-o empty"></i>
                                <i class="fa fa-star-o empty"></i>
                                <i class="fa fa-star-o empty"></i>
                                <i class="fa fa-star-o empty"></i>
                            </div>
                        </div>
                        <h3 class="aside-title">Filtre par prix</h3>
                        <div>
                            <div id="slider-range" style="margin-left:10px;margin-right:10px;"></div>
                            <span>Montant (FCFA)</span>
                            <h4 class="example-val" id="slider-range-value">
                            </h4>
                        </div>
                    </div>
                    <!-- aside widget -->
                </div>
                <!-- /ASIDE -->

                <!-- MAIN -->
                <div id="main" class="col-md-9">

                    <!-- STORE -->
                    <?php include 'include/products_categories.php'; ?>
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