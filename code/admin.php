<!DOCTYPE html>
<html>
<head>

<title>Realty</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Realty Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='http://fonts.googleapis.com/css?family=Exo+2:400,900italic,900,800italic,800,700italic,700,600italic,600,500italic,500,400italic,300italic,300,200italic,200' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>


</head>


<style>
table, th, td {
    /*border: 1px solid black;*/
}
table {  
    color: #333;
    font-family: Helvetica, Arial, sans-serif;
    width: 640px; 
    border-collapse: 
    collapse; border-spacing: 0; 

}

td, th {  
    border: 1px solid transparent; /* No more visible border */
    height: 30px; 
    transition: all 0.3s;  /* Simple transition for hover effect */
}

th {  
    background: #DFDFDF;  /* Darken header a bit */
    font-weight: bold;
}

td {  
    background: #FAFAFA;
    text-align: center;
}

/* Cells in even rows (2,4,6...) are one color */        
tr:nth-child(even) td { background: #F1F1F1; }   

/* Cells in odd rows (1,3,5...) are another (excludes header cells)  */        
tr:nth-child(odd) td { background: #FEFEFE; }  

tr td:hover { background: #666; color: #FFF; }  
/* Hover cell effect! */
.table{
	padding-left: 300px;
}
h1{
	color:#E25D33;
	padding:10px;
}

td a{
  color:white;
  background-color: red;
  display: block;
  margin-left:40px;
}
  
}
</style>
</head>
<body>
  <div class="header">
  <div class="container">
 <div class="header-top">
  <div class="top-menu">
  	<span class="menu"><img src="images/nav.png" alt=""/> </span>
<ul>
   	<li><a href="index.php" class="active">Home</a></li>
    <li><a href="br.html">Buy/Rent</a></li>
  	<li><a href="sell.html">Sell</a></li>
	<li><a href="projects.php">projects</a></li>
   	<li><a href="contact1.php">Contact</a></li>
    </ul>



    <script>
		 $("span.menu").click(function(){
		 $(".top-menu ul").slideToggle("slow" , function(){
		 });
		 });
		 </script>
   

	</div>
	<div class="buttons">
				   		 <a>Hello&nbsp;<?php
						 $username = $_GET['username'] ;
  echo $username ;?></a>
  <a href="index.html" class="button">Logout</a>
  </div>
 
			<div class="clearfix"></div>
</div>
<div class="header-bottom">
  <div class="logo">
<a href="index.html">Realty</a>
  </div>

<div class="clearfix"></div>
  </div>
</div>
  </div>	

<!-- *****************************user*************************-->  
  <div class="table">
  	<h1>Users</h1>
  
<?php
	include('dbconnect.php');  
	
$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>First Name</th><th>Last Name</th><th>User Name</th><th>Email</th><th>Password</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["first_name"]. "</td><td>" . $row["last_name"]. " </td><td>" . $row["username"]. "</td><td>" . $row["email"]. "</td><td>" . $row["password"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?> 

</div>

<!-- *****************************seller*************************-->

  <div class="table">
  	<h1>Seller</h1>
  
<?php
	include('dbconnect.php');
	
$sql = "SELECT * FROM sell";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>Name</th><th>Email</th><th>Subject</th><th>Type</th><th>Location</th><th>Messages</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["name"]. "</td><td>" . $row["email"]. " </td><td>" . $row["subject"]. "</td><td>" . $row["type"]. "</td><td>" . $row["location"]. "</td><td>" . $row["message"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?> </div>

<!-- *****************************Buyer for buying*************************-->
  <div class="table">
  	<h1>Buyer for Buying The Property</h1>
  
<?php
	include('dbconnect.php');
	
$sql = "SELECT * FROM contact";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>Name</th><th>Email</th><th>Subject</th><th>Message</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["name"]. "</td><td>" . $row["email"]. " </td><td>" . $row["subject"]. "</td><td>" . $row["message"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>
</div>

<!--************************ Buyer for renting ***************************-->
  <div class="table">
  	<h1>Buyer for Renting</h1>
  
<?php
	include('dbconnect.php');
	
$sql = "SELECT * FROM contactr";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>Name</th><th>Email</th><th>Subject</th><th>Message</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["name"]. "</td><td>" . $row["email"]. " </td><td>" . $row["subject"]. "</td><td>" . $row["message"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>
</div>


<!--************************ contact us***************************-->
  <div class="table">
  	<h1>Contact us</h1>
  
<?php
	include('dbconnect.php');
	
$sql = "SELECT * FROM contactc";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>Name</th><th>Email</th><th>Subject</th><th>Message</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["name"]. "</td><td>" . $row["email"]. " </td><td>" . $row["subject"]. "</td><td>" . $row["message"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>
</div>



<!-- *****************************Footer*************************-->
<div class="Resources-section">
	<div class="container">
	<div class="col-md-9 Resources">
	<h3>about</h3>
	<p>Want to buy or rent a house?<br>Wave a property for sale?<br>We have been helping builders and agents to sell their properties over a decade,and have sold 1000's of houses to people</p>
	</div>
	
	<div class="col-md-3 Resources">
	<h3>social</h3>
	<ul>
	<li><a href="#">facebook</a></li>
	<li><a href="#">google+</a></li>
	</ul>
	</div>
	<div class="clearfix"></div>
	</div>
	</div>
	</div>

					</div>
					</div>
</body>
</html>