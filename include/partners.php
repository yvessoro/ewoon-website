<div class="section" id="partners">
<?php include("tecdoc_getBrands.php");?>
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- section-title -->
            <div class="col-md-12">
                <div class="section-title">
                    <h2 class="title">Nos partenaires </h2>
                </div>
            </div>
            <!-- /section-title -->

            <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-10 col-centered">

                    <div id="carousel" class="carousel slide" data-ride="carousel" data-type="multi" data-interval="5000">
                        <div class="carousel-inner">
                        <?php 
                        $i=0;
                        foreach ($brands->array as $brand) { ?>
                            <div class="item <?php if($i==0){ ?> active <?php } $i=$i+1; ?>">
                                <div class="carousel-col">
                                    <div class="block img-responsive">
                                        <img src="<?php echo $brand->dataSupplierLogo->imageURL400; ?>" alt="" style="width: 150px; height: 70px;">
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                            <!--<div class="item active">
                                <div class="carousel-col">
                                    <div class="block grey img-responsive">
                                        <img src="img/partner_bosch.png" alt="" style="width: 150px; height: 70px;">
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="carousel-col">
                                    <div class="block grey img-responsive">
                                        <img src="img/partner_febi.png" alt="" style="width: 150px; height: 70px;">
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="carousel-col">
                                    <div class="block grey img-responsive">
                                        <img src="img/partner_filter.png" alt="" style="width: 150px; height: 70px;">
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="carousel-col">
                                    <div class="block grey img-responsive">
                                        <img src="img/partner_japanparts.png" alt="" style="width: 150px; height: 70px;">
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="carousel-col">
                                    <div class="block grey img-responsive">
                                        <img src="img/partner_valeo.png" alt="" style="width: 150px; height: 70px;">
                                    </div>
                                </div>
                            </div>
                        </div>-->

                        <!-- Controls --
                        <div class="left carousel-control">
                            <a href="#carousel" role="button" data-slide="prev">
                                <span class="prev" aria-hidden="true">&#10094;</span>
                                <span class="sr-only">Previous</span>
                            </a>
                        </div>
                        <div class="right carousel-control">
                            <a href="#carousel" role="button" data-slide="next">
                                <span class="next" aria-hidden="true">&#10095;</span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>-->
                    </div>

                </div>
            </div>
</div>

        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>