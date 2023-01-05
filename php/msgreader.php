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
    <title>Unread Message | Reader</title>
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
                <div class="col-sm-10 col-md-10 col-lg-10 text-center m-auto mb-1 mt-1">
                    <p class="h6 text-start ">New Message </p>
                    <hr>
                </div>
                <div class="col-sm-12 col-md-8 col-lg-10 m-auto">
                      <?php 
                        $id=$_REQUEST['mesid']; 
                         include("../incls/connection.php");
                         mysqli_query ($conn, "UPDATE message SET status = 'READ' WHERE msgid = '$id' ") or die (mysqli_error()."failed"); 
                         $query="SELECT * FROM message WHERE msgid='".$id."'";
                         $resource=mysqli_query($conn,$query) or die ("An unexpected error occured Please try again!");
                         $result=mysqli_fetch_array($resource);
     
                     ?>
                   <form  method="POST" action="">
                    <table class="table text-center">
                        <tr class="badge bg-secondary col-sm-10 col-md-12 col-lg-12">
                            <th><strong>Message: </strong></th>
                        </tr>
                        <tr class="col-12">
                            <td>
                                <textarea autofocus rows="5" cols="60" required  name="msg" required readonly ><?php echo $result[3] ?></textarea> 
                            </td>
                        </tr>

                     </table>
                     
                 </form>
                 <table class="table text-end">
                        <?php
                            include("../incls/connection.php");
                            $query = "SELECT * FROM message WHERE msgid = '$id' ";
                            $result9 = mysqli_query($conn,$query);
                            while($row = mysqli_fetch_array($result9))
                            {
                            
                            echo " 
                            <tr> 
                                <td  class=\"\" >
                                    <a class=\"btn btn-outline-primary \"  name=\"de\" href=\"msgreply.php?to=".$row[1]."\" >Reply</a>
                                </td></tr>";
                            }  
    
                        ?>

                  </table>
                </div>
            </div> 
            
        </div><br><br>
    </div>
    <?php include("../incls/footer.php");  ?>

    <script type="text/javascript" src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>