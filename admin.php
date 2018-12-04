<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Admin Login</title>
	<link rel="stylesheet" type="text/css" href="style_login.css">
	<script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>


</head>
<body>
<?php
session_start();
?>
<?php
require 'db_connect.php';
if(isset($_POST['login'])){
	if(isset($_POST['pass'])){
		$password = $_POST['pass'];
		if($password== $admin){
			$_SESSION['menu'] = 'menu';
			$redirect_page = "tables.php?type=complaint_type&hall=hall&status=Priority";
			header('Location: '.$redirect_page);
			}
		else{
			$_SESSION['error'] = 'error';
			echo "<strong><center>Wrong Credentials</center></strong>";
			}
	}
}

?>
<?php
if(!isset($_SESSION['admin'])){
					$redirect = "index.php";
					header('Location: '.$redirect);
					unset($_SESSION['admin']);
					exit();
					}
					
					$_SESSION['logout'] = 'logout';
					
?>
<fieldset style="width:20%" class="std">
<form method="POST" action="" name="form1" id="form1">
	<p>
	<div class="leg"><legend align="center"><h3><b>Admin Login</b></h3></legend></div></p>
	<p>
	<?php if(isset($msg)){
	echo $msg;
	}
	?>	
	<p>
	<pre><label><b>Password:</b>   <input type="password" name="pass" required maxlength="20"/></label></pre><br>
	<button class="link" type="submit" id="login" name="login" alt="login" value="">LogIn</button>
	<a class="link" href="index.php">Back</a>
	</p>
	</p>
</form>
</fieldset>

<footer>
    <p>Developed by <b>Nishchal Kutarekar</b>
nilk35@gmail.com</p>
</footer>

</body>
</html>