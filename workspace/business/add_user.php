<?php
session_start();
include_once 'db_manager/DbHandler.php';
$db = new DbHandler();

function redirect($url) {
    echo "<script language=javascript>";
    echo "window.location.href = '" . $url . "';";
    echo "</script>";
}

if (isset($_POST["nom"]) and isset($_POST["prenom"]) and isset($_POST["phone"]) and isset($_POST["email"]) and isset($_POST["password"]) ) {
    $id = rand(1, 1000000000);
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $res = $db->createUser($id, addslashes($nom), addslashes($prenom), $phone, $email, $password);
    if($res == SUCCESS){
        redirect('../?link=user_login&created=true');
    }else if($res == EXISTED){
        redirect('../?link=user_register&error=existed');
    }else{
        redirect('../?link=user_register&created=false');
    }
} else {
    // login details missing
    redirect('../?link=user_register&created=false');
}
?>