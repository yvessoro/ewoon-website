<?php
session_start();
include_once 'db_manager/DbHandler.php';
$db = new DbHandler();

function redirect($url) {
    echo "<script language=javascript>";
    echo "window.location.href = '" . $url . "';";
    echo "</script>";
}

if (isset($_POST["immatriculation"]) and isset($_POST["vin"])) {
    $id = rand(1, 1000000000);
    $immatriculation = $_POST["immatriculation"];
    $vin = $_POST["vin"];
    $idversion = $_POST["idversion"];
    $idmodele = $_POST["idmodele"];
    $idcarburant = $_POST["idcarburant"];
    $idmarque = $_POST["idmarque"];

    $res = $db->addCar($id, addslashes($immatriculation),addslashes($vin),$idversion, $idmodele,$idcarburant,$idmarque,$_SESSION['ID']);
    if($res == SUCCESS){
        redirect("../?link=user_cars&error=false");
    }else if($res == EXISTED){
        redirect('../?link=user_cars&error=existed');
    }else{
        redirect("../?link=user_cars&error=true"); 
    }
} else {
    // login details missing
    redirect("../?link=user_cars&error=true");
}
?>