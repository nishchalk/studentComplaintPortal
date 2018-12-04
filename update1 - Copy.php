<?php
require 'db_connect.php';
$db = "hmcp";
mysql_connect($host,$user,$pass);
mysql_select_db($db);


mysql_query("UPDATE complaint SET remarks = '$_POST[remarks]' WHERE id = '$_POST[id]' ")
or die(mysql_error());


header("Location: " . $_SERVER["HTTP_REFERER"]);

?>