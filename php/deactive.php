<?php
// Inialize session
session_start();
// Check, if user is already login, then jump to secured page
if (isset($_SESSION['username']) && isset($_SESSION['category'])) 
    {
      switch($_SESSION['category']) {
      case 1:
           header('location: ../forbidden.php');//redirect to user page
     
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
    <title>Manage Users | Delete </title>
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>
    <!-- Header -->
    <?php 
        include("../incls/header.php");
      ?>
      <!-- Admin Dashboard -->
    <div class="col-sm-12  bg-light patient-content ">
        <!-- Navbar -->
        <div class="col-sm-10 col-md-10 col-lg-8 m-auto">
            
            <div class="row p-1">
                <div class="col-md-4 col-lg-3 border  text-dark sidebar-container p-3">
                    <div class="col-sm-12 col-md-10 col-lg-12 text-center admin-dash-avator border p-1">
                       <!--  <p class="h5 text-center ">Admin Cpanel</p> -->
                        <i class="fas fa-tachometer-alt iconsize"></i>
                         <p class="h5 text-center "> <span class="badge bg-dark">Admin Cpanel</span> </p>
                    </div>
                    <!-- Navbar -->
                    <nav class="navbar navbar-light bg-light ">
                        <ul class="nav flex-column nav-justified-start  nav-pills col-lg-12 fs-sm sidebar-container-navbar">
                          <li class="nav-item">
                            <a class="nav-link text-muted"  href="admindash.php"><i class="fas fa-chart-line"></i> Dashboard</a>
                          </li>
                           <li class="nav-item">
                            <a class="nav-link text-muted" href="solvedcases.php"> <i class="fas fa-briefcase"></i> Solved Cases</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link active text-light" href="#"><i class="fas fa-users"></i> Manage Users</a>
                                <ul class="nav flex-column col-12  mx-4">
                                  <li class="nav-item ">
                                    <a class="nav-link text-muted" href="activateuser.php"><i class="fas fa-user-plus"></i> Activate</a>
                                  </li>
                                  <li class="nav-item ">
                                    <a class="nav-link text-primary" href="deactivateuser.php"><i class="fas fa-user-minus"></i> De-Activate</a>
                                  </li>
                                  <li class="nav-item  border-left">
                                    <a class="nav-link text-muted " aria-current="page" href="#"> <i class="fas fa-user-times"></i> Delete</a>
                                  </li>
                                </ul>
                          </li>
                           
                          <li class="nav-item">
                            <a class="nav-link text-muted" href="viewconversation.php"> <i class="fas fa-inbox"></i> View Conversations</a>
                          </li>
                          
                        </ul>
                    </nav>
                </div>
                <div class="col-md-8 col-lg-9 border">
                       <!-- Main-Content -->
                        <div class="col-sm-12 col-md-10 col-lg-12  p-2  m-auto client-content-wrapper">
                            <div class="col-sm-8 col-md-12 col-lg-12 m-auto ">
                                <div class="col-sm-10 col-md-10 col-lg-12 text-center m-auto mb-3"><br>
                                    <p class="h6 text-start ">Delete User Account </p>
                                    <hr>
                                </div><br>
                                <div class="col-sm-12 col-md-8 col-lg-10 m-auto">
                                    <div class="col-sm-8 col-md-12 col-lg-10 p-4 m-auto ">
                                    	    <?php
										       	include("../incls/connection.php");
										       	if (isset($_SESSION['username']))
										       	{
										       		$id=$_REQUEST['userid']; 
											 		$id=$_REQUEST['userid']; 
                                                    $query="SELECT * FROM users WHERE userid='".$id."'";
                                                    $resource=mysqli_query($conn,$query) ;
                                                    $result=mysqli_fetch_array($resource);
										       	}
										       
	 										?>
                                       <form  method="post" action="#">
                                       	 	<input type="hidden" name="uid" value="<?php echo $result[0] ?>"  />
											<input type="hidden" name="uname" value="<?php echo $result[2] ?>"  />
	                                       	<div class="row">
	                                       		 <div class="mb-3 col-6">
	                                       			 <label class=" fw-bold" for="uid">User ID:</label>
								                  	 <input class="form-control" type="text" value="<?php echo $result[0] ?>" id="id" name="id" readonly>
							                	</div>
							                	<div class="mb-3 col-6">
	                                       			 <label class=" fw-bold" for="uname">Username:</label>
								                  	 <input class="form-control" type="text" value="<?php echo $result[2] ?>" id="uname" name="uname"readonly>
							                	</div> 
	                                       	</div>
	                                       	<div class="mb-3 col-12 text-end">
	                                       		<button class="btn btn-outline-primary" name="de">Deactivate</button>  
							               	</div> 									        
										</form>   
										<?php
										// Check and Delete the user-account using the User id
										   if (isset($_POST['de']))
										   { 
										  		include("../incls/connection.php");
											    $id=$_POST['id'];
												$query="UPDATE users SET status='inactive' WHERE userid='".$id."'";

												if($query)
												{
													echo '<script type="text/javascript">
													window.alert(\'User account deleted Successfully\');
													window.location=" deleteuser.php";														
												</script>';

												}
												 if(!mysqli_query($conn,$query))
												  {
												  	die ("An error occured, Please try again!");
												  }
											  
										?>
												
											<?php
											}

											?>	
										  
                                    </div> 
                                </div> 
                            </div>  
                        </div><br><br>
                </div>
            </div>
        </div>
     
    </div>
    <?php include("../incls/footer.php");  ?>

    <script type="text/javascript" src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>