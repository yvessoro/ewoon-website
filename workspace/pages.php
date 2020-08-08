<?php
if (@$_REQUEST[link]=="index.php"){include('pages/login.php');}

elseif (@$_REQUEST[link]=="admin_login"){include('pages/login.php');}
elseif (@$_REQUEST[link]=="admin_dashboard"){if(!isset($_SESSION['ID'])) {include('pages/login.php');}else{include('pages/admin/dashboard.php');}}
elseif (@$_REQUEST[link]=="admin_annonceurs"){if(!isset($_SESSION['ID'])) {include('pages/login.php');}else{include('pages/admin/liste_annonceurs.php');}}
elseif (@$_REQUEST[link]=="admin_marques"){if(!isset($_SESSION['ID'])) {include('pages/login.php');}else{include('pages/admin/liste_marques.php');}}
elseif (@$_REQUEST[link]=="admin_categories"){if(!isset($_SESSION['ID'])) {include('pages/login.php');}else{include('pages/admin/liste_categories.php');}}
elseif (@$_REQUEST[link]=="admin_etats"){if(!isset($_SESSION['ID'])) {include('pages/login.php');}else{include('pages/admin/liste_etats.php');}}
elseif (@$_REQUEST[link]=="admin_fabricants"){if(!isset($_SESSION['ID'])) {include('pages/login.php');}else{include('pages/admin/liste_fabricants.php');}}
elseif (@$_REQUEST[link]=="admin_paiements"){if(!isset($_SESSION['ID'])) {include('pages/login.php');}else{include('pages/admin/liste_paiements.php');}}
elseif (@$_REQUEST[link]=="admin_carburants"){if(!isset($_SESSION['ID'])) {include('pages/login.php');}else{include('pages/admin/liste_carburants.php');}}
elseif (@$_REQUEST[link]=="admin_type_produits"){if(!isset($_SESSION['ID'])) {include('pages/login.php');}else{include('pages/admin/liste_type_produits.php');}}
elseif (@$_REQUEST[link]=="admin_modeles"){if(!isset($_SESSION['ID'])) {include('pages/login.php');}else{include('pages/admin/liste_modeles.php');}}
elseif (@$_REQUEST[link]=="admin_versions"){if(!isset($_SESSION['ID'])) {include('pages/login.php');}else{include('pages/admin/liste_versions.php');}}
elseif (@$_REQUEST[link]=="admin_products"){if(!isset($_SESSION['ID'])) {include('pages/login.php');}else{include('pages/admin/liste_products.php');}}
elseif (@$_REQUEST[link]=="annonceur_products"){if(!isset($_SESSION['ID'])) {include('pages/login.php');}else{include('pages/annonceur/liste_products.php');}}
elseif (@$_REQUEST[link]=="admins"){if(!isset($_SESSION['ID'])) {include('pages/login.php');}else{include('pages/admin/liste_administrateurs.php');}}
elseif (@$_REQUEST[link]=="profile"){if(!isset($_SESSION['ID'])) {include('pages/login.php');}else{include('pages/profile.php');}}
elseif (@$_REQUEST[link]=="dashboard"){if(!isset($_SESSION['ID'])) {include('pages/login.php');}else{include('pages/annonceur/dashboard.php');}}
elseif (@$_REQUEST[link]=="404"){include('pages/404.php');}

else{include('pages/login.php');}
?>
