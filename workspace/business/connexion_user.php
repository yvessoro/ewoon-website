<?php
session_start();
include_once 'db_manager/DbHandler.php';
$db = new DbHandler();

function redirect($url) {
    echo "<script language=javascript>";
    echo "window.location.href = '" . $url . "';";
    echo "</script>";
}

if (isset($_POST["username"]) and isset($_POST["password"])) {
    $username = $_POST["username"];
    $pwd = $_POST["password"];
    
    $res = $db->checkUserLogin($username, $pwd);
    if ($res == SUCCESS) {
        $user = $db->getUserByEmail($username);
        if ($user != NULL) {
            $_SESSION['CONNECTED'] = "USER";
            $_SESSION['ID'] = $user["idutilisateur"];
            $_SESSION['NOM'] = $user["nom"];
            $_SESSION['PRENOM'] = $user["prenom"];
            $_SESSION['PHONE'] = $user["phone"];
            redirect('../?link=user_dashboard');
        }else{
            redirect('../?link=user_login&error=true');
        }
    }else {
        redirect('../?link=user_login&error=true');
    }
} else {
    // login details missing
    redirect('../?link=user_login&error=true');
}
?>
