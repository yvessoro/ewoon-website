<?php
 
      // Constant values:
      define ('TECDOC_MANDATOR', '22790');
      define ('API_KEY', '2BeBXg6FuSmWBzjRH8UiMDWZMyU7NdqzUshPPdXfFhzX3efckqzB');
      define ('SERVICE_URL', 'https://webservice.tecalliance.services/pegasus-3-0/services/TecdocToCatDLB.jsonEndpoint?api_key=2BeBXg6FuSmWBzjRH8UiMDWZMyU7NdqzUshPPdXfFhzX3efckqzB');
 
      // Printout any error:
      error_reporting( E_ALL | E_NOTICE ); // to see all Errors
 
      // Setup HTTP context with communication header:
      function getContext( $data, $optional_headers ) {
        $params = array(
                    'http' => array(
                    'method' => 'POST',
                    'content' => $data
                  )
        );
 
        if ( $optional_headers !== null ) {
          $params[ 'http' ][ 'header' ] = $optional_headers;
        }
        
        return stream_context_create( $params );
      }
 
      // Create request with function name and its parameters:
      function createRequest( $functionName, $requestParams ) {
        return array(
          $functionName => $requestParams
        );
      }
      
      // Serializing request, calling JSON endpoint & deserializing response:
      function callJSON( $function, $request, $optional_headers = null ) { 
        $jsonRequest = json_encode( $request );
        
        $ctx = getContext( $jsonRequest, $optional_headers );
        $fp = @fopen( SERVICE_URL, 'rb', false, $ctx );
        if ( !$fp ) {
          throw new Exception( "Problem with $url, $php_errormsg" );
        }
 
        $jsonResponse = @stream_get_contents($fp);
        if ( $jsonResponse === false ) {
          throw new Exception( "Problem reading data from $url, $php_errormsg" );
        }
        
        $response = json_decode($jsonResponse);
        return $response;
      }
    ?>