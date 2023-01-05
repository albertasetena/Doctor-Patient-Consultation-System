<header class="header">
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	  <div class="container-fluid">
	    <a class="navbar-brand logo fs-3 fw-bold" href="../index.php"><span class="badge bg-light text-dark mx-5 ">DPCS</span> </a>
	  
	    <div class="collapse navbar-collapse bg" id="navbarSupportedContent">

	    
	    </div>
	     <button class="navbar-toggler text-end col-sm-12" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
         </button>
	    <ul class="nav justify-content-end ">
	      	<div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
		      <ul class="navbar-nav">

		      <ul class=" nav navbar-nav text-end mb-2 mb-lg-0  &nbsp">
		          <li class="nav-item">
                    <a class="nav-link" href="../index.php">Home</a>
                  </li>
		        
	  			 <li class="nav-item">
	    			<a class="nav-link" href="../php/contactus.php">Contact Us</a>
	  			 </li> 	      
	  		  </ul>&nbsp |&nbsp &nbsp &nbsp
		        <li class="nav-item dropdown ">
		          <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
		           Hello, <?php echo $_SESSION['username'];?>
		          </a>
		          <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
		            <li><a class="dropdown-item " href="../php/log_out.php">Log-out</a></li>
		        </li>
		      </ul>
    		</div>
		   </ul>
	  </div>
	</nav>
	<div class=" header-banner col-sm-12 col-md-12 col-lg-12">
		
	</div>
</header>