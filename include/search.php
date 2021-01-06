<!-- section partners -->
<?php include 'include/slideshow_top.php'; ?>
<!-- /section partners -->
<div id="home" style="text-align: center; padding-bottom:25px;">
		<!-- container -->
		<div class="container" style="margin-left:160px;">
			<!-- home wrap -->
			<div class="home-wrap"><br>
				<div class="row">

				<!-- banner -->
				<div class="col-md-4 col-md-offset-0 col-sm-6 col-sm-offset-3 card">
					<form>
                        <h4 class="footer-header">IMMATRICULATION / VIN</h4>
                        <div class="form-group">
                            <input class="input" placeholder="Immatriculation / numéro chassis">
                        </div>
                        <button class="primary-btn search-btn"><i class="fa fa-search"></i>		Rechercher</button>
                    </form>
				</div>
				<!-- /banner -->

				<!-- banner -->
				<div class="col-md-4 col-md-offset-0 col-sm-6 col-sm-offset-3 card_middle">
					<form>
						<h4 class="footer-header">RECHERCHE PAR VÉHICULE</h4>
						<div class="row containerSelect" style="margin-top:-10px;">
							<div class="col-4" >
								<div class="select-wrapper" style="margin-left:5px;">
									<select class="select">
										<option value="0">Marques</option>
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
							</div>
							<div class="col-4">
								<div>
									<select>
										<option value="0">Modèle</option>
									</select>
								</div>
							</div>
							<div class="col-4">
								<div>
									<select>
										<option value="0">Motorisation</option>
									</select>
								</div>
							</div>
						</div>
                        <div class="form-group mt-3" style="margin-top:6px;">
        					<a href="workspace/?link=user_login" class="primary-btn search-btn">IDENTIFIEZ VOTRE VÉHICULE</a>
                        </div>
                    </form>
				</div>
				<!-- /banner -->
				<!-- banner -->
				<div class="col-md-4 col-md-offset-0 col-sm-6 col-sm-offset-3 card">
					<form action="?link=product" method="post">
                        <h4 class="footer-header">RÉFÉRENCE DE PIECE</h4>
                        <div class="form-group">
                            <input class="input" placeholder="Référence de la pièce" name="reference" id="reference">
                        </div>
                        <button class="primary-btn search-btn"><i class="fa fa-search"></i>		Rechercher</button>
                    </form>
				</div>
				<!-- /banner -->

			</div>
			</div>
			<!-- /home wrap -->
		</div>
		<!-- /container -->
	</div>