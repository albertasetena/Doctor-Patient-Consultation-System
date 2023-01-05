<?php
// Inialize session
session_start();
// Check, if user is already login, then jump to secured page
if (isset($_SESSION['username']) && isset($_SESSION['category'])) 
    {
      switch($_SESSION['category']) {
	  case 1:
		   //header('location: ../forbidden.php');//redirect to user page
     
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
	<title>Patient Dashboard</title>
	<meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css" media="screen">

</head>
<body class="bg-light">
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
				    <a class="nav-link active fw-bold" href="#">Home</a>
				  </li>
				  <li class="nav-item mx-1">
				    <a class="nav-link" href="patienturmsgs.php">Unread Messages <!-- <span class="badge bg-secondary"></span> --></a>
				  </li>
				  <li class="nav-item mx-1 border-left">
				    <a class="nav-link" href="consultants.php">Doctor's Available</a>
				  </li>
				 
				</ul>
			</nav>
		</div>
		<!-- Main-Content -->
		<div class="col-sm-12 col-md-10 col-lg-6 border p-2  m-auto ">
			<div class="col-sm-8 col-md-12 col-lg-8 mx-5 m-auto p-3">
				<div class="col-sm-12 col-md-8 col-lg-10 m-auto">
					<p class="h6 ">Hey  &nbsp<?php echo $_SESSION['username'];?>, </p>
					<p class="h6 fw-normal">
						You are welcome to the best Doctor & Patient consultation system where you can connect and communicate with doctors available here any day and anytime for free. 
					</p>
					<p class="h6 fw-normal">
						Feel at home and do enjoy your moment over here. 
					</p><br>
					<p class="h6 fw-normal">
						Click on the <span class="badge bg-secondary">Doctor's Available </span> tab to connect with available doctors. 
					</p>
				</div>
			</div> 
			
		</div><br><br>
	</div>
	<?php include("../incls/footer.php");  ?>

	<script type="text/javascript" src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>