<div id="store">
	<!-- row -->
	<div class="row">
	<?php 
	if(isset($_GET["cat"])){
		$res = $db->getAllProductsValidatedByCat($_GET["cat"]);
	}else{
		$res = $db->getAllProductsValidated();
	}

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
			$res1 = $db->getAnnonceurByProduct($row["idannonceur"]);
			if (mysqli_num_rows($res1) > 0) {
				while ($rowA = mysqli_fetch_array($res1)) {
					$annonceur = stripslashes($rowA["nom"]." ".$rowA["prenom"]);
				}
			}else{
				$annonceur = "EWOON";
			}
		?>
		<!-- Product Single -->
		<div class="col-md-4 col-sm-6 col-xs-6">
			<div class="product product-single">
				<div class="product-thumb">
					<div class="product-label">
						<span><?php echo $etat; ?></span>
					</div>
					<button class="main-btn quick-view"><a href="?link=product&id=<?php echo $id; ?>"><i class="fa fa-search-plus"></i>Afficher</a></button>
					<img src="workspace/upload/<?php echo $filename; ?>" alt="">
				</div>
				<div class="product-body">
					<h2 class="product-name"><a href="?link=product&id=<?php echo $id; ?>"><?php echo $designation; ?></a></h2>
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
		</div>
		<!-- /Product Single -->
			<?php }
		} ?>
	</div>
	<!-- /row -->
</div>