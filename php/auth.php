
<?php


	session_start();
	include("../incls/connection.php");
	// Inialize session
	if (isset($_POST['login']))
	{
		$userNname=($_POST['username']);
		$username=($userNname);
		$passWword=($_POST['password']);
		$password=($passWword);
	    $category = ($_POST['category']);
		$sql = "SELECT * FROM users WHERE username='$username' AND status='active' AND password='$password' AND category='$category' ";
		echo"signal0";
		$login=mysqli_query($conn, $sql);

		$count=mysqli_num_rows($login);
		echo"signal1";
		
		if ($count > 0) {
		    switch($category){
			case 1:
			  $_SESSION['username'] = $username;
			  $_SESSION['category'] = $category;
			  header('location: patientdash.php');//redirect to user page
	        break;
			case 2:
			  $_SESSION['username'] = $username;
			  $_SESSION['category'] = $category;
			  header('location: consultant.php');//redirect to Personell page
	        break;
			
			default:
			  $_SESSION['username'] = $username;
			  $_SESSION['category'] = $category;
			header('location: admindash.php');//redirect to admin
	      }

		}
		else
		{
			echo '
			<script type="text/javascript">
				window.alert(\'Sorry, incorrect credential or check user type\');
				window.location=" ../index.php";														
			</script>';
		
		}
		}
	 else
      {
      	echo "Error: 
      	Please contact the administrator
      	";
      }
	?>
