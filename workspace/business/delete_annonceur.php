<?php
session_start();
include_once 'db_manager/DbHandler.php';
$db = new DbHandler();

function redirect($url) {
    echo "<script language=javascript>";
    echo "window.location.href = '" . $url . "';";
    echo "</script>";
}

if (isset($_GET["idAnnonceur"])) {
    $id = $_GET["idAnnonceur"];

    $res = $db->deleteAnnonceur($id);
    if ($res) {
        redirect('../?link=admin_annonceurs&error=false');
    }else{
        redirect('../?link=admin_annonceurs&error=true');
    }
} else {
    // login details missing
    redirect('../?link=admin_annonceurs&error=true');
}
?>