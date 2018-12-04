<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel | Complaint Portal</title>
    <!-- Core CSS - Include with every page -->
    <link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
  <link href="assets/css/style.css" rel="stylesheet" />
      <link href="assets/css/main-style.css" rel="stylesheet" />

    <!-- Page-Level CSS -->
    <link href="assets/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet" />

     <script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>

    <script src='https://code.jquery.com/jquery-2.1.3.min.js'></script>

</head>

<body>
<?php
session_start();
date_default_timezone_set('Asia/Kolkata');
?>
<?php
$_SESSION['logout'] = 'logout';
if(!isset($_SESSION['result'])){
                    print("<a href=\"index.php\">Please login first</a>");
                    unset($_SESSION['result']);
                    exit();
                    }
require 'db_connect.php';


mysql_connect($host,$user,$pass);
mysql_select_db($db);

$h = $_SESSION['username'];
$h1 =$_SESSION['code'];


?>
<?php
        $var = $_GET["type"];
        $hal = $h1;
$stat = $_GET["status"];
        ?>
    <!--  wrapper -->
    <div id="wrapper" >
        <!-- navbar top -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbar">
            <!-- navbar-header -->
             <div class="navbar-header">
                
                <a class="navbar-brand" href="index.html">
                    <img src="assets/img/plogo.png" alt="" />
                </a>
            </div>
            <!-- end navbar-header -->
            <!-- navbar-top-links -->
            <ul class="nav navbar-top-links navbar-right">
                <!-- main dropdown -->
                                   <!-- end dropdown-alerts -->
                </li>
                
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                          <i class="fa fa-bell fa-3x"></i>
                    </a>
                    <!-- dropdown alerts-->
                    <ul class="dropdown-menu dropdown-alerts">

                        <li>
                            <?php
                            echo '<a href="htables.php?type='.$var.'&hall='.$hal.'&status=Priority">'
                            ?>
                                <div>
                                    <i class=""></i>Priority
                                    
                                </div>
                            </a>
                        </li>

                        <li>
                            <?php
                            echo '<a href="htables.php?type='.$var.'&hall='.$hal.'&status=Pending">'
                            ?>
                                <div>
                                    <i class=""></i>Pending
                                    
                                </div>
                            </a>
                        </li>
                        
                        <li>
                            <?php
                            echo '<a href="htables.php?type='.$var.'&hall='.$hal.'&status=Processing">'
                            ?>
                                <div>
                                    <i class=""></i>Processing
                                    
                                </div>
                            </a>
                        </li>
                        
                        <li>
                            <?php
                            echo '<a href="htables.php?type='.$var.'&hall='.$hal.'&status=Completed">'
                            ?>
                                <div>
                                    <i class=""></i>Completed
                                    
                                </div>
                            </a>
                        </li>
                    </ul>
                    <!-- end dropdown-alerts -->
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-3x"></i>
                    </a>
                    <!-- dropdown user-->
                    <ul class="dropdown-menu dropdown-user">
                        
                        <li><form action="logout.php" method="post"><center><i class="fa fa-sign-out fa-fw"></i><input type="submit" id = "shiny" name="logout" value="Log Out"/></center></form>
                        </li>
                    </ul>
                    <!-- end dropdown-user -->
                </li>
                <!-- end main dropdown -->
            </ul>
            <!-- end navbar-top-links -->

        </nav>
        <!-- end navbar top -->
        <!-- navbar side -->
        <nav class="navbar-default navbar-static-side" role="navigation">
            <!-- sidebar-collapse -->
            <div class="sidebar-collapse">
                <!-- side-menu -->
                <ul class="nav" id="side-menu">
                    <li>
                        <!-- user image section-->
                        <div class="user-section">
                            <div class="user-section-inner">
                                <img src="assets/img/user.png" alt="">
                            </div>
                            <div class="user-info">
                               <?php echo "<div>" .$h. "</div>" ?>
                                
                            </div>
                        </div>
                        <!--end user image section-->
                                               
                      <li>
                        <?php
                        echo '<a href="htables.php?type=complaint_type&hall='.$hal.'&status='.$stat.'"><i class="fa fa-dashboard fa-fw"></i>All Complaints</a>'
                        ?>
                    </li>
                    <li>
                        <?php
                        echo '<a href="htables.php?type=\'Water\'&hall='.$hal.'&status='.$stat.'"><i class="fa fa-dashboard fa-fw"></i>Water</a>'
                        ?>
                    </li>
                    <li>
                        <?php
                        echo '<a href="htables.php?type=\'Electrical\'&hall='.$hal.'&status='.$stat.'"><i class="fa fa-dashboard fa-fw"></i>Electrical</a>'
                        ?>
                    </li>
                    <li>
                        <?php
                        echo '<a href="htables.php?type=\'Civil\'&hall='.$hal.'&status='.$stat.'"><i class="fa fa-dashboard fa-fw"></i>Civil</a>'
                        ?>
                    </li>
                    <li>
                        <?php
                        echo '<a href="htables.php?type=\'Sanitory\'&hall='.$hal.'&status='.$stat.'"><i class="fa fa-dashboard fa-fw"></i>Sanitory</a>'
                        ?>
                    </li>
                    <li>
                        <?php
                        echo '<a href="htables.php?type=\'Accomodation\'&hall='.$hal.'&status='.$stat.'"><i class="fa fa-dashboard fa-fw"></i>Accomodation</a>'
                        ?>
                    </li>
                    
                    <li>
                        <a href="htables.php?"><i class="fa fa-bar-chart-o fa-fw"></i> Mess<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <?php
                        echo '<a href="htables.php?type=\'Mess (food)\'&hall='.$hal.'&status='.$stat.'"><i class="fa fa-dashboard fa-fw"></i>Food</a>'
                        ?>                                
                            </li>
                            <li>
                                <?php
                        echo '<a href="htables.php?type=\'Mess (service)\'&hall='.$hal.'&status='.$stat.'"><i class="fa fa-dashboard fa-fw"></i>Service</a>'
                        ?>
                            </li>
                        </ul>
                        <!-- second-level-items -->
                    </li>
                     
                    <li>
                        <?php
                        echo '<a href="tables.php?type=\'Other\'&hall='.$hal.'&status='.$stat.'"><i class="fa fa-dashboard fa-fw"></i>Other</a>'
                        ?>
                    </li>
                        <!-- second-level-items -->
                    </li>
                </ul>
                <!-- end side-menu -->
            </div>
            <!-- end sidebar-collapse -->
            <div style="float:bottom;">
    <p>Developed by <b>Nishchal Kutarekar</b>
