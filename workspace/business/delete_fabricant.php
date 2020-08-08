<?php
session_start();
include_once 'db_manager/DbHandler.php';
$db = new DbHandler();

function redirect($url) {
    echo "<script language=javascript>";
    echo "window.location.href = '" . $url . "';";
    echo "</script>";
}

if (isset($_GET["idFabricant"])) {
    $id = $_GET["idFabricant"];

    $res = $db->deleteFabricant($id);
    if ($res) {
        redirect('../?link=admin_fabricants&error=false');
    }else{
        redirect('../?link=admin_fabricants&error=true');
    }
} else {
    // login details missing
    redirect('../?link=admin_fabricants&error=true');
}
?>