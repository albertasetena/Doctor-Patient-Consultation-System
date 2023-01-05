<?php
// Inialize session
session_start();
// Check, if user is already login, then jump to secured page
if (isset($_SESSION['username']) && isset($_SESSION['category'])) 
    {
      switch($_SESSION['category']) {
	  case 1:
		   // header('location: ../forbidden.php');//redirect to user page
      echo "Client";
        break;
		
        }
    }
else
    {
    header('Location: ../index.php');
    }
?>

<!DOCTYPE html>
<html dir="ltr" lang="en-US"><head>
    <title>Patient List</title>
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css" media="screen">

</head>
<body>
<div id="main">

<nav class="nav clearfix">
    <ul class="hmenu"><li><a href="#" >Home</a></li><li><li><a href="log_out.php"><img src=../images/quit_1.png></a></l</ul> 
    </nav>
<div class="sheet clearfix">
            <div class="layout-wrapper clearfix">
                <div class="content-layout">
                    <div class="content-layout-row">
                    <div class="layout-cell sidebar1 clearfix">
					<div class="vmenublock clearfix">
                      <div class="vmenublockcontent">
                       <ul class="vmenu"><li><a href="#" class="active">Available Consultants </a></li><li><a href="#">Submit Querry </a></li><li><a href="client_received.php">Unread Messages</a></l</ul>
                
                      </div>
                    </div>
				   </div>
                <div align="center">
              <table width="100%"  cellspacing="1">
                  <tr> 
                        <td width="358" height="20" valign="middle" class="bg-primary"> 
                         <div align="center"><b><font color="#FFFFFF">Welcome &nbsp<?php echo $_SESSION['username'];?> </font></b></div>
                        </td>
                  </tr> 
		
               </table>	 
            <?php 
	 	           include("../incls/connection.php");	
	               $query="SELECT * FROM users WHERE category ='1' and status='active'";
		
        		  $resource=mysqli_query($conn,$query);
        		  echo "
        		<table align=\"center\" border=\"0\" width=\"70%\">
        		<tr>
        		<td><b>Names</b></td> </td><td><b>Action</b></td></tr> ";
                while($result=mysqli_fetch_array($resource))
                	{ 
                	echo "<tr><td>".$result[4]."&nbsp".$result[5]."</td><td>
                	<a href=\"reader.php?mesid=".$result[0]."\"><button class=\"btn btn-primary btn-sm\">Connect</button></a>
                	</td></tr>";
                	} 
                echo "</table>";
            ?>
	
         </div>
                    </div>
                </div>
            </div>
    </div>
	<?php include("../incls/footer.php") ?>

</div>


</body></html>