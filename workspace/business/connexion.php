<?php
session_start();
include_once 'db_manager/DbHandler.php';
$db = new DbHandler();

function redirect($url) {
    echo "<script language=javascript>";
    echo "window.location.href = '" . $url . "';";
    echo "</script>";
}

if (isset($_POST["radioType"]) and isset($_POST["username"]) and isset($_POST["password"])) {
    $username = $_POST["username"];
    $pwd = $_POST["password"];
    
    if($_POST["radioType"]=="annonceur"){
        $res = $db->checkAnnonceurLogin($username, $pwd);
        if ($res == SUCCESS) {
            $user = $db->getAnnonceurByEmail($username);
            if ($user != NULL) {
                $_SESSION['ID'] = $user["idannonceur"];
                $_SESSION['NOM'] = $user["nom"];
                $_SESSION['PRENOM'] = $user["prenom"];
                $_SESSION['EMAIL'] = $user["email"];
                redirect('../?link=annonceur_products');
            }else{
                redirect('../?link=index.php&error=true');
            }
        }else {
            redirect('../?link=index.php&error=true');
        }
    }else if($_POST["radioType"]=="administrateur"){
        $res = $db->checkAdminLogin($username, $pwd);
        if ($res == SUCCESS) {
            $user = $db->getAdminByUsername($username);
            if ($user != NULL) {
                $_SESSION['ID'] = $user["idAdministrateur"];
                $_SESSION['NOM'] = $user["nom"];
                $_SESSION['PRENOM'] = $user["prenom"];
                $_SESSION['USERNAME'] = $username;
                redirect('../?link=admin_dashboard');
            }else{
                redirect('../?link=index.php&error=true');
            }
        }else {
            redirect('../?link=index.php&error=true');
        }
    }
} else {
    // login details missing
    redirect('../?link=index.php'); 
}
?>
