<div class="row flex-row">
    <div class="col-xl-4">
        <!-- Begin Widget 36 -->
        <div class="widget-36 widget has-shadow">
            <!-- Begin Widget Body -->
            <div class="widget-body">
                <div class="row">
                    <div class="col-xl-12 text-center mt-5 mb-5">
                        <div class="nb-visitors">
                            Pièces
                        </div>
                        <div class="visitors-nb text-success">
                        <?php echo $_SESSION['products']; ?>
                        </div>
                        <a href="?link=admin_products" class="btn btn-shadow">Voir la liste</a>
                    </div>
                </div>
            </div>
            <!-- End Widget Body -->
        </div>
        <!-- End Widget 36 -->
    </div>
    <div class="col-xl-4">
        <!-- Begin Widget 36 -->
        <div class="widget-36 widget has-shadow">
            <!-- Begin Widget Body -->
            <div class="widget-body">
                <div class="row">
                    <div class="col-xl-12 text-center mt-5 mb-5">
                    <div class="nb-visitors">
                            Annonceurs
                        </div>
                        <div class="visitors-nb text-success">
                            <?php echo $_SESSION['annonceurs']; ?>
                        </div>
                        <a href="?link=admin_annonceurs" class="btn btn-shadow">Voir la liste</a>
                    </div>
                </div>
            </div>
            <!-- End Widget Body -->
        </div>
        <!-- End Widget 36 -->
    </div>
    <div class="col-xl-4">
        <!-- Begin Widget 36 -->
        <div class="widget-36 widget has-shadow">
            <!-- Begin Widget Body -->
            <div class="widget-body">
                <div class="row">
                    <div class="col-xl-12 text-center mt-5 mb-5">
                        <div class="nb-visitors">
                            Marques
                        </div>
                        <div class="visitors-nb text-success">
                            <?php echo $_SESSION['marques']; ?>
                        </div>
                        <a href="?link=admin_marques" class="btn btn-shadow">Voir la liste</a>
                    </div>
                </div>
            </div>
            <!-- End Widget Body -->
        </div>
        <!-- End Widget 36 -->
    </div>
</div>
<!-- End Row -->
<div class="row flex-row">
    <div class="col-xl-4">
        <!-- Begin Widget 36 -->
        <div class="widget-36 widget has-shadow">
            <!-- Begin Widget Body -->
            <div class="widget-body">
                <div class="row">
                    <div class="col-xl-12 text-center mt-5 mb-5">
                        <div class="nb-visitors">
                            Fabricants
                        </div>
                        <div class="visitors-nb text-success">
                            <?php echo $_SESSION['fabricants']; ?>
                        </div>
                        <a href="?link=admin_fabricants" class="btn btn-shadow">Voir la liste</a>
                    </div>
                </div>
            </div>
            <!-- End Widget Body -->
        </div>
        <!-- End Widget 36 -->
    </div>
    <div class="col-xl-4">
        <!-- Begin Widget 36 -->
        <div class="widget-36 widget has-shadow">
            <!-- Begin Widget Body -->
            <div class="widget-body">
                <div class="row">
                    <div class="col-xl-12 text-center mt-5 mb-5">
                        <div class="nb-visitors">
                            Commandes
                        </div>
                        <div class="visitors-nb text-success">
                            <?php echo "0"; ?>
                        </div>
                        <a href="#" class="btn btn-shadow">Voir la liste</a>
                    </div>
                </div>
            </div>
            <!-- End Widget Body -->
        </div>
        <!-- End Widget 36 -->
    </div>
    <div class="col-xl-4">
        <!-- Begin Widget 36 -->
        <div class="widget-36 widget has-shadow">
            <!-- Begin Widget Body -->
            <div class="widget-body">
                <div class="row">
                    <div class="col-xl-12 text-center mt-5 mb-5">
                        <div class="nb-visitors">
                            Administrateurs
                        </div>
                        <div class="visitors-nb text-success">
                            <?php echo $_SESSION['admins']; ?>
                        </div>
                        <a href="#" class="btn btn-shadow">Voir la liste</a>
                    </div>
                </div>
            </div>
            <!-- End Widget Body -->
        </div>
        <!-- End Widget 36 -->
    </div>
</div>