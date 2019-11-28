<?php

 $conn = mysqli_connect("localhost", "root", "");
 
 $db = mysqli_select_db($conn, "wt");
 
 $sql = "DELETE from users where username='$_GET[id]'";
 
 if(mysqli_query($conn,$sql))
	 header("refresh:0.1;url=admin.php");
 else
	 echo "<script> alert('Not Deleted!')</script>";

?>	


<td><a href=delete.php?id=".$row['username'].">Delete</a></td>