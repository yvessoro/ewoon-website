<?php
session_start();
include_once 'db_manager/DbHandler.php';
$db = new DbHandler();

function redirect($url) {
    echo "<script language=javascript>";
    echo "window.location.href = '" . $url . "';";
    echo "</script>";
}

if (isset($_GET["idTypeProduit"])) {
    $id = $_GET["idTypeProduit"];

    $res = $db->deleteMarque($id);
    if ($res) {
        redirect('../?link=admin_type_produits&error=false');
    }else{
        redirect('../?link=admin_type_produits&error=true');
    }
} else {
    // login details missing
    redirect('../?link=admin_type_produits&error=true');
}
?>