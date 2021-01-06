<div class="section" id="partners">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- section-title -->
            <div class="col-md-12">
                <div class="section-title">
                    <h2 class="title">Nos Marques</h2>
                </div>
            </div>
            <!-- /section-title -->

            <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-10 col-centered">

                    <div id="carousel" class="carousel slide" data-ride="carousel" data-type="multi" data-interval="5000">
                        <div class="carousel-inner">
						<?php
							$res = $db->getLatestMarques();
							$pos=0;
                    		if (mysqli_num_rows($res) > 0) {
                        		while ($row = mysqli_fetch_array($res)) {
                            		$id = $row["idmarque"];
                            		$nom = stripslashes($row["libelle"]);
									$filename = $row["photo"];
                                    if($pos==0){?>
									<div class="item active">
										<?php } else { ?>
											<div class="item">
											<?php }
											 $pos=1; ?>
										<div class="carousel-col">
											<div class="block grey img-responsive">
												<img src="workspace/upload/<?php echo $filename; ?>" alt="" style="width: 150px; height: 70px;">
											</div>
										</div>
									</div>
							<?php }
                    		} ?>
                        </div>
                    </div>

                </div>
            </div>
</div>

        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>