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
    <title>Messenger</title>
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
                    <a class="nav-link " href="consultant.php">Home</a>
                  </li>
                  <li class="nav-item mx-1">
                    <a class="nav-link " href="profile.php">My Profile </a>
                  </li>
                  <li class="nav-item mx-1">
                    <a class="nav-link active fw-bold" href="urmgs.php">Unread Messages <!-- <span class="badge bg-secondary">4</span> --></a>
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
                <div class="col-sm-10 col-md-10 col-lg-10 text-center m-auto mb-0">
                    <p class="h6 text-start "> Messenger </p>
                    <hr>
                </div>
                <div class="col-sm-12 col-md-8 col-lg-10 m-auto ">
                     <?php 
                        $gap=str_repeat('&nbsp;', 2);
                        $id=$_REQUEST['userid']; 
                         include("../incls/connection.php");    
                         $query="SELECT * FROM users WHERE userid='".$id."'";
                         $resource=mysqli_query($conn, $query) or die ("An unexpected error occured Please try again!");
                         $result=mysqli_fetch_array($resource);
                        ?>
                        <div class="col-sm-12 col-md-12 col-lg-12 text-center">
                            <form id="form1" class=" p-3 col-12" method="POST" action="#">
                             <div class="row">
                                 <div class="col-4 text-end">
                                     <strong>Consultant's Name: </strong>
                                 </div>
                                 <div class="col-7">
                                       <input type="hidden" name="id" value="<?php echo $result[0] ?>"  />
                                        <input type="hidden" name="uname" value="<?php echo $result[2] ?>"  />
                                      <input name="name" type="text" class="form-control col-12" id="textfield" value="<?php echo $result[4].$gap.$result[5] ?>" readonly />
                                 </div>
                             </div><br>
                              <div class="row">
                                 <div class="col-4 text-end">
                                     <strong>Message : </strong>
                                 </div>
                                 <div class="col-7">
                                     <textarea class="form-control" autofocus rows="5" cols="60" required  name="msg" required ></textarea> 
                                 </div>
                             </div> 
                             <div class="mb-3 mt-4 text-end col-11">
                                <button class="btn btn-outline-primary btn-login text-uppercase  mb-2" type="submit" name="sender">Send</button>
                             </div>
                        </form>
                        </div>
                        
                     <?php
                        include("../incls/connection.php");
                        if (isset($_POST['sender']))
                        {
                        $receptor=$_POST['uname'];
                        $status='UNREAD';
                        $message=$_POST['msg'];
                        $sql = "INSERT INTO message(sender,recipient,msg,status) VALUES ('{$_SESSION['username']}','$receptor','$message','$status')";

                        $query=mysqli_query($conn,$sql);
                       
                        ?>
                        <script type="text/javascript">
                            alert('Your Message has been sent');
                            window.location=" ../index.php";
                            </script>

                        <?php
                        }
                        else
                        {
                            echo"Sorry";
                              
                        }

                        ?>
         </div>
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