<div class="section section-grey">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- section-title -->
				<div class="col-md-12">
					<div class="section-title">
						<h2 class="title">Offres de la semaine</h2>
						<div class="pull-right">
							<div class="product-slick-dots-1 custom-dots"></div>
						</div>
					</div>
				</div>
				<!-- /section-title -->

				<!-- banner -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="banner banner-2">
						<img src="./img/new.png" alt="">
						<div class="banner-caption">
							<h2 class="white-color">Nouvel<br>Arrivage</h2>
							<button class="primary-btn">Découvrir</button>
						</div>
					</div>
				</div>
				<!-- /banner -->

				<!-- Product Slick -->
				<div class="col-md-9 col-sm-6 col-xs-6">
					<div class="row">
						<div id="product-slick-1" class="product-slick">
						<?php $res = $db->getOffers();
						if (mysqli_num_rows($res) > 0) {
							while ($row = mysqli_fetch_array($res)) {
								$id = $row["idproduit"];
								$filename = $row["photo"];
								$designation = stripslashes($row["designation"]);
								$description = stripslashes($row["description"]);
								$reference = stripslashes($row["reference"]);
								$prix = stripslashes($row["prix"]);
								$poids = stripslashes($row["poids"]);
								$statut = stripslashes($row["statut"]);
								$type = stripslashes($row["type"]);
								$modele = stripslashes($row["modele"]);
								$carburant = stripslashes($row["carburant"]);
								$etat = stripslashes($row["etat"]);
								$marque = stripslashes($row["marque"]);
								$fabricant = stripslashes($row["fabricant"]);
								$version = stripslashes($row["version"]);
								$annonceur = stripslashes($row["nom"]." ".$row["prenom"]);
                            ?>
							<!-- Product Single -->
							<div class="product product-single">
								<div class="product-thumb">
									<div class="product-label">
										<span><?php echo $etat; ?></span>
										<!--<span class="sale">-20%</span>-->
									</div>
									<!--<ul class="product-countdown">
										<li><span>00 H</span></li>
										<li><span>00 M</span></li>
										<li><span>00 S</span></li>
									</ul>-->
									<button class="main-btn quick-view"><i class="fa fa-search-plus"></i>Afficher</button>
									<img src="workspace/upload/<?php echo $filename; ?>" alt="">
								</div>
								<div class="product-body">
									<!--<h3 class="product-price"><?php echo $prix; ?> <del class="product-old-price">15000</del></h3>-->
									<h2 class="product-name"><a href="#"><?php echo $designation; ?></a></h2>
									<h3 class="product-price"><?php echo $prix; ?> FCFA</h3>
									<div class="product-rating">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-o empty"></i>
									</div>
									<h2 class="product-name"><a href="#"><?php echo $marque; ?> | <?php echo $modele; ?></a></h2>
									<div class="product-btns">
										<button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Ajouter au panier</button>
									</div>
								</div>
							</div>
							<!-- /Product Single -->
							<?php }
						} ?>
						</div>
					</div>
				</div>
				<!-- /Product Slick -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>