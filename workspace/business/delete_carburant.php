<?php
session_start();
include_once 'db_manager/DbHandler.php';
$db = new DbHandler();

function redirect($url) {
    echo "<script language=javascript>";
    echo "window.location.href = '" . $url . "';";
    echo "</script>";
}

if (isset($_GET["idCarburant"])) {
    $id = $_GET["idCarburant"];

    $res = $db->deleteCarburant($id);
    if ($res) {
        redirect('../?link=admin_carburants&error=false');
    }else{
        redirect('../?link=admin_carburants&error=true');
    }
} else {
    // login details missing
    redirect('../?link=admin_carburants&error=true');
}
?>