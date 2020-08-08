<?php
session_start();
include_once 'db_manager/DbHandler.php';
$db = new DbHandler();

function redirect($url) {
    echo "<script language=javascript>";
    echo "window.location.href = '" . $url . "';";
    echo "</script>";
}

if (isset($_POST["nom"]) and isset($_POST["prenom"]) and isset($_POST["username"]) and isset($_POST["password"]) ) {
    $id = rand(1, 1000000000);
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $username = $_POST["username"];
    $password = $_POST["password"];

    $res = $db->createAdmin($id, addslashes($nom), addslashes($prenom), $username, $password);
    if($res == SUCCESS){
        redirect('../?link=admins&error=false');
    }else if($res == EXISTED){
        redirect('../?link=admins&error=existed');
    }else{
        redirect('../?link=admins&error=true');
    }
} else {
    // login details missing
    redirect('../?link=admins&error=true');
}
?>