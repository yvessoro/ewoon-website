<?php
if (@$_REQUEST[link]=="index.php"){include('pages/accueil.php');}

elseif (@$_REQUEST[link]=="home"){include('pages/accueil.php');}
elseif (@$_REQUEST[link]=="products"){include('pages/products.php');}
elseif (@$_REQUEST[link]=="product"){include('pages/product-page.php');}

else{include('pages/accueil.php');}
?>
