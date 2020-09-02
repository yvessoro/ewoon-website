<?php
session_start();
include_once 'workspace/business/db_manager/DbHandler.php';
$db = new DbHandler();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>EWOON &mdash; Pièces auto en ligne</title>
<meta name="description" content="Votre moteur de recherche de pièces auto en ligne">
<meta name="keywords" content="store">
<meta name="author" content="Unique Software">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="icon" type="image/png" href="img/logo.png" />
<link href="css/font-awesome.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

</head>

<body>
<?php include("pages.php");?>

</body>
</html>