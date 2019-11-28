<?php
	include ('dbconnect.php');
	
	
	$first_name=$_POST['first_name']; 
	$last_name=$_POST['last_name']; 
	$username=$_POST['username'];
	$email=$_POST['email']; 
	$password=$_POST['password'];
	
	

	
	$count = 0;
	$result = mysqli_query($conn,"select count(*) as count from login where uname = '$username' and email = '$email' ");
	if( $count == 0 )
	{
		$text=mysqli_query($conn,"insert into `users` values ('$first_name','$last_name','$username','$email','$password')");	
		if(!$text)
		{
			die('Could not update data: ' . mysqli_error($conn));
		}
		
	
	}
	else
	{
		echo "<script>alert('You are already a member')</script>";	
	}
	
	header("location: aftercreate.html") ;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Realty</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    
   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    	
  </head>
  <body>
  <div class="alert alert-success">
  <center><strong>Thank You!<?php
  echo "$username"?><br></strong><br> for Registering with us</br>
  <a href="login.html" class="btn btn-success page-scroll">Go to Main Page</a></center>
</div>
</body>
</head>
</html> 
















