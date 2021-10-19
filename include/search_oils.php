<!-- section partners -->
<!-- /section partners -->
<div id="home" class="section-grey" style="text-align: center; padding-bottom:25px; padding-left:20px;">
    <!-- container -->
    <div class="container"><br>
        <!-- home wrap -->
        <div class="home-wrap">
            <div class="row">
                <!-- banner -->
                <div class="col-md-4 col-md-offset-0 col-sm-6 col-sm-offset-3 card">
                    <form action="?link=#" method="post">
                        <h4 class="footer-header">RECHERCHE PAR REFERENCE</h4>
                        <div class="row" style="margin-top:10px;text-align:center;">
                            <div class="col-md-7">
                                <div class=" form-group">
                                    <input class="input" placeholder="Immatriculation / VIN">
                                </div>
                                <div class="form-group">
                                    <input class="input" placeholder="Référence de la pièce" name="reference"
                                        id="reference">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <button class="primary-btn search-btn" style="margin-top:25px;"><i
                                        class="fa fa-search"></i> Ok</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- /banner -->

                <!-- banner -->
                <div class="col-md-8 col-md-offset-0 col-sm-6 col-sm-offset-3 card_middle">
                    <form action="?link=products" method="post">
                        <h4 class="footer-header">RECHERCHE PAR VÉHICULE</h4>
                        <div class="row" style="margin-top:10px;text-align:center;">
                            <div class="col-md-9 col-md-offset-0 col-sm-6 col-sm-offset-3">
                                <div class="select-wrapper">
                                    <div class="row" style="margin-top:10px;text-align:center;">
                                        <div class="select col-md-4 col-md-offset-0 col-sm-6 col-sm-offset-3"
                                            style="margin-left:10px;">
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
                                        <div class="select col-md-4 col-md-offset-0 col-sm-6 col-sm-offset-3"
                                            style="margin-left:10px;">
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
                                                <option value="<?php echo $id; ?>"><?php echo $nom." - ".$annee; ?>
                                                </option>
                                                <?php
														}
													} 
												?>
                                            </select>
                                        </div>
                                        <div class="select col-md-4 col-md-offset-0 col-sm-6 col-sm-offset-3"
                                            style="margin-left:10px;">
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
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-3 col-md-offset-0 col-sm-6 col-sm-offset-3"
                                style="margin-top:12px;">
                                <button class="primary-btn search-btn"><i class="fa fa-search"></i>
                                    Valider</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- /banner -->

            </div>
        </div>
        <!-- /home wrap -->
    </div>
    <!-- /container -->
</div>