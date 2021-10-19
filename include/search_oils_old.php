<!-- section partners -->
<!-- /section partners -->
<div id="home" class="section-grey" style="text-align: center; padding-bottom:25px; padding-left:20px;">
    <!-- container -->
    <div class="container"><br>
        <!-- home wrap -->
        <div class="home-wrap">
            <div class="row">
                <!-- banner -->
                <div class="col-md-4 card">
                    <form>
                        <h4 class="footer-header">IMMATRICULATION</h4>
                        <div class="row" style="margin-top:10px;text-align:center;">
                            <p>Indiquez votre numéro de plaque d'immatriculation</p>
                            <div class="col-md-7">
                                <div class="form-group">
                                    <input class="input" placeholder="Immatriculation" name="immatriculation"
                                        id="immatriculation">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <button class="primary-btn search-btn"><i class="fa fa-search"></i> Ok</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- /banner -->

                <!-- banner -->
                <div class="col-md-4 card_middle">
                    <form>
                        <h4 class="footer-header">PAR CARTE CRISE</h4>
                        <div class="row" style="margin-top:10px;text-align:center;">
                            <div class="select col-md-6">
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
                            <div class="select col-md-6">
                                <select name=" modele" id="modele">
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
                        </div>
                        <div class="row" style="margin-top:10px;">
                            <div class="select col-md-6">
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
                            <div class="col-md-5" style="margin-left:10px;">
                                <button class="primary-btn search-btn"><i class="fa fa-search"></i> Ok</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- /banner -->

                <!-- banner -->
                <div class="col-md-4 card">
                    <form>
                        <h4 class="footer-header">PAR CARTE GRISE</h4>
                        <div class="row" style="margin-top:10px;text-align:center;">
                            <p>Entrez votre type mine</p>
                            <div class="col-md-7">
                                <div class="form-group">
                                    <input class="input" placeholder="votre type mine" name="type_mine"
                                        id="                                    <input class=" input"
                                        placeholder="votre type mine" name="type_mine" ">
                                </div>
                            </div>
                            <div class=" col-md-4">
                                    <button class="primary-btn search-btn"><i class="fa fa-search"></i> Ok</button>
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