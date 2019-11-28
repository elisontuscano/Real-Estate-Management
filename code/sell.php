<?php
	include ('dbconnect.php');
	
	
	$name=$_POST['name']; 
	$email=$_POST['email']; 
	$subject=$_POST['subject'];
	$type=$_POST['type']; 
	$location=$_POST['location']; 
	$message=$_POST['message']; 


$query   = "INSERT into sell (name,email,subject,type,location,message) VALUES('" . $name . "','" . $email . "','" . $subject. "','" . $type . "','" . $location . "','" . $message . "')";
$success = $conn->query($query);
 
if (!$success) {
    die("Couldn't enter data: ".$conn->error);
 
}
 
echo "Thank You For Contacting Us <br>";
 header("location: Thank.php") ;
 
$conn->close();
 
?>