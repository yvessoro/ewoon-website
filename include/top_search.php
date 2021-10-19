<div class="section" id="most_search">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- section-title -->
            <div class="col-md-12">
                <div class="section-title">
                    <h2 class="title">Les plus recherchés </h2>
                </div>
            </div>
            <div class="col-md-12">
                <div class="tabset col-md-12">
                    <!-- Tab 1 -->
                    <input type="radio" name="tabset" id="tab1" aria-controls="marzen" checked>
                    <label for="tab1">Top Pièces détachées</label>
                    <!-- Tab 2 -->
                    <input type="radio" name="tabset" id="tab2" aria-controls="rauchbier">
                    <label for="tab2">Top constructeurs</label>
                    <!-- Tab 3 -->
                    <input type="radio" name="tabset" id="tab3" aria-controls="dunkles">
                    <label for="tab3">Top meilleures ventes</label>

                    <div class="tab-panels">
                        <section id="marzen" class="tab-panel">
                            <?php for ($i=0; $i<4; $i++){ ?>
                            <!-- Product Single -->
                            <div class="col-md-3 col-sm-6 col-xs-6">
                                <div class="product product-single">
                                    <div class="product-thumb">
                                        <div class="product-label">
                                            <span>neuf</span>
                                        </div>
                                        <button class="main-btn quick-view"><a
                                                href="?link=product&id=<?php echo $id; ?>"><i
                                                    class="fa fa-search-plus"></i>Afficher</a></button>
                                        <img src="img/product01.jpg" alt="">
                                    </div>
                                    <div class="product-body">
                                        <h2 class="product-name"><a href="#">Cardan</a>
                                        </h2>
                                        <h3 class="product-price">10000 FCFA</h3>
                                        <div class="product-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o empty"></i>
                                        </div>
                                        <h2 class="product-name"><a href="#">Honda | Civic</a></h2>
                                        <div class="product-btns">
                                            <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i>
                                                Ajouter au panier</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php 
                                }
                            ?>
                            <!-- /Product Single -->
                        </section>
                        <section id="rauchbier" class="tab-panel">
                            <?php for ($i=0; $i<4; $i++){ ?>
                            <!-- Product Single -->
                            <div class="col-md-3 col-sm-6 col-xs-6">
                                <div class="product product-single">
                                    <div class="product-thumb">
                                        <div class="product-label">
                                            <span>Constructeur</span>
                                        </div>
                                        <img src="img/product01.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <?php 
                                }
                            ?>
                            <!-- /Product Single -->
                        </section>
                        <section id="dunkles" class="tab-panel">
                            <?php for ($i=0; $i<4; $i++){ ?>
                            <!-- Product Single -->
                            <div class="col-md-3 col-sm-6 col-xs-6">
                                <div class="product product-single">
                                    <div class="product-thumb">
                                        <div class="product-label">
                                            <span>Occasion</span>
                                        </div>
                                        <button class="main-btn quick-view"><a
                                                href="?link=product&id=<?php echo $id; ?>"><i
                                                    class="fa fa-search-plus"></i>Afficher</a></button>
                                        <img src="img/product01.jpg" alt="">
                                    </div>
                                    <div class="product-body">
                                        <h2 class="product-name"><a href="#">Radiateur</a>
                                        </h2>
                                        <h3 class="product-price">35000 FCFA</h3>
                                        <div class="product-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o empty"></i>
                                        </div>
                                        <h2 class="product-name"><a href="#">Ford | Focus</a></h2>
                                        <div class="product-btns">
                                            <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i>
                                                Ajouter au panier</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php 
                                }
                            ?>
                            <!-- /Product Single -->
                        </section>
                    </div>

                </div>
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>