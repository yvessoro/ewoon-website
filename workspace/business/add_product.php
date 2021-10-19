<?php
session_start();
include_once 'db_manager/DbHandler.php';
$db = new DbHandler();

function redirect($url) {
    echo "<script language=javascript>";
    echo "window.location.href = '" . $url . "';";
    echo "</script>";
}

if (isset($_POST["designation"]) and isset($_POST["description"]) and isset($_POST["reference"])) {
    $id = rand(1, 1000000000);
    $designation = $_POST["designation"];
    $description = $_POST["description"];
    $reference = $_POST["reference"];
    $prix = $_POST["prix"];
    $poids = $_POST["poids"];
    $fileName="";
    $commentaire = $_POST["commentaire"];
    $idtypeProduit = $_POST["idtypeProduit"];
    $idmodele = $_POST["idmodele"];
    $idcarburant = $_POST["idcarburant"];
    $idetatProduit = $_POST["idetatProduit"];
    $idmarque = $_POST["idmarque"];
    $idfabricant = $_POST["idfabricant"];
    $idversion = $_POST["idversion"];
    if($_SESSION['CONNECTED'] == "ADMIN"){
        $idConnected=null;
    }else{
        $idConnected=$_SESSION['ID'];
    }

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
                    $res = $db->createProduct($id, addslashes($designation),addslashes($description),$reference,$prix,$poids,$fileName, addslashes($commentaire), $idtypeProduit, $idmodele,$idcarburant,$idetatProduit,$idmarque,$idfabricant,$idConnected,$idversion);
                    if($res == SUCCESS){
                        if($_SESSION['CONNECTED'] == "ADMIN"){
                            redirect("../?link=admin_products&error=false");
                        }else{
                            redirect("../?link=annonceur_products&error=false");
                        }
                    }else{
                        if($_SESSION['CONNECTED'] == "ADMIN"){
                            redirect("../?link=admin_products&error=true");
                        }else{
                            redirect("../?link=annonceur_products&error=true");
                        } 
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
        $res = $db->createProduct($id, addslashes($designation),addslashes($description),$reference,$prix,$poids,$fileName, addslashes($commentaire), $idtypeProduit, $idmodele,$idcarburant,$idetatProduit,$idmarque,$idfabricant,$idConnected,$idversion);
        if($res == SUCCESS){
            if($_SESSION['CONNECTED'] == "ADMIN"){
                redirect("../?link=admin_products&error=false");
            }else{
                redirect("../?link=annonceur_products&error=false");
            }
        }else{
            if($_SESSION['CONNECTED'] == "ADMIN"){
                redirect("../?link=admin_products&error=true");
            }else{
                redirect("../?link=annonceur_products&error=true");
            }
        }
    }
} else {
    // login details missing
    if($_SESSION['CONNECTED'] == "ADMIN"){
        redirect("../?link=admin_products&error=true");
    }else{
        redirect("../?link=annonceur_products&error=true");
    }
}
?>