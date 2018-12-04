<?php
require 'db_connect.php';

mysql_connect($host,$user,$pass);
mysql_select_db($db);


mysql_query("UPDATE complaint SET status = '$_POST[status]' WHERE id = '$_POST[id]' ")
or die(mysql_error());


header("Location: " . $_SERVER["HTTP_REFERER"]);

?>