<?php
session_start();
include_once 'db_manager/DbHandler.php';
$db = new DbHandler();

function redirect($url) {
    echo "<script language=javascript>";
    echo "window.location.href = '" . $url . "';";
    echo "</script>";
}

if (isset($_GET["idPaiement"])) {
    $id = $_GET["idPaiement"];

    $res = $db->deletePaiement($id);
    if ($res) {
        redirect('../?link=admin_paiements&error=false');
    }else{
        redirect('../?link=admin_paiements&error=true');
    }
} else {
    // login details missing
    redirect('../?link=admin_paiements&error=true');
}
?>