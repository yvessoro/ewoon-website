<?php
session_start();
include_once 'db_manager/DbHandler.php';
$db = new DbHandler();

function redirect($url) {
    echo "<script language=javascript>";
    echo "window.location.href = '" . $url . "';";
    echo "</script>";
}

if (isset($_POST["libelle"]) and isset($_POST["categorie"])) {
    $id = rand(1, 1000000000);
    $libelle = $_POST["libelle"];
    $idcategorie = $_POST["categorie"];
    $idAdmin = $_SESSION['ID'];

    $res = $db->createTypeProduit($id, addslashes($libelle),$idAdmin,$idcategorie);
    if($res == SUCCESS){
        redirect('../?link=admin_type_produits&error=false');
    }else{
        redirect('../?link=admin_type_produits&error=true');
    }
} else {
    // login details missing
    redirect('../?link=admin_type_produits&error=true');
}
?>