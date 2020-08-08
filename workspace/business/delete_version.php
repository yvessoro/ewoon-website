<?php
session_start();
include_once 'db_manager/DbHandler.php';
$db = new DbHandler();

function redirect($url) {
    echo "<script language=javascript>";
    echo "window.location.href = '" . $url . "';";
    echo "</script>";
}

if (isset($_GET["idversion"])) {
    $id = $_GET["idversion"];

    $res = $db->deleteVersion($id);
    if ($res) {
        redirect('../?link=admin_versions&error=false');
    }else{
        redirect('../?link=admin_versions&error=true');
    }
} else {
    // login details missing
    redirect('../?link=admin_versions&error=true');
}
?>