<?php
session_start();
include_once 'db_manager/DbHandler.php';
$db = new DbHandler();

function redirect($url) {
    echo "<script language=javascript>";
    echo "window.location.href = '" . $url . "';";
    echo "</script>";
}

if (isset($_GET["idCategorie"])) {
    $id = $_GET["idCategorie"];

    $res = $db->deleteCategorie($id);
    if ($res) {
        redirect('../?link=admin_categories&error=false');
    }else{
        redirect('../?link=admin_categories&error=true');
    }
} else {
    // login details missing
    redirect('../?link=admin_categories&error=true');
}
?>