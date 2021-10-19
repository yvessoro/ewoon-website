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
    

    $functionModels = 'getModelSeries';
    $paramsModels = array(
                'country' => 'fr',
                'lang' => 'fr',
                'provider' => TECDOC_MANDATOR,
                "linkingTargetType"=> "P",
                "manuId"=> $_GET['marque']
            );
            
    $requestModels = createRequest( $functionModels, $paramsModels );
    $resultModels = callJSON( $functionModels, $requestModels );
    $models=$resultModels->data;
    
    echo json_encode ($models);

