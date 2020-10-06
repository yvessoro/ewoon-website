<?php 
	if(isset($_GET["id"])){
		$row = $db->getProductById($_GET["id"]);
	}else if(isset($_POST["reference"])){
        $row = $db->getProductByRef($_POST["reference"]);
    }else{
        redirect("?link=home");
    }

    if ($row != NULL) {
        $id = $row["idproduit"];
        $filename = $row["photo"];
        $designation = stripslashes($row["designation"]);
        $description = stripslashes($row["description"]);
        $reference = stripslashes($row["reference"]);
        $prix = stripslashes($row["prix"]);
        $poids = stripslashes($row["poids"]);
        $statut = stripslashes($row["statut"]);
        $idType = stripslashes($row["idType"]);
        $type = stripslashes($row["type"]);
        $modele = stripslashes($row["modele"]);
        $carburant = stripslashes($row["carburant"]);
        $etat = stripslashes($row["etat"]);
        $marque = stripslashes($row["marque"]);
        $fabricant = stripslashes($row["fabricant"]);
        $version = stripslashes($row["version"]);
        $annonceur = stripslashes($row["nom"]." ".$row["prenom"]);
        $res1 = $db->getAnnonceurByProduct($row["idannonceur"]);
        if (mysqli_num_rows($res1) > 0) {
            while ($rowA = mysqli_fetch_array($res1)) {
                $annonceur = stripslashes($rowA["nom"]." ".$rowA["prenom"]);
            }
        }else{
            $annonceur = "EWOON";
        }    
    }

    if($id==null){
        redirect("?link=home");
    }
?>

<!-- BREADCRUMB -->
<div id="breadcrumb">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="?link=products">Pièces</a></li>
            <li class="active"><a href="?link=products&cat=<?php echo $idType; ?>"><?php echo $type ?></a></li>
        </ul>
    </div>
</div>
<!-- /BREADCRUMB -->

<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!--  Product Details -->
            <div class="product product-details clearfix">
                <div class="col-md-6">
                    <div id="product-main-view">
                        <div class="product-view">
                            <img src="workspace/upload/<?php echo $filename; ?>" alt="">
                        </div>
                        <div class="product-view">
                            <img src="./img/main-product01.jpg" alt="">
                        </div>
                        <div class="product-view">
                            <img src="./img/main-product01.jpg" alt="">
                        </div>
                        <div class="product-view">
                            <img src="./img/main-product01.jpg" alt="">
                        </div>
                    </div>
                    <div id="product-view">
                        <div class="product-view">
                            <img src="./img/thumb-product01.jpg" alt="">
                        </div>
                        <div class="product-view">
                            <img src="./img/thumb-product01.jpg" alt="">
                        </div>
                        <div class="product-view">
                            <img src="./img/thumb-product01.jpg" alt="">
                        </div>
                        <div class="product-view">
                            <img src="./img/thumb-product01.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="product-body">
                        <h2 class="product-name"><?php echo $designation; ?></h2>
                        <h3 class="product-price"><?php echo $prix; ?> FCFA</h3>
                        <div>
                            <div class="product-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o empty"></i>
                            </div>
                            <a href="#">3 Avis / Donner un avis</a>
                        </div>
                        <p><strong>Disponibilité:</strong> En stock</p>
                        <p><strong>Référence:</strong> <?php echo $reference; ?><strong> Etat:</strong> <?php echo $etat; ?></p>
                        <p><?php echo $description; ?></p>
                        <div class="product-btns">
                            <div class="qty-input">
                                <span class="text-uppercase">QTE: </span>
                                <input class="input" type="number">
                            </div>
                            <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Ajouter au panier</button>
                            <div class="pull-right">
                                <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
                                <button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
                                <button class="main-btn icon-btn"><i class="fa fa-share-alt"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="product-tab">
                        <ul class="tab-nav">
                            <li class="active"><a data-toggle="tab" href="#tab1">Description</a></li>
                            <li><a data-toggle="tab" href="#tab1">Details</a></li>
                            <li><a data-toggle="tab" href="#tab2">Avis (3)</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="tab1" class="tab-pane fade in active">
                                <p><?php echo $description; ?></p>
                            </div>
                            <div id="tab2" class="tab-pane fade in">

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="product-reviews">
                                            <div class="single-review">
                                                <div class="review-heading">
                                                    <div><a href="#"><i class="fa fa-user-o"></i> John</a></div>
                                                    <div><a href="#"><i class="fa fa-clock-o"></i> 27 DEC 2017 / 8:0 PM</a></div>
                                                    <div class="review-rating pull-right">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o empty"></i>
                                                    </div>
                                                </div>
                                                <div class="review-body">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute
                                                        irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                                </div>
                                            </div>

                                            <div class="single-review">
                                                <div class="review-heading">
                                                    <div><a href="#"><i class="fa fa-user-o"></i> John</a></div>
                                                    <div><a href="#"><i class="fa fa-clock-o"></i> 27 DEC 2017 / 8:0 PM</a></div>
                                                    <div class="review-rating pull-right">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o empty"></i>
                                                    </div>
                                                </div>
                                                <div class="review-body">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute
                                                        irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                                </div>
                                            </div>

                                            <div class="single-review">
                                                <div class="review-heading">
                                                    <div><a href="#"><i class="fa fa-user-o"></i> John</a></div>
                                                    <div><a href="#"><i class="fa fa-clock-o"></i> 27 DEC 2017 / 8:0 PM</a></div>
                                                    <div class="review-rating pull-right">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o empty"></i>
                                                    </div>
                                                </div>
                                                <div class="review-body">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute
                                                        irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <h4 class="text-uppercase">Donnez votre avis</h4>
                                        <p>Votre adresse mail ne sera pas publiée</p>
                                        <form class="review-form">
                                            <div class="form-group">
                                                <input class="input" type="text" placeholder="Votre nom" />
                                            </div>
                                            <div class="form-group">
                                                <input class="input" type="email" placeholder="Email" />
                                            </div>
                                            <div class="form-group">
                                                <textarea class="input" placeholder="Votre avis"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-rating">
                                                    <strong class="text-uppercase">Votre note: </strong>
                                                    <div class="stars">
                                                        <input type="radio" id="star5" name="rating" value="5" /><label for="star5"></label>
                                                        <input type="radio" id="star4" name="rating" value="4" /><label for="star4"></label>
                                                        <input type="radio" id="star3" name="rating" value="3" /><label for="star3"></label>
                                                        <input type="radio" id="star2" name="rating" value="2" /><label for="star2"></label>
                                                        <input type="radio" id="star1" name="rating" value="1" /><label for="star1"></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <button class="primary-btn">Envoyer</button>
                                        </form>
                                    </div>
                                </div>



                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /Product Details -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>