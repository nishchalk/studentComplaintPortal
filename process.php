<?php
require 'db_connect.php';

mysql_connect($host,$user,$pass);
mysql_select_db($db);

$id=$_REQUEST['id'];

mysql_query("UPDATE complaint SET status = 'Processing' WHERE id = $id")
or die(mysql_error());

header("Location: " . $_SERVER["HTTP_REFERER"]);

?>