nilk35@gmail.com</p>
</div>
        </nav>
        <!-- end navbar side -->
        
        <!--  page-wrapper -->
        <div id="page-wrapper">

            
            <div class="row">
                 <!--  page header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Complaints</h1>
                </div>
                 <!-- end  page header -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             All Complaints
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Date</th>
                                            <th>Name</th>
                                            <th>Roll No.</th>
                                            
                                            <th>Room No.</th>
                                            
                                            <th>Complaint</th>
                                            <th>Status</th>
                                            <th>Remarks</th>
                                            <th>Action</th>
                                            <th>Feedback</th>  
                                        
                                            
                                        <tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $sql="SELECT * FROM complaint WHERE hall='$h1' AND complaint_type = $var AND status = '$stat'";
                                        $records=mysql_query($sql);
                                    while($complaint=mysql_fetch_assoc($records)) {
                                        $id = $complaint['id'];
                                            echo "<tr>";
                                            echo "<td>".$complaint['id']."</td>";
                                            echo "<td style=\"max-width:0.5px;\">" .date('d M Y <br/> h:i a', $complaint['timest']). "</td>";
                                            echo "<td style=\"max-width:0.5px;\">".$complaint['name']."</td>";
                                            echo "<td>".$complaint['roll_no']."</td>";
                                            
                                            echo "<td>".$complaint['room_no']."</td>";
                                            
                                            echo "<td style=\"max-width:0.5px;\">".$complaint['complaint']."</td>";
                                           if($complaint['status']=='Completed') 
         echo "<td style='background-color: #00FF00;'>".$complaint['status']."</td>"; 
  else if($complaint['status']=='Processing')
         echo "<td style='background-color: #FF0000;'>".$complaint['status']."</td>";
    else if($complaint['status']=='Pending')
         echo "<td style='background-color: #FFFF00;'>".$complaint['status']."</td>"; 
     else if($complaint['status']=='Priority')
         echo "<td style='background-color: #B22222;'>".$complaint['status']."</td>"; 
                                            
                                           if($complaint['status']!='Completed') 
                                         {
                                            echo "<td><form class=\"echo\" action=\"update1.php\" method=\"post\" id=\"status\">";
echo "<input type=\"hidden\" name=\"id\" value=\"$id\" required><br>";
echo "<input class=\"echo\" type=\"text\" size=\"20\"  name=\"remarks\" required>";
if((date('Y', $complaint['timest2'])) > 2016)
{
echo "<center>".date('d/m/y <br/> h:i a <br/>', $complaint['timest2']), $complaint['remarks']."</center>";
}
echo "<center><button id=\"insert\">Insert</button></center>";
echo "</form></td>";
}
else echo "<td style=\"max-width:1px;\"><center>".date('d/m/y <br/> h:i a <br/>', $complaint['timest2']), $complaint['remarks']."</center></td>";

                                            if($complaint['status']!='Completed') 
                                             {
                                            echo "<td><form action=\"update2.php\" method=\"post\" id=\"status\"><input type=\"hidden\" name=\"id\" value=\"$id\" required><input type=\"hidden\" name=\"status\" value=\"Processing\" required><center><button id=\"insert\">Process</button></center></form>

                                            <form action=\"update2.php\" method=\"post\" id=\"status\"><input type=\"hidden\" name=\"id\" value=\"$id\" required><input type=\"hidden\" name=\"status\" value=\"Priority\" required><center><button id=\"insert\">Priority</button></center></form>

                                            <form action=\"update2.php\" method=\"post\" id=\"status\"><input type=\"hidden\" name=\"id\" value=\"$id\" required><input type=\"hidden\" name=\"status\" value=\"Completed\" required><center><button id=\"insert\">Complete</button></center></form></td>";  
                                            }
                                        else echo "<td style=\"max-width:0.5px;\">No further action required</td>";
                                        
                                            if($complaint['status']=='Completed' & $complaint['feedback']!='') echo "<td>".$complaint['feedback']."</td>";
else if($complaint['status']=='Completed' & $complaint['feedback']=='') echo "<td style=\"max-width:0.5px;\">Feedback not yet submitted</td>";
else echo "<td> Not yet Completed</td>";

                                            echo "</tr>";
                                        }

                                        ?>
                                        <script src='insert.js'></script>
                                        <script src='form.js'></script>
                                        
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>ID</th>
                                            <th>Date</th>
                                            <th>Name</th>
                                            <th>Roll No.</th>
                                            
                                            <th>Room No.</th>
                                            
                                            <th>Complaint</th>
                                            <th>Status</th>
                                            <th>Remarks</th>
                                            <th>Action</th>
                                            <th>Feedback</th>  
                                            <th></th>
                                        <tr>
                                    </tfoot>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
            
                  
                    <!--  end  Context Classes  -->
                </div>
            </div>
        </div>
        <!-- end page-wrapper -->

    </div>
    <!-- end wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="assets/plugins/pace/pace.js"></script>
    <script src="assets/scripts/siminta.js"></script>
    <!-- Page-Level Plugin Scripts-->
    <script src="assets/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="assets/plugins/dataTables/dataTables.bootstrap.js"></script>
    <script>
        $(document).ready(function () {
            $('#dataTables-example').dataTable();
        });
    </script>

</body>

</html>
