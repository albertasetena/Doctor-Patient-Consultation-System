

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
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
		background: url(../img/blackdoctorbackground.jpg);
		background-repeat: no-repeat;
		background-attachment: fixed;
		background-size: cover;
	}

	.img-home-background
	{
		margin-top: 0%;
	}
	
</style>
<script type="text/javascript">
$(document).ready(function() {
	$("#username").keyup(function (e) {
	
		//removes spaces from username
		$(this).val($(this).val().replace(/\s/g, ''));
		
		var username = $(this).val();
		if(username.length < 1){$("#user-result").html('');return;}
		
		if(username.length >= 1){
			$("#user-result").html('<img src="images/loader.gif" />');
			$.post('check-uname.php', {'username':username}, function(data) {
			  $("#user-result").html(data);
			});
		}
	});	
});
</script>
</head>
<body class= "login_body">
<header class="header">
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <div class="container-fluid">
	    <a class="navbar-brand logo fs-3 fw-bold" href="../index.php">ODCS</a>
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
	    		<a class="nav-link" href="contactus.php">Contact Us</a> 
	  		</li>    
	      </ul>&nbsp |&nbsp &nbsp &nbsp
	      <ul class="nav justify-content-end nav-tabs">
				  <li class="nav-item">
				    <a class="nav-link " aria-current="page" href="../index.php">Login</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link active fw-bold" href="#">Sign Up</a>
				  </li>
				  
			</ul>
	    
	    </div>
	  </div>
	</nav>
</header>


<div class="container-fluid ">
	<div class="container-fluid body-wrapper ">
			<div class="row p-5 mt-3">
				<div class="col-sm-12 col-md-6 col-lg-6 my-5 mt-5 order-0 opacity-75 text-light p-5">
					<div class="col-md-12 mt-5 bg-dark p-5 my-5">
						<p class="h1 mt-4">Doctor-Patient Consultaion System  </p>
						<p class="h6">Always at your service </p>
					</div>
				</div>
				<div class="col-sm-12 col-md-6 col-lg-6 .order-sm-first" >
					<div class="col-sm-12 col-md-10 col-lg-9  bg-light p-2 mt-1 m-auto">
					  <div class="col-sm-12 col-md-12 col-lg-12 m-auto p-3">
			              <h4 class="login-heading mb-4 text-center border rounded">Create Account</h4>
			              <!-- Sign Up Form -->
			              <form class="col-sm-12 col-md-12 col-lg-12" method="POST" action="#">

											<?php
												require_once('../incls/connection.php');

												if (isset($_POST['create']))
												{
													$firstname=$_POST['fname'];
													$lastname=$_POST['lname'];
													$username=$_POST['username'];
													$category=$_POST['category'];
													$password=$_POST['confirm_password'];
													$encrypted = md5($password); // Encrypting pssword using md5 algo
													$sql = "INSERT INTO users(category,username,password,firstname,lastname,status,speciality) VALUES('$category','$username','$encrypted','$firstname','$lastname','inactive','N/A')";
													$query=mysqli_query($conn,$sql);
													
												?>
												<script type="text/javascript">
													alert('User registered Successfully.Please login now to Proceed ');
													window.location="../index.php";
												</script>

											<?php
												}
											?>	
			              		<div class="text-center login-avatar">
									<i class="fa fa-user-plus tex-dark fs-2  text-center border rounded-circle p-2" aria-hidden="true"></i>	
								</div><br>
				              	<div class="container">
				              		<div class="row">
				              				<div class="col-md-6">
					              					<div class="mb-3">
																		 <input type="text" class="form-control" placeholder="Firstname" name="fname">
																	</div>
				              				</div>
				              				<div class="col-md-6">
																	<div class="mb-3">
																		 <input type="text" class="form-control" placeholder="Lastname" name="lname">
																	</div>
				              				</div>
				              		</div>
				              	</div>
				              	<div class="container">
				              		<div class="row">
				              			<div class="col-md-6">
					              			<div class="mb-3">
															 	<input type="text" class="form-control"  id="username" autocomplete="off" placeholder="Username" name="username">
															</div>
				              			</div>
					              		<div class="col-md-6">
					              			<div class="mb-3">
												<select name="category" id="usertype" required  class="form-select form-select-sm mb-3">
													<option selected >User type</option>
													<option value="1" id="sysuser"  >Patient</option>
													<option value="2" id="Personnel" >Consultant</option>			
						            			</select>
											</div>
					              		</div>
				              		</div>
			              		</div>	
				              	<div class="container">
				              		<div class="row">
				              			<div class="col-md-6">
				              				<div class="mb-3">
				              					<input type="password" class="form-control" placeholder="password" name="pwd">
															</div>
				              			</div>
				              			<div class="col-md-6">
				              					<div class="mb-3">
													<input type="password" class="form-control" placeholder="Confirm password" name="confirm_password">
												</div>
				              			</div>		
				              		</div>		
				              	</div>
				              	<div class="col-sm-11 col-md-11 col-lg-11 m-auto" > 								
				                  <label class="form-check-label" for="agree">
				                    Do you agree to our policy
				                  </label>
				                  <input type="checkbox" class="checkbox " id="agree" name="agree" required />
				                  <div class="d-grid mt-3">
			                  		<button class="btn btn-sm btn-primary btn-login text-uppercase fw-bold mb-2" type="submit" name="create">Sign Up</button>
			               		</div>
			                	</div>
			                		
			              	</form>
			              </div>
	     			</div>
      			</div>
			</div>
		</div>
		
			
	</div>
</div>
<?php 
	include("../incls/footer.php");
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</body>
</html>
