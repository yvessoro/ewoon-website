<?php
session_start();
include_once 'db_manager/DbHandler.php';
$db = new DbHandler();

function redirect($url) {
    echo "<script language=javascript>";
    echo "window.location.href = '" . $url . "';";
    echo "</script>";
}

if (isset($_POST["nom"]) and isset($_POST["prenom"]) and isset($_POST["email"]) and isset($_POST["password"]) ) {
    $id = rand(1, 1000000000);
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $res = $db->createAnnonceur($id, addslashes($nom), addslashes($prenom), $email, $password);
    if($res == SUCCESS){
        redirect('../?link=admin_annonceurs&error=false');
    }else if($res == EXISTED){
        redirect('../?link=admin_annonceurs&error=existed');
    }else{
        redirect('../?link=admin_annonceurs&error=true');
    }
} else {
    // login details missing
    redirect('../?link=admin_annonceurs&error=true');
}
?>