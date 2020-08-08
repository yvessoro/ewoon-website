<?php
session_start();
include_once 'db_manager/DbHandler.php';
$db = new DbHandler();

function redirect($url) {
    echo "<script language=javascript>";
    echo "window.location.href = '" . $url . "';";
    echo "</script>";
}

if (isset($_GET["idEtat"])) {
    $id = $_GET["idEtat"];

    $res = $db->deleteEtat($id);
    if ($res) {
        redirect('../?link=admin_etats&error=false');
    }else{
        redirect('../?link=admin_etats&error=true');
    }
} else {
    // login details missing
    redirect('../?link=admin_etats&error=true');
}
?>