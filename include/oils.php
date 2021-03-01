<div id="store">
    <!-- row -->
    <div class="row">
        <?php 
	for ($i=0; $i<3; $i++){ 
        $etat="en stock";
        if($i==0){
            $designation="Shell Helix";
            $image="product-shell.png";
            $typehuile="10W40";
            $marque="Shell";
            $prix="8000";
        }else if($i==1){
            $designation="Elf evolution";
            $image="product-elf.png";
            $typehuile="20W40";
            $marque="Elf";
            $prix="5000";
        }else if($i==2){
            $designation="Total Aero 100";
            $image="product-total.png";
            $typehuile="30W40";
            $marque="Total";
            $prix="12000";
        }?>
        <!-- Product Single -->
        <div class="col-md-4 col-sm-6 col-xs-6">
            <div class="product product-single">
                <div class="product-thumb">
                    <div class="product-label">
                        <span><?php echo $etat; ?></span>
                    </div>
                    <button class="main-btn quick-view"><a href="?link=oil"><i
                                class="fa fa-search-plus"></i>Afficher</a></button>
                    <img src="img/<?php echo $image; ?>" alt="">
                </div>
                <div class="product-body">
                    <h2 class="product-name"><a href="?link=oil"><?php echo $designation; ?></a></h2>
                    <h3 class="product-price"><?php echo $prix; ?> FCFA</h3>
                    <div class="product-rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o empty"></i>
                    </div>
                    <h2 class="product-name"><a href="?link=oil"><?php echo $typehuile; ?> | <?php echo $marque; ?></a>
                    </h2>
                    <div class="product-btns">
                        <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Ajouter au
                            panier</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Product Single -->
        <?php } ?>
    </div>
    <!-- /row -->
</div>