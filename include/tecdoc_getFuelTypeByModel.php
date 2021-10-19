<?php
  
  


      $functionDetails = 'getLinkageTargets';
      $paramsDetails = array(
                  'linkageTargetCountry' => 'fr',
                  'lang' => 'fr',
                  'provider' => TECDOC_MANDATOR,
                  "linkageTargetType"=> "P",
                  "vehicleModelSeriesIds"=> $_GET['model']
                );
                
      $requestDetails = createRequest( $functionDetails, $paramsDetails );
      $resultDetails = callJSON( $functionDetails, $requestDetails );
      $details=$resultDetails->data;
		
      echo json_encode($details);

    ?>