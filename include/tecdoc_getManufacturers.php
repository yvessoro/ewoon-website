<?php
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
		
    ?>