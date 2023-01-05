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
    <title>Admin Dashbaord</title>
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
                             
                        <ul class="nav flex-column nav-justified-start  nav-pills col-lg-12 fs-sm sidebar-container-navbar" id="navbarSupportedContent">
                          <li class="nav-item">
                            <a class="nav-link active text-light" aria-current="page" href="#"><i class="fas fa-chart-line"></i> Dashboard</a>
                          </li>
                           <li class="nav-item">
                            <a class="nav-link text-muted" href="solvedcases.php"> <i class="fas fa-briefcase"></i> Solved Cases</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link text-muted" href="#"><i class="fas fa-users"></i> Manage Users</a>
                                <ul class="nav flex-column col-12  mx-4">
                                  <li class="nav-item ">
                                    <a class="nav-link text-muted" href="activateuser.php"><i class="fas fa-user-plus"></i> Activate</a>
                                  </li>
                                  <li class="nav-item ">
                                    <a class="nav-link text-muted" href="deactivateuser.php"><i class="fas fa-user-minus"></i> De-Activate</a>
                                  </li>
                                  <li class="nav-item  border-left">
                                    <a class="nav-link text-muted" href="deleteuser.php"> <i class="fas fa-user-times"></i> Delete</a>
                                  </li>
                                </ul>
                          </li>
                        
                          <li class="nav-item">
                            <a class="nav-link text-muted" href="viewconversation.php"> <i class="fas fa-inbox"></i> View Conversations</a>
                          </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-md-8 col-lg-9 border">
                       <!-- Main-Content -->
                        <div class="col-sm-12 col-md-10 col-lg-12  p-2  m-auto client-content-wrapper">
                            <div class="col-sm-8 col-md-12 col-lg-12 m-auto ">
                                <div class="col-sm-10 col-md-10 col-lg-12 text-center m-auto mb-3"><br>
                                    <p class="h6 text-start ">System Summary </p>
                                    <hr>
                                </div>
                                <div class="col-sm-12 col-md-8 col-lg-10 m-auto">
                                   <div class="row">
                                        <div class="col-md-4 col-lg-4 p-1 ">
                                            <div class="col-md-12 col-lg-12 badge bg-primary   p-2 text-light" >
                                                <div class="col-md-12 col-lg-12 text-start">
                                                    <i class="fa fa-briefcase fs-4" aria-hidden="true"></i>

                                                </div>
                                                <?php
                                                               require_once ("connection.php");
                                                               $sqli = "SELECT * FROM cases ORDER BY id DESC LIMIT 1";
                                                                    $result = mysqli_query($conn,$sqli);
                                                                if(mysqli_num_rows($result) > 0)
                                                                {
                                                                    foreach($result as $row)
                                                                    {

                                                            ?>
                                                <div class="col-md-12 ">
                                                    <p class="id-item"><?php echo $row['id']; ?> </p>
                                                    <?php
                                                    
                                                    }

                                                }

                                                ?>
                                                    <p>Solved issues</p>
                                                </div>
                                                
                                                <a class="text-decoration-none " href="solvedcases.php">
                                                    <span class="badge bg-light text-dark p-2 col-12">View</span>
                                                </a>
                                                   
                                               
                                            </div>
                                        </div>
                                        <div class="col-md-5 col-lg-4 p-1 ">
                                            <div class="col-md-12 col-lg-12 bg-warning badge p-2 text-light" >
                                                <div class="col-md-12 text-start">
                                                    <i class="fas fa-users fs-4" aria-hidden="true"></i>
                                                </div>
                                                <?php
                                                               require_once ("connection.php");
                                                               $sqli = "SELECT * FROM users ORDER BY userid DESC LIMIT 1";
                                                                    $result = mysqli_query($conn,$sqli);
                                                                if(mysqli_num_rows($result) > 0)
                                                                {
                                                                    foreach($result as $row)
                                                                    {

                                                            ?>
                                                <div class="col-md-12 bg ">
                                                    <p class="id-item"><?php echo $row['userid']; ?> </p>
                                                    <?php
                                                    
                                                    }

                                                }

                                                ?>
                                                    <p>Total Users</p>
                                                </div>
                                                <a class="text-decoration-none " href="deleteuser.php">
                                                    <span class="badge bg-light text-dark p-2 col-12">View</span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-lg-4 p-1 ">
                                            <div class="col-md-12 col-lg-12 bg-success badge  p-2 text-light" >
                                                <div class="col-md-12 col-lg-12 text-start">
                                                    <i class="fas fa-inbox fs-4" aria-hidden="true"></i>
                                                </div>
                                                <?php
                                                               require_once ("connection.php");
                                                               $sqli = "SELECT * FROM message ORDER BY msgid DESC LIMIT 1";
                                                                    $result = mysqli_query($conn,$sqli);
                                                                if(mysqli_num_rows($result) > 0)
                                                                {
                                                                    foreach($result as $row)
                                                                    {
                                                    
                                                            ?>
                                                <div class="col-md-12 ">
                                                    <p class="id-item"><?php echo $row['msgid']; ?> </p>
                                                    <?php
                                                    
                                                    }

                                                }

                                                ?>
                                                    <p>Conversation Logs</p>
                                                </div>
                                                 <a class="text-decoration-none " href="viewconversation.php">
                                                    <span class="badge bg-light text-dark p-2 col-12">View</span>
                                                </a>
                                            </div>
                                        </div>
                                        
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