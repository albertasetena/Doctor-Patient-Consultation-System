<?php
// Inialize session
session_start();
// Check, if user is already login, then jump to secured page
if (isset($_SESSION['username']) && isset($_SESSION['category'])) {
      switch($_SESSION['category']) {
	  case 1:
		  header('location: php/patientdash.php');//redirect to client page 
        break;
		case 2:
		  header('location: php/consultant.php');//redirect to  page
        break;
		case 3:
		  header('location: php/admindash.php');//redirect to admin
      break;
		
      }
	  }

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	<style type="text/css">
	<title>LOGIN | ODCS</title>
	<style type="text/css">
	.body-wrapper
	{
		height: 500px;
	}
	.login_body
	{
		background: url(img/blackdoctorbackground.jpg);
		background-repeat: no-repeat;
		background-attachment: fixed;
		background-size: cover;
	}

	.img-home-background
	{
		margin-top: 0%;
	}
	
	
</style>

</head>
<body class= "login_body">
<header class="header">
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <div class="container-fluid">
	    <a class="navbar-brand logo fs-3 fw-bold" href="#">DPCS</a>
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse bg" id="navbarSupportedContent">
	      <ul class=" nav navbar-nav m-auto mb-2 mb-lg-0 visibility-hidden">
	         
	      </ul>
	       <ul class=" nav navbar-nav text-end mb-2 mb-lg-0 visibility-hidden">
	       	<li class="nav-item">
              <a class="nav-link" href="#">Home</a>
          </li>
	       <li class="nav-item">
	    			<a class="nav-link" href="php/contactus.php">Contact Us  </a> 
	  			</li> 	   
	      </ul>&nbsp |&nbsp &nbsp &nbsp &nbsp 
	      <ul class="nav justify-content-end nav-tabs">
				  <li class="nav-item">
				    <a class="nav-link active fw-bold" aria-current="page" href="#">Login</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" href="php/signup.php">Sign Up</a>
				  </li>
				  
			</ul>
	    
	    </div>
	  </div>
	</nav>
</header>


<div class="container-fluid ">
	<div class="container-fluid body-wrapper ">
		<div class="row p-5 mt-3">
				<div class="col-sm-10 col-md-6 col-lg-6 my-5 mt-5 opacity-75 text-light p-5 order-sm-0">
					<div class="col-sm-12 col-md-12 mt-5 bg-dark p-5 my-5">
						<p class="h1 mt-4">Doctor - Patient Consultaion System </p>
						<p class="h6">Always at your service </p>
					</div>
				</div>
				<div class="col-md-6 col-lg-6 order-sm-1" >
					<div class=" login-formwrapper col-md-12 col-lg-8 bg-light p-5 mt-1 mx-5">
					  <div class="col-sm-10 col-md-10 col-lg-10 m-auto ">
	              <h4 class="login-heading mb-4 text-center border rounded">Login Here</h4>
	              <!-- Sign In Form -->
	              <form action="php/auth.php" method="POST">
	              	<div class="text-center login-avatar">
								    	<i class="fa fa-sign-in-alt tex-dark fs-2  text-center border rounded-circle p-2" aria-hidden="true"></i>	
								    </div><br>
								    <div class="mb-3 ">
											<div class="col-md-6">
												 <select name="category" id="usertype" required  class="form-select form-select-sm mb-3">
														<option value="1" id="sysuser" >Patient</option>
														<option value="2" id="Personnel" >Consultant</option>
														<option value="3" id="admin" >Admin</option>
		            					</select>
											</div>
										</div>
									<div class="mb-3">
											 <input type="text" class="form-control" placeholder="Username" name="username">
									</div>
	               <div class="mb-3">
											 <input type="password" class="form-control" placeholder="password" name="password">
									</div>
									
	                <div class="form-check mb-3">
	                  <input class="form-check-input" type="checkbox" value="" id="rememberPasswordCheck">
	                  <label class="form-check-label" for="rememberPasswordCheck">
	                    Remember password
	                  </label>
	                </div>

	                <div class="d-grid">
	                  <button class="btn btn-sm btn-primary btn-login text-uppercase fw-bold mb-2" type="submit" name="login">Sign in</button>
	                </div>

	              </form>
	     		</div>
      	</div>
				</div>
		</div>
		
		<div class="container-fluid ps-md-0 ">
  <div class="row g-0">
    <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
    <div class="col-md-8 col-lg-6">
      
    </div>
  </div>
</div>


	</div>
</div>
<?php 
	include("incls/footer.php");
?>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>



</body>
</html>
