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
	<title>Patient | Case Status</title>
	<meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css" media="screen">

</head>
<body>
	<!-- Header -->
	<?php 
		include("../incls/header.php");
	  ?>

	<div class="col-sm-12  bg-light patient-content">
		<!-- Navbar -->
		<div class="col-sm-10 col-md-10 col-lg-6 m-auto">
			<nav class="navbar navbar-light bg-light ">
			  	<ul class="nav nav-tabs text-center col-12 border ">
				  <li class="nav-item ">
				    <a class="nav-link" href="patientdash.php">Home</a>
				  </li>
				  <li class="nav-item mx-1">
				    <a class="nav-link active fw-bold" href="#"> Case Status <!-- <span class="badge bg-secondary">4</span> --></a>
				  </li>
				  <li class="nav-item mx-1 border-left">
				    <a class="nav-link" href="consultants.php">Doctor's Available</a>
				  </li>
				  
				
				</ul>
			</nav>
		</div>
		<!-- Main-Content -->
		<div class="col-sm-12 col-md-10 col-lg-6 border p-2  m-auto client-content-wrapper">
            <div class="col-sm-8 col-md-12 col-lg-12 m-auto ">
                <div class="col-sm-10 col-md-10 col-lg-10 text-center m-auto mb-0"><br>
                    <p class="h6 text-start ">Change Case Status </p>
                    <hr>
                </div>
                <div class="col-sm-12 col-md-8 col-lg-10 m-auto">
                      <?php
                        include("../incls/connection.php"); 
                        $msgid=$_REQUEST['msgid']; 

                        $query="SELECT * FROM message  WHERE msgid='".$msgid."'";
                        $resource = mysqli_query($conn,$query);
                        
                        $result = mysqli_fetch_array($resource);
                        
                     ?>
                   
                 <form  method="POST" action="#" class="col-12">
                    <div class="col-sm-12">
                        <div class="row mb-3">
                            <div class="col-sm-4">
                                <label class="fw-bold">Consultant's Name:: </label>
                            </div>

                            <div class="col-sm-8">
                                <input name="sender" type="text" class="form-control" id="textfield" value="<?php echo $msgid ?>" readonly />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-4">
                                <label class="fw-bold">Your Name: </label>
                            </div>
                              <div class="col-sm-8">
                                <input name="rec" type="text" class="form-control" id="textfield" value= "<?php echo $_SESSION['username'];?>" readonly />
                            </div>
                        </div>
                        <div class="mb-3 col-12 text-end">
                            
                            <button class="btn btn-outline-success" name="casesolved">Case Resolved</button>  
                              
                            <br>
                      </div>  
                    </div>      
                   
                     
                 </form>


                <?php

              
                  if (isset($_POST['casesolved']))
                  {
                    $receptor=$_POST['sender'];
                    $status='SOLVED';
                    $sql = "INSERT INTO cases(client,consultant,status) VALUES('{$_SESSION['username']}','$receptor','$status')";
                     
                    $results = mysqli_query($conn,$sql);
                   

                     if($results)
                     {
                        echo "Solved";
                     }
                ?>
                   <!--  <script type="text/javascript">
                        alert('Case solved successfully');
                        window.location=" ../index.php";
                    </script> -->
            <?php
                }

            ?>
                </div>
            </div> 
            
        </div><br><br>
	</div>
	<?php include("../incls/footer.php");  ?>

	<script type="text/javascript" src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>
