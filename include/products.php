<div id="store">
    <!-- row -->
    <div class="row">
        <?php 
	if(isset($_GET["cat"])){
		$category = $_GET["cat"];
        include("tecdoc_getProductsByCategory.php");
	}else if(isset($_POST["marque"]) and isset($_POST["modele"]) and isset($_POST["motorisation"])){ 
		$res = $db->getAllProductsValidatedByCarInfos($_POST["marque"], $_POST["modele"], $_POST["motorisation"]);
	}else if(isset($_GET["idmarque"])){ 
		$res = $db->getAllProductsValidatedByMarque($_GET["idmarque"]);
	}else{
		$res = $db->getAllProductsValidated();
	}

	if (count($articles) > 0) { 
		foreach ($articles as $article) {
            $reference=$article->articleNumber;
            include("tecdoc_getProduct.php");
            foreach ($data->array as $product) {
                $productName=$product->articleName;
                $brandName=$product->brandName;
            }
            foreach ($article->images as $image) {
              $productImage=$image->imageURL800;
              $productThumb=$image->imageURL200;
            }

		?>
        <!-- Product Single -->
        <div class="col-md-4 col-sm-6 col-xs-6">
            <div class="product product-single">
                <div class="product-thumb">
                    <div class="product-label">
                        <span><?php echo "Disponible"; ?></span>
                    </div>
                    <button class="main-btn quick-view"><a href="?link=product&reference=<?php echo $reference; ?>"><i
                                class="fa fa-search-plus"></i>Afficher</a></button>
                    <img src="<?php if(empty($productImage)){ ?>img/main-product00.png<?php }else{echo $productImage;} ?>" alt="" width="200" height="200">
                </div>
                <div class="product-body">
                    <h2 class="product-name"><a
                            href="?link=product&reference=<?php echo $reference; ?>"><?php echo $productName; ?></a></h2>
                    <h3 class="product-price"><?php echo "0"; ?> FCFA</h3>
                    <div class="product-rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o empty"></i>
                    </div>
                    <h2 class="product-brand"><?php echo $brandName; ?> | <?php echo $reference; ?></h2>
                    <div class="product-btns">
                        <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Ajouter au
                            panier</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Product Single -->
        <?php }
		} else{ ?>
        <h3 class="product-price text-uppercase text-center primary-color">Aucun produit disponible</h3>
        <?php } ?>
    </div>
    <!-- /row -->
</div>