<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Hall Login</title>
	<link rel="stylesheet" type="text/css" href="style_login.css">

</head>
<body>
<?php
session_start();
?>
<?php
if(isset($_POST['login'])){
require 'db_connect.php';

mysql_connect($host,$user,$pass);
mysql_select_db($db);
if(isset($_POST['pwd'])){
		$password = $_POST['pwd'];
		$sql = "SELECT * FROM loginh WHERE password='$password' LIMIT 1";
		$res = mysql_query($sql);
		if(mysql_num_rows($res)==1){
			$_SESSION['result'] = 'result';
			$sql= "SELECT * FROM loginh WHERE password='$password'";
			$result = mysql_query($sql);
			if(mysql_num_rows($result)){
							$row=mysql_fetch_assoc($result);
							$_SESSION['username'] = $row['username'];
							$_SESSION['code'] = $row['code'];
							$redirect_page = "htables.php?type=complaint_type&hall=hall&status=Pending";
							header('Location: '.$redirect_page);
								}
			}
		else{
			$_SESSION['error'] = 'error';
			echo "<strong><center>Wrong Credentials</center></strong>";
			}
	}
	}

?>
<?php
if(!isset($_SESSION['facu'])){
					$redirect = "index.php";
					header('Location: '.$redirect);
					unset($_SESSION['facu']);
					exit();
					}
?>
<fieldset style="width:20%" class="std">
<form method="POST" action="" name="form1" id="form1">
	<p>
	<div class="leg"><legend align="center"><h3><b>Hall Login</b></h3></legend></pre></p></div>
	<p>
	<?php if(isset($msg)){
	echo $msg;
	}
	?>
	
	<pre><label><b>Password:</b>   <input type="password" name="pwd" required maxlength="20"/></label></pre>
	
	<button class="link" type="submit" id="login" name="login" alt="login" value="">LogIn</button>
	<a class="link" href="index.php">Back</a>
	</p>
</form>
</fieldset>
<footer>
    <p>Developed by <b>Nishchal Kutarekar</b>
nilk35@gmail.com</p>
</footer>
</body>
</html>
