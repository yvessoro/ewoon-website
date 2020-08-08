<div id="header">
    <div class="container">
        <div class="pull-left">
            <!-- Logo -->
            <div class="header-logo">
                <a class="logo" href="#">
                    <img src="./img/logo.png" alt="">
                </a>
            </div>
            <!-- /Logo -->

            <!-- Search --
            <div class="header-search">
                <form>
                    <input class="input search-input" type="text" placeholder="Enter your keyword">
                    <select class="input search-categories">
                        <option value="0">All Categories</option>
                        <option value="1">Category 01</option>
                        <option value="1">Category 02</option>
                    </select>
                    <button class="search-btn"><i class="fa fa-search"></i></button>
                </form>
            </div>
            /Search -->
        </div>
        <div class="pull-right">
            <ul class="header-btns">
                <!-- Account -->
                <li class="header-account dropdown default-dropdown">
                    <div class="dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="true">
                        <div class="header-btns-icon">
                            <i class="fa fa-user-o"></i>
                        </div>
                        <strong class="text-uppercase">Espace client <i class="fa fa-caret-down"></i></strong>
                    </div>
                    <a href="workspace/index.php" class="text-uppercase">Connexion</a>
                    <ul class="custom-menu">
                        <li><a href="#"><i class="fa fa-user-o"></i> Mon compte</a></li>
                        <li><a href="#"><i class="fa fa-check"></i> Mon panier</a></li>
                        <li><a href="workspace/index.php"><i class="fa fa-unlock-alt"></i> Connexion</a></li>
                        <li><a href="#"><i class="fa fa-user-plus"></i> Inscription</a></li>
                    </ul>
                </li>
                <!-- /Account -->

                <!-- Cart -->
                <li class="header-cart dropdown default-dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                        <div class="header-btns-icon">
                            <i class="fa fa-shopping-cart"></i>
                            <span class="qty">0</span>
                        </div>
                        <strong class="text-uppercase">Panier</strong> 
                        <br>
                        <span>100000</span>
                    </a>
                    <div class="custom-menu">
                        <div id="shopping-cart">
                            <div class="shopping-cart-list">
                                <div class="product product-widget">
                                    <div class="product-thumb">
                                        <img src="./img/thumb-product01.jpg" alt="">
                                    </div>
                                    <div class="product-body">
                                        <h3 class="product-price">50000<span class="qty"> x 1</span></h3>
                                        <h2 class="product-name"><a href="#">Alternateur</a></h2>
                                    </div>
                                    <button class="cancel-btn"><i class="fa fa-trash"></i></button>
                                </div>
                                <div class="product product-widget">
                                    <div class="product-thumb">
                                        <img src="./img/thumb-product01.jpg" alt="">
                                    </div>
                                    <div class="product-body">
                                        <h3 class="product-price">50000<span class="qty"> x 2</span></h3>
                                        <h2 class="product-name"><a href="#">Essui glace</a></h2>
                                    </div>
                                    <button class="cancel-btn"><i class="fa fa-trash"></i></button>
                                </div>
                                <div class="product product-widget">
                                    <div class="product-thumb">
                                        <img src="./img/thumb-product01.jpg" alt="">
                                    </div>
                                    <div class="product-body">
                                        <h3 class="product-price">50000<span class="qty"> x 4</span></h3>
                                        <h2 class="product-name"><a href="#">Amortisseur</a></h2>
                                    </div>
                                    <button class="cancel-btn"><i class="fa fa-trash"></i></button>
                                </div>
                            </div>
                            <div class="shopping-cart-btns">
                                <button class="main-btn">Panier</button>
                                <button class="primary-btn">Payer <i class="fa fa-arrow-circle-right"></i></button>
                            </div>
                        </div>
                    </div>
                </li>
                <!-- /Cart -->

                <!-- Mobile nav toggle-->
                <li class="nav-toggle">
                    <button class="nav-toggle-btn main-btn icon-btn"><i class="fa fa-bars"></i></button>
                </li>
                <!-- / Mobile nav toggle -->
            </ul>
        </div>
    </div>
    <!-- header -->
</div>