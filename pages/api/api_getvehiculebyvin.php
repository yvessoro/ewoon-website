<?php
    session_start();
    include_once '../../workspace/business/db_manager/DbHandler.php';
    include("../../include/tecdoc_api.php");

    $db = new DbHandler();
    function redirect($url) {
        echo "<script language=javascript>";
        echo "window.location.href = '" . $url . "';";
        echo "</script>";
    }
    

    $functionDetails = 'getVehiclesByVIN';
    $paramsDetails = array(
                'country' => 'fr',
                'lang' => 'fr',
                'provider' => TECDOC_MANDATOR,
                "vin"=> $_GET['vin']
            );
            
    $requestDetails = createRequest( $functionDetails, $paramsDetails );
    $resultDetails = callJSON( $functionDetails, $requestDetails );
    $details=$resultDetails->data;
    
    echo json_encode ($details);

