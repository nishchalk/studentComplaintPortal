<?php
require 'db_connect.php';

mysql_connect($host,$user,$pass);
mysql_select_db($db);

date_default_timezone_set('Asia/Kolkata');
$t2 = time();

mysql_query("UPDATE complaint SET remarks = '$_POST[remarks]', timest2 = $t2 WHERE id = '$_POST[id]' ")
or die(mysql_error());


header("Location: " . $_SERVER["HTTP_REFERER"]);

?>