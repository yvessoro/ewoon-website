<?php
session_start();
include_once 'db_manager/DbHandler.php';
$db = new DbHandler();

function redirect($url) {
    echo "<script language=javascript>";
    echo "window.location.href = '" . $url . "';";
    echo "</script>";
}

if (isset($_POST["libelle"])) {
    $id = rand(1, 1000000000);
    $libelle = $_POST["libelle"];
    $idAdmin = $_SESSION['ID'];

    $res = $db->createCarburant($id, addslashes($libelle),$idAdmin);
    if($res == SUCCESS){
        redirect('../?link=admin_carburants&error=false');
    }else{
        redirect('../?link=admin_carburants&error=true');
    }
} else {
    // login details missing
    redirect('../?link=admin_carburants&error=true');
}
?>