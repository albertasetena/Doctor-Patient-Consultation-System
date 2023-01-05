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
    <title>Profile</title>
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

    <div class="col-sm-12  bg-light ">
        <!-- Navbar -->
        <div class="col-sm-10 col-md-10 col-lg-6 m-auto">
            <nav class="navbar navbar-light bg-light ">
                <ul class="nav nav-tabs text-center col-12 border ">
                  <li class="nav-item ">
                    <a class="nav-link" href="consultant.php">Home</a>
                  </li>
                  <li class="nav-item mx-1">
                    <a class="nav-link active fw-bold" href="#">My Profile</a>
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
                    <!-- <p class="h5 text-start ">My Profile</p> -->
                    <div class="col-sm-12 col-md-10 col-lg-12 text-center">
                        <div class="col-12 ">
                            <i class="fas fa-user-tie fs-1 rounded-circle border p-3"></i>
                        </div>
                    </div>
                </div>
                 <?php 
                        include('../incls/connection.php') ;
                        $query = "SELECT * FROM users WHERE username='{$_SESSION['username']}'" ;
                        $resource=mysqli_query($conn,$query) or die ("An unexpected error occured ");
                        $result=mysqli_fetch_array($resource);
                    ?>
                <div class="col-sm-12 col-md-8 col-lg-10 m-auto border p-5">
                        <form action="" method="POST">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                          <label for="exampleInputEmail1" class="form-label"><strong>Firstname: </strong></label>
                                          <input type="hidden" name="userid" value="<?php echo $result[0] ?>" />
                                          <input type="text" class="form-control" required name="fname" value="<?php echo $result[4] ?>"  >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                          <label for="exampleInputEmail1" class="form-label"><strong>Lastname: </strong></label>
                                          <input type="text" class="form-control" required name="lname" value="<?php echo $result[5] ?>" >
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="username" class="form-label"><strong>Username: </strong></label>
                                            <input type="text" class="form-control" required name="username" value="<?php echo $result[2]?> " readonly >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                         <div class="mb-3">
                                            <label for="username" class="form-label"><strong>Category: </strong> </label>
                                            <input name="Category" type="text"  class="form-control" readonly="" id="textfield" value="Consultant"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 col-8">
                                    <label for="exampleInputEmail1" class="form-label"><strong>Specialty: </strong> </label>
                                    <input type="text" class="form-control" required name="speciality" value="<?php echo $result[7] ?>" required>
                                </div>
                               
                                <button type="submit" class="btn btn-primary" name="addbtn">Update</button>
                            </form> 
                            <?php
                                if(isset($_POST['addbtn']))
                                {
                                    $id=$_POST['userid'];
                                    $fname=$_POST['fname']; 
                                    $lname=$_POST['lname'];
                                    $speciality=$_POST['speciality'];
                                    $query="UPDATE users SET firstname='".$fname."', lastname='".$lname."', speciality='".$speciality."' WHERE userid='".$id."'";
                                    $results = mysqli_query($conn,$query);

                                    ?>

                                     <script type="text/javascript">
                                        alert('Your profile  has been Updated');
                                        window.location=" ../index.php";
                                     </script>

                            <?php

                                } 
                            ?>                   
                </div>
            </div> 
            
        </div><br><br>
    </div><br>
    <?php include("../incls/footer.php");  ?>

    <script type="text/javascript" src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>