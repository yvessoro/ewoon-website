<?php
session_start();
// remove all session variables
session_unset(); 

// destroy the session 
$_SESSION = array();

function redirect($url) {
    echo "<script language=javascript>";
    echo "window.location.href = '" . $url . "';";
    echo "</script>";
}
redirect('../../?link=index.php');
?>