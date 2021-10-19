<?php
      // TestRequestParameters:
      $function = 'getArticleDirectSearchAllNumbersWithState';
      $params = array(
                  'articleCountry' => 'fr',
                  'lang' => 'fr',
                  'provider' => TECDOC_MANDATOR,
                  "articleNumber" => $reference
                );
                
      $request = createRequest( $function, $params );
      $result = callJSON( $function, $request );
      $data=$result->data;
		
    ?>