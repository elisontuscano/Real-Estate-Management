<?php
	include('dbconnect.php');
	
	$username=$_POST["username"];
	$password=$_POST["password"];
	$result=mysqli_query($conn,"SELECT * FROM users" );
	while($row=mysqli_fetch_array($result))
	{
		$password = $row["password"];
		
	}
	if( $password == $password )
	{
		if ($username == "elison")
		{
			header('location: admin.php?username='.$username.'') ;
		}
		else{
		session_start();
		$_SESSION['sid']=session_id();
		//echo "<script> alert('Successfully Login')</script>";
		header('location: index.php?username='.$username.'') ;
		}
	}
	else{
		echo "<script> alert('You dont have Permission')</script>";
	}
?>
<?php

/*include ('connection.php');
    
              
                $logid=$_POST['username'];
				$pswd=$_POST["password"];
				$sql="SLECT * FROM login WHERE uname='$logid'";
				$test=mysqli_query($conn,$sql);
				while($row=mysqli_fetch_array($test))
				{
					$username=$row["uname"];
					$password=$row["password"];
					$code=$row["code"];
					
					
				}
                 
               		if( $pswd==$password)
					{	
						if($code>='1' || $code<='100000')
						{
						session_start();
						$_SESSION['sid']=session_id();
						header('location: flower1.php?uname='.$uname.'') ;
						}
						
						else 
							echo "You have no permission";
						
					}
					else	
					echo "<center><a href=index.html>Login UnSuccessful</a></center>";
				
	
?>*/