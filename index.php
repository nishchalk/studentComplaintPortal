<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">


<style>
.styling{background-color:#424200;color:#CBFD02;font: bold 14px MS Sans Serif;
padding: 3px;}
</style>
<title>Students' Complaint Portal | Indian Institute of Technology Kharagpur</title>
    
<link rel="stylesheet" type="text/css" href="style.css">

<script type='text/javascript'>
function refreshCaptcha(){
    var img = document.images['captchaimg'];
    img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
}
</script>

</head>
<body>

<?php
session_start();
 require 'db_connect.php';
?>
<?php
$_SESSION['facu'] = 'facu';
$_SESSION['admin'] = 'admin';
?>

<?php


$con = mysql_connect($host,$user,$pass);
if(!$con){
    die("can not connect" . mysql_error());
    }
mysql_select_db($db);   
?>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.php">Complaint Portal</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        
        <li><a href="student.php"><span class="glyphicon glyphicon-user"></span> Student Login</a></li>
        <li><a href="hall.php"><span class="glyphicon glyphicon-log-in"></span> Hall Login</a></li>
        <li><a href="admin.php"><span class="glyphicon glyphicon-log-in"></span> Admin Login</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
<center><h1>Students' Complaint Portal</h1></center>
<form class="form-horizontal" action ="submit.php" method = "post" onsubmit="return checkforblank()">

<ul class="form-style-1">
<div class="form-group">
    <li><label class="control-label col-sm-2">Full Name <span class="required">*</span></label>
    <div class="col-sm-10">
    <input type="text" id="name" name="name" class="field-long" placeholder="Name" required /></div>
    </li>
    </div>
    <li>
    <div class="form-group">
        <label class="control-label col-sm-2">Roll No. <span class="required">*</span></label>
        <div class="col-sm-10">  
        <input maxlength="9" type="text" id="roll_no" name="roll_no" class="field-long" required />
        </div>
        </div>
    </li>
    <li>
    <div class="form-group">
        <label class="control-label col-sm-2">Hall<span class="required">*</span></label>
        <div class="col-sm-10">  
        <select name="hall" class="field-select" required>
        <option value="">select hall</option>
        <?php
                                        $sql="SELECT * FROM loginh";
                                        $records=mysql_query($sql);
                                    while($complaint=mysql_fetch_assoc($records)) {
                                        $id = $complaint['id'];
                                            echo '<option value="'.($complaint['code']).'">' .$complaint['username'].  '</option>';
                                        }
                                        ?>
        
        </select>
        </div>
        </div>
    </li>
    <li>
    <div class="form-group">
        <label class="control-label col-sm-2">Room No. <span class="required">*</span></label>
        <div class="col-sm-10">  
        <input maxlength="5" type="text" id="room_no" name="room_no" class="field-long" required />
        </div>
        </div>
    </li>
    <li>
    <div class="form-group">
        <label class="control-label col-sm-2">Complaint Type</label>
        <div class="col-sm-10">  
        <select name="complaint_type" class="field-select" required>
        <option disabled selected value>Complaint related to....</option>
        <option value="Water">Water</option>
        <option value="Electrical">Electrical</option>
        <option value="Civil">Civil</option>
        <option value="Sanitary">Sanitary</option>
        <option value="Accomodation">Accomodation</option>
        <optgroup label="Mess">
        <option value="Mess (food)">Food</option>
        <option value="Mess (service)">Service</option>
        </optgroup>
        <option value="Other">Other</option>
        </select>
        </div>
        </div>
    </li>
    <li>
    <div class="form-group">
        <label class="control-label col-sm-2">Complaint <span class="required">*</span></label>
        <div class="col-sm-10">  
        <textarea maxlength="100" id="complaint" name="complaint" class="field-long field-textarea" required></textarea>
        </div>
        </div>
    </li>

    <center><img src="captcha.php?rand=<?php echo rand();?>" id='captchaimg' class = "cap"><br><br>
    <a href='javascript: refreshCaptcha();' style="color:grey">Refresh Captcha</a>
    
    <input id="captcha_code" name="captcha_code" type="text"><br><br>
    <p><?php if(isset($msg)){
    echo $msg;
    }
    ?></center>
    
    <li>
    <div class="form-group">
    <div class="col-sm-10">  
        <center><input type="submit" name = "submit" value="Submit" />
        <input type="reset" value="Reset"/></center>
        
        </div>
        </div>
    </li>
</ul>
</form>





</div>

<script>

function checkforblank() {
    var errormessage = "";

    if (document.getElementById('name').value == "") {
        errormessage += "Name required \n";
        document.getElementById('name').style.borderColor = "red";
        return false;
    }
    if (document.getElementById('roll_no').value == "") {
        errormessage += "Roll No. required \n";
        document.getElementById('roll_no').style.borderColor = "red";
        return false;
    }
    if (document.getElementById('complaint').value == "") {
        errormessage += "Complaint box Empty \n";
        document.getElementById('complaint').style.borderColor = "red";
        return false;
    }
    if (errormessage != ""){
        alert(errormessage);
        return false;
    }

    }
}
</script>

<footer>
    <p>Developed by <b>Nishchal Kutarekar</b>
nilk35@gmail.com</p>
</footer>

</body>
</html>