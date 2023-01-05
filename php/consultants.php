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
	<title>Consultants </title>
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

	<div class="col-sm-12  bg-light ">
		<!-- Navbar -->
		<div class="col-sm-10 col-md-10 col-lg-6 m-auto">
			<nav class="navbar navbar-light bg-light ">
			  	<ul class="nav nav-tabs text-center col-12 border ">
				  <li class="nav-item ">
				    <a class="nav-link" href="patientdash.php">Home</a>
				  </li>
				  <li class="nav-item mx-1">
				    <a class="nav-link " href="patienturmsgs.php">Unread Messages <!-- <span class="badge bg-secondary">4</span> --></a>
				  </li>
				  <li class="nav-item mx-1 border-left">
				    <a class="nav-link active fw-bold" href="#">Doctor's Available</a>
				  </li>
				</ul>
			</nav>
		</div>
		<!-- Main-Content -->
		<div class="col-sm-12 col-md-10 col-lg-6 border p-2  m-auto client-content-wrapper">
			<div class="col-sm-8 col-md-12 col-lg-12 m-auto ">
				<div class="col-sm-10 col-md-10 col-lg-10 text-center m-auto mb-3"><br>
					<p class="h5 text-start ">Doctors Available</p>
				</div>
				<div class="col-sm-12 col-md-8 col-lg-10 m-auto">
					<?php 	  
			 	        require_once("../incls/connection.php");	
			            $query="SELECT * FROM users WHERE category ='2' and status='active' and speciality<>'N/A' ";
				
		        		$resource=mysqli_query($conn,$query);
		        		  echo "
		        		<table class=\"table border table-bordered \" align=\"center\" border=\"0\" width=\"70%\">
		        		<tr  class=\" bg-secondary text-light\">
		        		<td><b>Names</b></td> <td><b>Speciality.</b></td></td><td><b>Action</b></td></tr>";
		                while($result=mysqli_fetch_array($resource))
		                	{ 
		                	echo "<tr><td>".$result[4]."&nbsp".$result[5]."</td><td>".$result[7]."</td><td>
        					<a href=\"p_messenger.php?userid=".$result[0]."\"><button class=\"btn btn-primary btn-sm\">Connect</button></a>
		                	</td></tr>";
		                	} 
		                echo "</table>";
		            ?>
				</div>
			</div> 
			
		</div><br><br>
	</div>
	<?php include("../incls/footer.php");  ?>

	<script type="text/javascript" src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>