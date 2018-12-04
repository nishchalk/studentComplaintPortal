<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Online feedback</title>
</head>
<body>
<?php
session_start();
?>
<?php
if(!isset($_SESSION['logout'])){
					print("<a href=\"index.php\">Please login first</a>");
					exit();
					}
$_SESSION = array(); 
session_destroy();
session_unset();
$redirect = "index.php";
header('Location: '.$redirect);
exit();
?>
</body>