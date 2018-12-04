<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>
.styling{background-color:#424200;color:#CBFD02;font: bold 14px MS Sans Serif;
padding: 3px;}
</style>
<title>Complaint Portal | Indian Institute of Technology Kharagpur</title>
    
<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>

<?php
session_start();
?>
<?php
$_SESSION['facu'] = 'facu';
$_SESSION['admin'] = 'admin';
?>

<?php
$con = mysql_connect("localhost","root","");
if(!$con){
    die("can not connect" . mysql_error());
    }
mysql_select_db("hmcp");
    
    require 'db_connect.php';


mysql_connect($host,$user,$pass);
mysql_select_db($db);

?>

<div class="container">
<center><h1>Complaint Portal</h1></center>
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
    
    <li>
    <div class="form-group">
    <div class="col-sm-10">  
        <input type="submit" name = "submit" value="Submit" />
        <input type="reset" value="Reset"/>
        </div>
        </div>
    </li>
</ul>
</form>



<footer>
    <a href="student.php" title="Login" class= "loginf"> Student Login</a></br></br>
    <a href="hall.php" title="Login" class= "loginf"> Hall Login</a></br></br>
    <a href="admin.php" title="Login" class = "admin">Admin Login</a>
</footer>

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

</body>
</html>