<div class="section section-grey">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- section-title -->
				<div class="col-md-12">
					<div class="section-title">
						<h2 class="title">Nos marques</h2>
					</div>
				</div>
				<!-- /section-title -->
				<!-- banner -->
				<div class="col-md-8">
					<div class="banner banner-1">
						<img src="workspace/upload/all.png" alt="">
						<div class="banner-caption text-center">
							<a class="primary-btn" href="?link=products">Voir les pièces</a>
						</div>
					</div>
				</div>
				<!-- /banner -->

				<?php
                    $res = $db->getLatestMarques();
                    if (mysqli_num_rows($res) > 0) {
                        while ($row = mysqli_fetch_array($res)) {
                            $id = $row["idmarque"];
                            $nom = stripslashes($row["libelle"]);
							$filename = $row["photo"];
                            ?>
						<!-- banner -->
						<div class="col-md-4">
							<a class="banner banner-1" href="#">
                                <img src="workspace/upload/<?php echo $filename; ?>" alt="">
								<div class="banner-caption text-center">
									<h6 class="primary-btn">Voir</h6>
								</div>
							</a>
						</div>
						<!-- /banner -->
				<?php }
                    } ?>

			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>