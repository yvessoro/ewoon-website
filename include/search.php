<!-- section partners -->
<br>
<?php include 'include/slideshow_top.php'; ?>
<!-- /section partners -->
<div id="home" style="text-align: center; padding-bottom:25px; padding-left:20px;">
    <?php include("tecdoc_getManufacturers.php");?>

    <?php if(isset($_GET["marque"])){
    $marque=$_GET["marque"];
    include("tecdoc_getModels.php");
}?>
    <!-- container -->
    <div class="container">
        <!-- home wrap -->
        <div class="home-wrap">
            <div class="row">
                <!-- banner -->
                <div class="col-md-4 col-md-offset-0 col-sm-6 col-sm-offset-3 card">
                    <!-- <form action="?link=product" method="post" id="formsearchvin"> -->
                    <form action="#" method="post" id="formsearchvin">
                        <h4 class="footer-header">RECHERCHE PAR REFERENCE</h4>
                        <div class="row" style="margin-top:10px;text-align:center;">
                            <div class="col-md-7">
                                <div class=" form-group">
                                    <input class="input" id="vin_input" 
                                        placeholder="Immatriculation / VIN">
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
                    <form action="?link=categories" method="post">
                        <h4 class="footer-header">RECHERCHE PAR VÉHICULE</h4>
                        <div class="row" style="margin-top:10px;text-align:center;">
                            <div class="col-md-9 col-md-offset-0 col-sm-6 col-sm-offset-3">
                                <div class="select-wrapper">
                                    <div class="row" style="margin-top:10px;text-align:center;">
                                        <div class="select col-md-4 col-md-offset-0 col-sm-6 col-sm-offset-3"
                                            style="margin-left:10px;">
                                            <select name="marque" id="marque"
                                                <?php if(!isset($_GET["marque"]) || strcmp($_SESSION["marque"],$_GET["marque"])!=0 ){ ?>onChange=""
                                                <?php } ?>>
                                                <option selected disabled>Marque</option>
                                                <?php 
                                                    foreach ($data->array as $manu) { ?>
                                                <option value="<?php echo $manu->manuId; ?>"
                                                    <?php if(isset($_GET["marque"]) && $_GET["marque"]==$manu->manuId){ ?>selected<?php } ?>>
                                                    <?php echo $manu->manuName; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="select col-md-4 col-md-offset-0 col-sm-6 col-sm-offset-3"
                                            style="margin-left:10px;">
                                            <select name="modele" id="modele"
                                                <?php if(!isset($_GET["modele"]) || strcmp($_SESSION["modele"],$_GET["modele"])!=0 ){ ?>onChange=""
                                                <?php } ?>>
                                                <option selected disabled>Modèle/Année</option>
                                            </select>
                                        </div>
                                        <div class="select col-md-4 col-md-offset-0 col-sm-6 col-sm-offset-3"
                                            style="margin-left:10px;">
                                            <select name="motorisation" id="motorisation">
                                                <option selected disabled>Motorisation</option>

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

<!-- Modal -->
<div class="modal" tabindex="-1" id="modalsearchbox">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">RECHERCHE PAR VIN</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-4">
                        <div id="bodyImage" style="text-align: center; "></div>
                    </div>
                    <div class="col-lg-8">
                        <div id="bodyList" style="padding:0px; margin:0px; overflow-y: scroll; height:400px;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>