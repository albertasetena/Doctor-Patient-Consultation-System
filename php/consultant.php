<?php
// Inialize session
session_start();
// Check, if user is already login, then jump to secured page
if (isset($_SESSION['username']) && isset($_SESSION['category'])) 
    {
      switch($_SESSION['category']) {
      case 1:
           // header('location: ../forbidden.php');//redirect to user page
     
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
    <title>Doctors Dashboard</title>
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css" media="screen">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>
    <!-- Header -->
    <?php 
        include("../incls/header.php");
      ?>

    <div class="col-sm-12  bg-light patient-content ">
        <!-- Navbar -->
        <div class="col-sm-10 col-md-10 col-lg-6 m-auto">
            <nav class="navbar navbar-light bg-light ">
                <ul class="nav nav-tabs text-center col-12 border ">
                  <li class="nav-item ">
                    <a class="nav-link active fw-bold" href="#">Home</a>
                  </li>
                  <li class="nav-item mx-1">
                    <a class="nav-link " href="profile.php">My Profile </a>
                  </li>
                  <li class="nav-item mx-1">
                    <a class="nav-link " href="urmgs.php">Unread Messages <!-- <span class="badge bg-secondary">4</span> --></a>
                  </li>
                  <li class="nav-item mx-1 border-left">
                    <a class="nav-link " href="assistpatient.php">Send Assistance</a>
                  </li>
                </ul>
            </nav>
        </div>
        <!-- Main-Content -->
        <div class="col-sm-12 col-md-10 col-lg-6 border p-2  m-auto client-content-wrapper">
            <div class="col-sm-8 col-md-12 col-lg-12 m-auto ">
                <div class="col-sm-10 col-md-10 col-lg-10 text-center m-auto mb-3"><br>
                    <p class="h6 text-start ">Doctors Dashboard </p>
                    <hr>
                </div><br>
                <div class="col-sm-12 col-md-8 col-lg-8 m-auto">
                   <div class="row">
                       <div class="col-sm-4 col-md-4 col-lg-4 text-center">
                           <div class="col-sm-6 col-md-12 col-lg-12">
                                <i class="fas fa-user-tie fs-1"></i>
                            </div>
                            <label> <a href="profile.php">My Profile</a> </label>
                       </div>
                       <div class="col-sm-4 col-md-4 col-lg-4 text-center">
                           <div class="col-sm-6 col-md-12 col-lg-12">
                                <div class="col-sm-6 col-md-12 col-lg-12">
                                    <i class="fas fa-inbox fs-1"></i>
                                </div>
                           
                                <label><a href="urmgs.php">Unread Messages</a></label>
                            </div>
                       </div>
                       <div class="col-sm-4 col-md-4 col-lg-4 text-center">
                           <div class="col-sm-6 col-md-12 col-lg-12">
                                 <div class="col-sm-6 col-md-12 col-lg-12">
                                    <i class="fas fa-user-tie fs-1"></i>
                                </div>                       
                                <label><a href="assistpatient.php">Assist Patience</a></label>

                            </div>
                       </div>
                   </div>
                </div>
            </div> 
            
        </div><br><br>
    </div>
    <?php include("../incls/footer.php");  ?>

    <script type="text/javascript" src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>