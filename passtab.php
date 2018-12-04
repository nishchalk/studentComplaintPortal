<!DOCTYPE html>
<html>
<?php
session_start();
require 'db_connect.php';
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel | Complaint Portal </title>
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
if(!isset($_SESSION['menu'])){
                    print("<a href=\"index.php\">Please login first</a>");
                    unset($_SESSION['menu']);
                    exit();
                    }



mysql_connect($host,$user,$pass);
mysql_select_db($db);
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
                        <i class="fa fa-tasks fa-3x"></i>
                    </a>
                    <!-- dropdown tasks -->
                    <ul class="dropdown-menu dropdown-tasks">
                    <li>
                            <a href="tables.php?type=complaint_type&hall=hall&status=Priority">
                                <div>
                                    <i class=""></i>All Halls
                                        
                                </div>
                            </a>
                        </li>
                    <?php
                                        $sql1="SELECT * FROM loginh";
                                        $records1=mysql_query($sql1);
                                    while($loginh=mysql_fetch_assoc($records1)) {
                                       
                                            echo "<li>";
                                            echo "<a href= tables.php?type=complaint_type&hall='";
                                            echo ''.$loginh['code'].'';
                                            echo "'&status=Priority >";
                                            echo "<div>";
                                            echo '<i class=""></i>'.$loginh['code'].  '</div></a></li>';
                                        }
                                        ?>
                                              
                        
                       
                            
                    </ul>
                    <!-- end dropdown-alerts -->
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                          <i class="fa fa-bell fa-3x"></i>
                    </a>
                    <!-- dropdown alerts-->
                    <ul class="dropdown-menu dropdown-alerts">

                        <li>
                            <a href="tables.php?type=complaint_type&hall=hall&status=Priority">
                                <div>
                                    <i class=""></i>Priority
                                    
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="tables.php?type=complaint_type&hall=hall&status=Pending">
                                <div>
                                    <i class=""></i>Pending
                                    
                                </div>
                            </a>
                        </li>
                        
                        <li>
                            <a href="tables.php?type=complaint_type&hall=hall&status=Processing">
                                <div>
                                    <i class=""></i>Processing
                                    
                                </div>
                            </a>
                        </li>
                        
                        <li>
                            <a href="tables.php?type=complaint_type&hall=hall&status=Completed">
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
                        
                        <li><form action="logout.php" method="post"><center><i class="fa fa-sign-out fa-fw"></i><input type="submit" name="logout" value="Log Out"/></center></form>
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
                            
                                <div>ADMIN</div>
                                
                                
                            </div>
                        </div>
                        <!--end user image section-->
                        <li class="sidebar-search">
                        </li>
                    <li>
                        <a href="tables.php?type=complaint_type&hall=hall&status=Priority"><i class="fa fa-dashboard fa-fw"></i>All Complaints</a>
                    </li>
                    <li>
                        <a href="tables.php?type='Water'&hall=hall&status=Priority"><i class="fa fa-flask fa-fw"></i>Water</a>
                    </li>
                    <li>
                        <a href="tables.php?type='Electrical'&hall=hall&status=Priority&status=Priority"><i class="fa fa-table fa-fw"></i>Electrical</a>
                    </li>
                    <li>
                        <a href="tables.php?type='Civil'&hall=hall&status=Priority"><i class="fa fa-edit fa-fw"></i>Civil</a>
                    </li>
                    <li>
                        <a href="tables.php?type='Sanitary'&hall=hall&status=Priority"><i class="fa fa-edit fa-fw"></i>Sanitory</a>
                    </li>
                    <li>
                        <a href="tables.php?type='Accomodation'&hall=hall&status=Priority"><i class="fa fa-edit fa-fw"></i>Accomodation</a>
                    </li>
                    
                    <li>
                        <a href="tables.php?"><i class="fa fa-bar-chart-o fa-fw"></i> Mess<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="tables.php?type='Mess (food)'&hall=hall&status=Priority">Food</a>
                            </li>
                            <li>
                                <a href="tables.php?type='Mess (service)'&hall=hall&status=Priority">Service</a>
                            </li>
                        </ul>
                        <!-- second-level-items -->
                    </li>
                     
                    <li>
                        <a href="tables.php?type='Other'&hall=hall&status=Priority"><i class="fa fa-edit fa-fw"></i>Other</a>
                    </li>

                    <li>
                        <a href="passtab.php?type=NULL&hall=NULL&status=NULL"><i class="fa fa-edit fa-fw"></i>Hall Passwrods</a>
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
        
<?php


$var = $_GET["type"];
$hal = $_GET["hall"];
$stat = $_GET["status"];

      
?>

        <!--  page-wrapper -->
        <div id="page-wrapper">

            
            <div class="row">
                 <!--  page header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Hall Passwords</h1>
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
                                            <th>Sr.No.</th>
                                            <th>Hall</th>
                                            <th>Password</th>
                                            <th>Action</th>
                                        
                                            
                                        <tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $sql="SELECT * FROM loginh";
                                        $records=mysql_query($sql);
                                    while($login=mysql_fetch_assoc($records)) {
                                        $id = $login['id'];
                                            echo "<tr>";
                                            echo "<td>".$login['id']."</td>";
                                            echo "<td>".$login['username']."</td>";
                                            

                                            echo "<td><form class=\"echo\" action=\"update.php\" method=\"POST\">";
echo "<input type=\"hidden\" name=\"id\" value=\"$id\" required><br>";
echo "<input class=\"echo\" type=\"text\" size=\"20\"  name=\"password\" required><br>";
echo "<center>".$login['password']."</td></center>";
echo "<td><input name=\"Submit\" type=\"submit\" value=\"Change\" class=\"echo2\" />";
echo "</form>";



                                            
                                             

                                            echo "</tr>";
                                        }

                                        ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Sr.No.</th>
                                            <th>Hall</th>
                                            <th>Password</th>
                                            <th>Action</th>
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
