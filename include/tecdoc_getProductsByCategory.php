<?php
      // TestRequestParameters:
      $functionProducts = 'getArticles';
      $paramsProducts = array(
                  'articleCountry' => 'fr',
                  'lang' => 'fr',
                  'provider' => TECDOC_MANDATOR,
                  "genericArticleIds" => $category,
                  "includeAll" => true
                );
                
      $requestProducts = createRequest( $functionProducts, $paramsProducts );
      $resultProducts = callJSON( $functionProducts, $requestProducts );
      $articles=$resultProducts->articles;
		
    ?>