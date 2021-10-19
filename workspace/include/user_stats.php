<div class="row flex-row">
    <div class="col-xl-6">
        <!-- Begin Widget 36 -->
        <div class="widget-36 widget has-shadow">
            <!-- Begin Widget Body -->
            <div class="widget-body">
                <div class="row">
                    <div class="col-xl-12 text-center mt-5 mb-5">
                        <div class="nb-visitors">
                            Mes véhicules
                        </div>
                        <div class="visitors-nb text-success">
                        <?php echo $_SESSION['cars']; ?>
                        </div>
                        <a href="?link=user_cars" class="btn btn-shadow">Voir la liste</a>
                    </div>
                </div>
            </div>
            <!-- End Widget Body -->
        </div>
        <!-- End Widget 36 -->
    </div>
    <div class="col-xl-6">
        <!-- Begin Widget 36 -->
        <div class="widget-36 widget has-shadow">
            <!-- Begin Widget Body -->
            <div class="widget-body">
                <div class="row">
                    <div class="col-xl-12 text-center mt-5 mb-5">
                    <div class="nb-visitors">
                            Mes commandes
                        </div>
                        <div class="visitors-nb text-success">
                            <?php echo $_SESSION['orders']; ?>
                        </div>
                        <a href="?link=user_orders" class="btn btn-shadow">Voir la liste</a>
                    </div>
                </div>
            </div>
            <!-- End Widget Body -->
        </div>
        <!-- End Widget 36 -->
    </div>
</div>
<!-- End Row -->