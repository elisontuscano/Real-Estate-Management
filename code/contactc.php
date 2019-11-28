<?php
	include ('dbconnect.php');
	
	
	$name=$_POST['name']; 
	$email=$_POST['email']; 
	$subject=$_POST['subject'];
	$message=$_POST['message']; 


$query   = "INSERT into contactc (name,email,subject,message) VALUES('" . $name . "','" . $email . "','" . $subject. "','" . $message . "')";
$success = $conn->query($query);
 
if (!$success) {
    die("Couldn't enter data: ".$conn->error);
 
}
 
 header("location: Thank.php") ;
//echo "Thank You For Contacting Us <br>";
 
$conn->close();
 
?>
