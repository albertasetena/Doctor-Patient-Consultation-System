

<!DOCTYPE html>
<html>
<head>
	  <meta charset="utf-8">
	  <title>Contact Us | DPCS</title>
	  <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">
	  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style type="text/css">
      @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css");
     body
     {
      background-color: #fff;
     }
    </style>
</head>
<body >
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
                <div class="collapse navbar-collapse" id="navbarNavDarkDropdown navbarSupportedContent">
                  <ul class="navbar-nav">
                  <ul class=" nav navbar-nav text-end mb-2 mb-lg-0  &nbsp">
                      <li class="nav-item">
                        <a class="nav-link" href="../index.php">Home</a>
                      </li>
                    
                      <li class="nav-item">
                          <a class="nav-link" href="#">Contact Us &nbsp &nbsp</a>
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
       <div class="col-sm-12 col-md-12 col-lg-12 text-center p-5 contactus-banner">
         <div class="col-12 p-3">
            <p class="h1 text-light mb-0 fw-bold">Contact us</p>
            <p class="h5 text-light mt-0">We'd love to hear from you</p>
          </div>
        </div>
    </header>
	<div class="col-sm-12   patient-content">
		  <div class="col-sm-12 col-md-12 col-lg-10 m-auto">
        <div class="row">
          <div class="col-sm-12 col-md-6 col-lg-6  m-auto p-5">
            <div class="col-sm-12 col-md-12 col-lg-12 m-auto bg-light p-4">         
              <p class="h3 col-sm-12 mb-2 col-lg-11  col-md-12 text-start ">Want to send a mail? We are here to assist you</p>
              <form action="https://formsubmit.co/4aab8a4236ba31a9df2a98fff6518313" method="POST" class="col-md-12 m-auto border  p-4 fs-sm">
                  <div class="mb-3">
                    <input type="text" class="form-control" id="validationDefault01"  name="name" placeholder="First & Last Name*" required>
                  </div>
                  <div class="mb-3">
                    <input type="email" class="form-control" id="validationDefault01" name="email" placeholder="Email Address*"  required>
                  </div>
                  <div class="mb-3">
                    <input type="text" class="form-control" id="validationDefault01" name="subject" placeholder="Subject*" required>
                  </div>
                  <div class="mb-3">
                    <label >Message:*</label>
                    <textarea  autofocus rows="5" cols="60" class="form-control text-muted" name="message" id="validationDefault01" required>
                      
                    </textarea>
                  </div>
                  <div class="mb-3">
                   <button class="btn btn-outline-primary " >Send </button>
                  </div>
              </form>
           </div>
          </div>
          
          <div class="col-sm-12 col-md-6 col-lg-6 p-5">
            <div class="col-sm-12 col-md-12 col-lg-12 m-auto  p-2">         
              <p class="h2 text-start mb-2 col-9">Contact information</p><br>
              <span >
                Thank you for your interest to  contact us. Kindly complete the online form, for all enquiries and will get in touch with you shortly. 
                You can also contact us using the <span class="badge bg-secondary">chatbot</span> or the  <span class="badge bg-secondary">details below</span>.
              </span>
              <div class="col-8 mt-5">
                <div class="row">
                  <p class="h5">Help Lines</p>
                  <hr>
                  <div class="col-6">
                    <p class="h6">Customer</p>
                    <span>+233 30 111 2330</span>
                  </div>
                  <div class="col-6">
                      <p class="h6">Ambulance</p>
                      <span>+233 50 111 2000</span>
                  </div>
                </div>

              </div>
               <div class="col-lg-4 col-sm-12">
                   <div class="row mt-5  m-auto ">
                      <p class="h6">Contect with us</p>
                      <hr>
                      <div class="col-4">
                        <span class="fa-icons">
                          <a href="#">
                            <i class="fa fa-facebook fs-1"></i>
                          </a>
                        </span>
                      </div>
                      <div class="col-4">
                        <span class="fa-icons">
                           <a href="#"><i class="fa fa-twitter  fs-1" ></i></i></a>
                        </span>
                      </div>
                      <div class="col-4">
                          <span class="fa-icons">
                            <a href="#">
                              <i class="fa fa-instagram fs-1 fa-icons" style=" color:red"></i>
                            </a>
                        </span>
                      </div>
                </div>
            </div>
                </div>
               
              
           </div>
          </div>
        </div>  
      </div>
	</div>
	<?php  include("../incls/footer.php");  ?>

	<script type="text/javascript" src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>