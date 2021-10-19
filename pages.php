<?php
if (@$_REQUEST[link]=="index.php"){include('pages/accueil.php');}

elseif (@$_REQUEST[link]=="home"){include('pages/accueil.php');}
elseif (@$_REQUEST[link]=="products"){include('pages/products.php');}
elseif (@$_REQUEST[link]=="categories"){include('pages/products_categories.php');}
elseif (@$_REQUEST[link]=="oils"){include('pages/oils.php');}
elseif (@$_REQUEST[link]=="oil"){include('pages/oil.php');}
elseif (@$_REQUEST[link]=="product"){include('pages/product.php');}

else{include('pages/accueil.php');}
?>