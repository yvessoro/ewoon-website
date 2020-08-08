<?php
session_start();
include_once 'db_manager/DbHandler.php';
$db = new DbHandler();

function redirect($url) {
    echo "<script language=javascript>";
    echo "window.location.href = '" . $url . "';";
    echo "</script>";
}

if (isset($_GET["idproduit"])) {
    $id = $_GET["idproduit"];

    $res = $db->deleteProduct($id);
    if ($res) {
        redirect('../?link=admin_products&error=false');
    }else{
        redirect('../?link=admin_products&error=true');
    }
} else {
    // login details missing
    redirect('../?link=admin_products&error=true');
}
?>