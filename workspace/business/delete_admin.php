<?php
session_start();
include_once 'db_manager/DbHandler.php';
$db = new DbHandler();

function redirect($url) {
    echo "<script language=javascript>";
    echo "window.location.href = '" . $url . "';";
    echo "</script>";
}

if (isset($_GET["idAdmin"])) {
    $id = $_GET["idAdmin"];

    $res = $db->deleteAdmin($id);
    if ($res) {
        redirect('../?link=admins&error=false');
    }else{
        redirect('../?link=admins&error=true');
    }
} else {
    // login details missing
    redirect('../?link=admins&error=true');
}
?>