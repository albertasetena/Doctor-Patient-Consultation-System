<?php
// Inialize session
session_start();
// Check, if user is already login, then jump to secured page
if (isset($_SESSION['username']) && isset($_SESSION['category'])) 
    {
      switch($_SESSION['category']) {
      case 1:
           header('location: ../forbidden.php');//redirect to user page
     
        break;
        
        }
    }
else
    {
    header('Location: ../index.php');
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Conversation Logs</title>
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>
    <!-- Header -->
    <?php 
        include("../incls/header.php");
      ?>
      <!-- Admin Dashboard -->
    <div class="col-sm-12  bg-light patient-content ">
        <!-- Navbar -->
        <div class="col-sm-10 col-md-10 col-lg-8 m-auto">
            
            <div class="row p-1">
                <div class="col-md-4 col-lg-3 border  text-dark sidebar-container p-3">
                    <div class="col-sm-12 col-md-10 col-lg-12 text-center admin-dash-avator border p-1">
                       
                        <i class="fas fa-tachometer-alt iconsize"></i>
                        <p class="h5 text-center "> <span class="badge bg-dark">Admin Cpanel</span> </p>
                    </div>
                    <!-- Navbar -->
                    <nav class="navbar navbar-light bg-light ">
                        <ul class="nav flex-column nav-justified-start  nav-pills col-lg-12 fs-sm sidebar-container-navbar">
                          <li class="nav-item">
                            <a class="nav-link text-muted" aria-current="page" href="admindash.php"><i class="fas fa-chart-line"></i> Dashboard</a>
                          </li>
                           <li class="nav-item">
                            <a class="nav-link text-muted" href="solvedcases.php"> <i class="fas fa-briefcase"></i> Solved Cases</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link  text-muted" href="#"><i class="fas fa-users"></i> Manage Users</a>
                                <ul class="nav flex-column col-12  mx-4">
                                  <li class="nav-item ">
                                    <a class="nav-link text-muted" href="activateuser.php"><i class="fas fa-user-plus"></i> Activate</a>
                                  </li>
                                  <li class="nav-item ">
                                    <a class="nav-link text-muted" href="deactivateuser.php"><i class="fas fa-user-minus"></i>De-Activate</a>
                                  </li>
                                  <li class="nav-item  border-left">
                                    <a class="nav-link text-muted" href="deleteuser.php"> <i class="fas fa-user-times"></i> Delete</a>
                                  </li>
                                </ul>
                          </li> 
                         
                          <li class="nav-item">
                            <a class="nav-link text-light active" href="#"> <i class="fas fa-inbox"></i> View Conversations</a>
                          </li>
                          
                        </ul>
                    </nav>
                </div>
                <div class="col-md-8 col-lg-9 border">
                       <!-- Main-Content -->
                        <div class="col-sm-12 col-md-10 col-lg-12  p-1  m-auto client-content-wrapper">
                            <div class="col-sm-8 col-md-12 col-lg-12 m-auto ">
                                <div class="col-sm-10 col-md-10 col-lg-12 text-center m-auto mb-3"><br>
                                    <p class="h6 text-start ">Conversation Logs </p>
                                    <hr>
                                </div>
                                <div class="col-sm-12 col-md-8 col-lg-12 m-auto">
                                    <div class="col-sm-8 col-md-12 col-lg-12 m-auto">
                                    <table class="table text-center table-bordered badge text-dark table-scroller">
                                                <tr class="t-head  bg-secondary text-light ">
                                                    <th># </th>
                                                    <th class=" text-start ">Sender</th>
                                                    <th class=" text-start ">Recipient</th>
                                                    <th class=" text-start">Message</th>
                                                    <th class=" text-start">Date sent</th>
                                                    <th class="">Status</th>
                                                    <th class=" ">Action</th>              
                                                </tr>
                                           
                                            
                                            <?php
                                                require_once ('../incls/connection.php');
                                                $sql = "SELECT * FROM message WHERE 1";
                                                $resource = mysqli_query($conn, $sql);
                                                while ($result = mysqli_fetch_array($resource)) 
                                                {
                                                    echo "<tr >";
                                                    echo "<td >".$result[0]."</td>";
                                                    echo "<td >".$result[1]."</td>";
                                                    echo "<td >".$result[2]."</td>";
                                                    echo "<td class=\" text-start\">".$result[3]."</td>";
                                                    echo "<td class=\" text-start\">".$result[4]."</td>";
                                                    echo "<td>".$result[5]."</td>";
                                                    echo "<td><a href=\"reader.php?mesid=".$result[0]."\"><button class=\"btn btn-primary btn-sm\">Delete </button></a></td>";
                                                    echo "</tr>";
                                                }
                                            ?>
                                           
                                        </table>            
                                    </div> 
                                </div> 
                        </div>
                </div>
            </div>
        </div>
     
    </div>
    <?php include("../incls/footer.php");  ?>

    <script type="text/javascript" src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>