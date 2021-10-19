<?php
    
      $functionModels = 'getModelSeries';
      $paramsModels = array(
                  'country' => 'fr',
                  'lang' => 'fr',
                  'provider' => TECDOC_MANDATOR,
                  "linkingTargetType"=> "P",
                  "manuId"=> $marque
                );
                
      $requestModels = createRequest( $functionModels, $paramsModels );
      $resultModels = callJSON( $functionModels, $requestModels );
      $models=$resultModels->data;
		
    ?>