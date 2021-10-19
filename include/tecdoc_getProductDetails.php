<?php
      // TestRequestParameters:
      $functionDetails = 'getArticles';
      $paramsDetails = array(
                  'articleCountry' => 'fr',
                  'lang' => 'fr',
                  'provider' => TECDOC_MANDATOR,
                  "searchQuery" => $reference,
                  "includeAll" => true
                );
                
      $requestDetails = createRequest( $functionDetails, $paramsDetails );
      $resultDetails = callJSON( $functionDetails, $requestDetails );
      $dataDetails=$resultDetails->articles;
		
    ?>