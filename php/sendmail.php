<? php
$Name=$_POST['name'];
$Email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];
$headers = 'From:'. $Email . "rn";
$headers .= 'Cc:'. $Email . "rn"; 
$message = wordwrap($message, 70);
$to = "asetenaalbert@gmail.com";

mail($to,$subject,$message,$headers);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

	<meta HTTP-EQUIV="REFRESH" content="0; url=../index.php">
</head>

edback";