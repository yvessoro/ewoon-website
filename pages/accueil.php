<!DOCTYPE html>
<html lang="en">
<?php $_SESSION["marque"]=-1; $_SESSION["modele"]=-1; ?>

<head>
    <?php include 'include/metas.php'; ?>
    <script language="javascript" type="text/javascript">
    function doReload(marque) {
        document.location = '?link=home&marque=' + marque;
        $_SESSION["marque"] = marque;
        /* But if you want to submit the form just comment above line and uncomment following lines*/
        //document.frm1.action = 'samepage.php';
        //document.frm1.method = 'post';
        //document.frm1.submit();
    }
    </script>

</head>

<body>
    <!-- HEADER -->
    <header>
        <!-- top Header -->
        <?php include 'include/top-header.php'; ?>
        <!-- /top Header -->

        <!-- header -->
        <?php include 'include/header.php'; ?>
        <!-- container -->

    </header>
    <!-- /HEADER -->

    <!-- NAVIGATION -->
    <?php include 'include/navigation-home.php'; ?>
    <!-- /NAVIGATION -->

    <!-- HOME SLIDERS -->
    <?php include 'include/search.php'; ?>
    <!-- /HOME SLIDERS -->

    <!-- section partners --><br>
    <?php //include 'include/slideshow.php'; ?>
    <!-- /section partners -->

    <!-- section partners -->
    <?php include 'include/car_map.php'; ?>
    <!-- /section partners -->

    <!-- section categories -->
    <?php include 'include/top_search.php'; ?>
    <!-- /section categories -->

    <!-- section -->
    <?php include 'include/services.php'; ?>
    <!-- /section -->

    <!-- section -->
    <?php include 'include/marques.php'; ?>
    <!-- /section -->

    <!-- section partners -->
    <?php include 'include/partners.php'; ?>
    <!-- /section partners -->

    <!-- HOME SLIDERS -->
    <?php 
		include 'include/infos.php'; 
		include 'include/modal_login.php';
	?>
    <!-- /HOME SLIDERS -->

    <!-- FOOTER -->
    <?php include 'include/footer.php'; ?>
    <!-- /FOOTER -->

    <!-- jQuery Plugins -->
    <?php include 'include/js.php'; ?>

    <script>
    $(document).ready(function() {
        //$('#modele').empty();
    });

    function populateSelectModele(url) {
        $.ajax({
            url: url,
            type: 'get',
            success: function(response) {
                var rep = response;
                let data = JSON.parse(rep)
                console.log(data);
                //console.log(data.length);
                let dataElemrnt = data.array;
                $('#modele').empty();
                $('#modele').append("<option selected disabled>Modèle/Année</option>")
                for (let i = 0; i < dataElemrnt.length; i++) {
                    //console.log(element)
                    $('#modele').append("<option value='" + dataElemrnt[i].modelId + "'>" + dataElemrnt[i]
                        .modelname + " (" + dataElemrnt[i].yearOfConstrFrom + ")</option>")
                }
            }
        });
        //document.location.replace(url);
        //console.log(url);
    }

    function populateSelectFuelType(url) {
        $.ajax({
            url: url,
            type: 'get',
            success: function(response) {
                var rep = response;
                let data = JSON.parse(rep)
                console.log(data);
                //console.log(data.length);
                let dataElemrnt = data.linkageTargets;
                $('#motorisation').empty();
                $('#motorisation').append("<option selected disabled>Motorisation</option>")
                for (let i = 0; i < dataElemrnt.length; i++) {
                    //console.log(element)
                    $('#motorisation').append("<option value='" + dataElemrnt[i].linkageTargetId + "'>" +
                        dataElemrnt[i].description + " (" + dataElemrnt[i].fuelType + ")</option>")
                }
            }
        });
        //document.location.replace(url);
        //console.log(url);
    }

    $('#marque').change(function() {
        //test after 
        //console.log('test');
        var id = $('#marque').val();
        var url_modele = "pages/api/api_getmodeletype.php/?marque=" + id;
        //alert(id);
        populateSelectModele(url_modele);

        $('#motorisation').empty();
        $('#motorisation').append("<option selected disabled>Motorisation</option>")


    });

    $('#modele').change(function() {
        //test after 
        //console.log('test');
        var id = $('#modele').val();
        var url_fueltype = "pages/api/api_getfueltype.php/?model=" + id;
        //alert(id);
        populateSelectFuelType(url_fueltype);
    });


    function getListDesVehicules(url) {

        //document.location.replace(url);
        //console.log(url);
    }

    function getDetailFromVin(model, car) {
        var url_detail = "pages/api/api_getdetailfromvin.php/?model=" + model + "&car=" + car;
        $.ajax({
            url: url_detail,
            type: 'get',
            success: function(response) {
                var rep = response;
                let data = JSON.parse(rep)
                console.log(data);
                let arrayImages = data.linkageTargets[0].vehicleImages;
                //console.log(arrayImages);
                $('#bodyImage').empty();
                $('#bodyImage').append('<img src="' + arrayImages[0].imageURL400 +
                    '" alt="test" class="img-thumbnail">');
            }
        });
        //document.location.replace(url);
        //console.log(url);
    }

    $('#formsearchvin').submit(function(e) {
        //arret du chargement de la page
        e.preventDefault();
        $('#modalsearchbox').show();
        //
        var vin = $('#vin_input').val();
        var url_vehicule = "pages/api/api_getvehiculebyvin.php/?vin=" + vin;
        $.ajax({
            url: url_vehicule,
            type: 'get',
            success: function(response) {
                var rep = response;
                let data = JSON.parse(rep)
                const arrayVehicule = data.matchingVehicles.array;
                //console.log(arrayVehicule);
                //console.log(data.length);
                // let dataElemrnt = data.array;
                $('#bodyList').empty();
                $('#bodyList').append(
                    '<div class="list-group list-group-flush" style="margin-bottom: 0px">');
                let cpt = 0;
                for (let i = 0; i < arrayVehicule.length; i++) {
                    //console.log(element)
                    $('#bodyList').append('<a href="?link=categories&carId=' + arrayVehicule[i]
                        .carId +
                        '" class="list-group-item list-group-item-action"><div id="list' +
                        arrayVehicule[i].carId +
                        '" class="d-flex w-100 justify-content-between">');
                    $('#list' + arrayVehicule[i].carId).append('<h5 class="mb-1">' + arrayVehicule[
                            i].carName + '</h5><small class="text-muted">' + arrayVehicule[i]
                        .vehicleTypeDescription + '</small></div>');
                    // $('#list'+arrayVehicule[i].carId).append('<p class="mb-1">'+arrayVehicule[i].vehicleTypeDescription+'</p></a>');
                    //on recupere limage
                    if (cpt == 0) {
                        getDetailFromVin(arrayVehicule[i].modelId, arrayVehicule[i].carId);
                        cpt++;
                    }
                }
                $('#bodyList').append("</div>")


            }
        });

    });

    </script>



</body>

</html>