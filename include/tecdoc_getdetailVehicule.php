<?php
    $functionSearch = 'getLinkageTargets';
    $paramsSearch = array(
                'linkageTargetCountry' => 'fr',
                'lang' => 'fr',
                'provider' => TECDOC_MANDATOR,
                "linkageTargetIds" => array(
                    "type" => "P",
                    "id" => $carID
                )
            );
            
    $requestSearch = createRequest( $functionSearch, $paramsSearch );
    $resultSearch = callJSON( $functionSearch, $requestSearch );
    $search=$resultSearch->linkageTargets;

