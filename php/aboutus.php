

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>About Us | DCPS </title>
	<meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css" media="screen">

</head>
<body class="bg-light">
	<!-- Header -->
	<header class="header">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <div class="container-fluid">
            <a class="navbar-brand logo fs-3 fw-bold" href="../index.php"><span class="badge bg-light text-dark mx-5 ">DPCS</span> </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse bg" id="navbarSupportedContent">
              <ul class=" nav navbar-nav m-auto mb-2 mb-lg-0 visibility-hidden">
                
              </ul>
            
            </div>
            <ul class="nav justify-content-end ">
                <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                  <ul class="navbar-nav">
                  <ul class=" nav navbar-nav text-end mb-2 mb-lg-0  &nbsp">
                  	<li class="nav-item">
                        <a class="nav-link" href="../index.php">Home</a>
                     </li>
                      <li class="nav-item">
                          <a class="nav-link" href="#">About Us</a>
                      </li><li class="nav-item">
                          <a class="nav-link" href="contactus.php">Contact Us &nbsp &nbsp</a>
                      </li>        
                  </ul>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        
                        <?php 
                        if(isset($_SESSION['username'])) 
                        {
                        	echo "Hello". $_SESSION['username'];
                        }
                        ?>
                      </a>
                      <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                        <li><a class="dropdown-item " href="../php/log_out.php">Log-out</a></li>
                    </li>
                  </ul>
                </div>
               </ul>
          </div>
        </nav>
        <hr class="mt-1 mb-1">
       	<div class="col-sm-12 col-md-12 col-lg-12 text-center p-5 aboutus-banner">
       		<p class="h1 text-light p-2">About Us</p>

       	</div>
    </header>
		

	<div class="col-sm-12  bg-light patient-content ">
			

	</div>
	<?php  include("../incls/footer.php");  ?>

	<script type="text/javascript" src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>