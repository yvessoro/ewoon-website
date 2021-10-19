<?php
session_start();
include_once 'db_manager/DbHandler.php';
$db = new DbHandler();

function redirect($url) {
    echo "<script language=javascript>";
    echo "window.location.href = '" . $url . "';";
    echo "</script>";
}

if (isset($_POST["libelle"]) and isset($_POST["annee"]) and isset($_POST["marque"])) {
    $id = rand(1, 1000000000);
    $libelle = $_POST["libelle"];
    $annee = $_POST["annee"];
    $marque = $_POST["marque"];

    // File upload configuration
    $targetDir = "../upload/";
    $allowTypes = array('jpg','png','jpeg','gif');
    $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = '';
    if(!empty(array_filter($_FILES['files']['name']))){
        foreach($_FILES['files']['name'] as $key=>$val){
            // File upload path
            $uploadFileName = basename($_FILES['files']['name'][$key]);
            $temp = explode(".", $uploadFileName);
            $fileName = round(microtime(true)) . '.' . end($temp);
            $targetFilePath = $targetDir . $fileName;
            
            // Check whether file type is valid
            $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
            if(in_array($fileType, $allowTypes)){
                // Upload file to server
                if(move_uploaded_file($_FILES["files"]["tmp_name"][$key], $targetFilePath)){
                    // Image db insert sql
                    $res = $db->createModele($id, $libelle,$fileName, $annee, $_SESSION['ID'], $marque);
                    if($res == SUCCESS){
                        redirect("../?link=admin_modeles&error=false");
                    }else{
                        redirect("../?link=admin_modeles&error=true"); 
                    }
                    //pushNotification();
                }else{
                    $errorUpload .= $_FILES['files']['name'][$key].', ';
                }
            }else{
                $errorUploadType .= $_FILES['files']['name'][$key].', ';
            }
        }
    }else{
        $res = $db->createModele($id, $libelle,"", $annee, $_SESSION['ID'], $marque);
        if($res == SUCCESS){
            redirect("../?link=admin_modeles&error=false");
        }else{
            redirect("../?link=admin_modeles&error=true"); 
        }
    }
} else {
    // login details missing
    redirect("../?link=admin_modeles&error=true");
}
?>