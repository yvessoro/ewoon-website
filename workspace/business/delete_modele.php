<?php
session_start();
include_once 'db_manager/DbHandler.php';
$db = new DbHandler();

function redirect($url) {
    echo "<script language=javascript>";
    echo "window.location.href = '" . $url . "';";
    echo "</script>";
}

if (isset($_GET["idModele"])) {
    $id = $_GET["idModele"];

    $res = $db->deleteModele($id);
    if ($res) {
        redirect('../?link=admin_modeles&error=false');
    }else{
        redirect('../?link=admin_modeles&error=true');
    }
} else {
    // login details missing
    redirect('../?link=admin_modeles&error=true');
}
?>