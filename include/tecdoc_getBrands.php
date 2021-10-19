<?php

      // TestRequestParameters:
      $functionBrands = 'getBrands';
      $paramsBrands = array(
                  'articleCountry' => 'fr',
                  'lang' => 'fr',
                  'provider' => TECDOC_MANDATOR,
                  "includeDataSupplierLogo"=> "true"
                );
                
      $requestBrands = createRequest( $functionBrands, $paramsBrands );
      $resultBrands = callJSON( $functionBrands, $requestBrands );
      $brands=$resultBrands->data;
		
    ?>