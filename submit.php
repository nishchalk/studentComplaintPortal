
<?php
session_start();


if(isset($_POST['submit'])){
   	 // code for check server side validation
    if(empty($_SESSION['captcha_code'] ) || strcasecmp($_SESSION['captcha_code'], $_POST['captcha_code']) != 0){  
        $msg="<span style='color:red'>The captcha code does not match!</span>";

        $redirect_page = "fail.php";
header('Location: '.$redirect_page);
mysql_close($con);
        // Captcha verification is incorrect.        
    }else {


require 'db_connect.php';


unset($_SESSION['submit']);

$con = mysql_connect($host,$user,$pass);
if(!$con){
	die("can not connect" . mysql_error());
	}
mysql_select_db($db);
$t=time();
$rn=$_POST['roll_no'];
$check="SELECT * FROM stddb WHERE roll_no = '$rn'";
$rs=mysql_query($check);
if(mysql_num_rows($rs)==1) {
    $complaint = 'complaint';

$sql = "INSERT INTO $complaint (timest, name, roll_no, hall, room_no, complaint_type, complaint, status) VALUES ( '$t', '$_POST[name]','$_POST[roll_no]','$_POST[hall]','$_POST[room_no]' ,'$_POST[complaint_type]','$_POST[complaint]', 'Pending')";
mysql_query($sql,$con);

$redirect_page = "success.php";
header('Location: '.$redirect_page);
mysql_close($con);
}

else
{
$redirect_page = "fail.php";
header('Location: '.$redirect_page);
mysql_close($con);
}
}
}


?>