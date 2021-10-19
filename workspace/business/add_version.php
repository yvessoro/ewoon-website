<?php
session_start();
include_once 'db_manager/DbHandler.php';
$db = new DbHandler();

function redirect($url) {
    echo "<script language=javascript>";
    echo "window.location.href = '" . $url . "';";
    echo "</script>";
}

if (isset($_POST["libelle"]) and isset($_POST["portes"]) and isset($_POST["couleur"]) and isset($_POST["idmodele"]) and isset($_POST["idcarburant"])) {
    $id = rand(1, 1000000000);
    $libelle = $_POST["libelle"];
    $portes = $_POST["portes"];
    $couleur = $_POST["couleur"];
    $idmodele = $_POST["idmodele"];
    $idcarburant = $_POST["idcarburant"];

    $res = $db->createVersion($id, $libelle,$portes, $couleur, $_SESSION['ID'], $idmodele, $idcarburant);
        if($res == SUCCESS){
            redirect("../?link=admin_versions&error=false");
        }else{
            redirect("../?link=admin_versions&error=true"); 
        }
} else {
    // login details missing
    redirect("../?link=admin_versions&error=true");
}
?>