<?php
session_start();
include_once 'business/db_manager/DbHandler.php';
$db = new DbHandler();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>EWOON</title>
<link rel="icon" type="image/png" href="images/favicon.ico" />
<link href="css/font-awesome.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

</head>

<body>
<?php include("pages.php");?>

</body>
</html>