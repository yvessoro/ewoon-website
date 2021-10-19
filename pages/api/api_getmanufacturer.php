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
    

    // TestRequestParameters:
    $function = 'getManufacturers';
    $params = array(
                'country' => 'fr',
                'lang' => 'fr',
                'provider' => TECDOC_MANDATOR,
                "linkingTargetType"=> "P"
              );
              
    $request = createRequest( $function, $params );
    $result = callJSON( $function, $request );
    $data=$result->data;
    
    echo json_encode ($data);

