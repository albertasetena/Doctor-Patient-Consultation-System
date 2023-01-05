
<!DOCTYPE html>
<html dir="ltr" lang="en-US"><head>
    <title>:: Login ::</title>
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

  

</head>
<body>
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
                          <a class="nav-link" href="#">Contact Us &nbsp &nbsp</a>
                      </li>        
                  </ul>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                       
                      </a>
                      <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                        <li><a class="dropdown-item " href="../php/log_out.php">Log-out</a></li>
                    </li>
                  </ul>
                </div>
               </ul>
          </div>
        </nav>
       
    </header>
   
      <div class="text-center p-5 mt-5">
        <span class="badge bg-primary text-light mt-5 opacity-3 border border-secondary p-3">
         <h3 class="p-5">  Logged out Succesfully... </h3>
         </span><br><br>
        <p align="center"><a href="../index.php" class="btn btn-outline-dark">Login Here</a></p>
       <p> &nbsp </p>
       <p> &nbsp </p>
    </div>
	<?php include("../incls/footer.php") ?>

</body>

</html>