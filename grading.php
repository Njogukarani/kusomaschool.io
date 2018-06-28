<!DOCTYPE html>
<html>
<head>
	<title>Grades</title>
	<style type="text/css">
		.fa {
    padding: 20px;
    font-size: 30px;
    width: 30px;
    text-align: center;
    text-decoration: none;
    border-radius: 50%;
}
.fa-facebook {
    background: #3B5998;
    color: white;
}.fa-twitter {
    background: #55ACEE;
    color: white;
}
body{
	background-image: url(eric-ward-267021-unsplash.jpg);
	background-size: cover;
	font-family: sans-serif;
}
.rows{
	font-size: 23px;
	font-family: 
}
	</style>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/jquery.min.js"></script>
<body>
	<nav class="navbar navbar-inverse">
		<div class="container fluid">
			<div class="nav navbar-header">
				<a href="" class="navbar-brand">Kusoma School</a>
			</div>
			<ul class="nav navbar-nav" style="list-style-type: none;padding: 15px;">
				<a href="index.php">Home</a>
				<a href="">About Us</a>
				<a href="#" class="active">Grades</a>
				<a href="">Contact Us</a>
			</ul>
		</div>
	</nav>
	<div>
		<img src="attachment_61484749-e1491506948391.png" width="300px" height="300px" class="img-rounded" style="text-align: center;">
	</div>
</head>
<body>

</body>
<?php 
$servername="localhost";
$username="root";
$password="";
$dbname="school";
$connect=mysqli_connect($servername,$username,$password,$dbname);
if (mysqli_connect_errno($connect))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$result=mysqli_query($connect,"SELECT ALL * FROM 2018");
echo "
<table style='border'>
<tr>
<th>Username</th>
<th>Math</th>
<th>Eng</th>
<th>Kis</th>
<th>Bio</th>
<th>Chem</th>
<th>Phyc</th>
<th>Hum</th>
<th>Grade</th>
</tr>
";
while ($row=mysqli_fetch_assoc($result)) {
	mysqli_result($result);
	extract($row);{
		echo "<tr>";
		echo "<td>" .$username ."</td>";
		echo "<td>" .$math ."</td>";
		echo "<td>" .$eng ."</td>";
		echo "<td>" .$kis ."</td>";
		echo "<td>" .$bio ."</td>";
		echo "<td>" .$chem ."</td>";
		echo "<td>" .$phyc ."</td>";
		echo "<td>" .$hum ."</td>";
		echo "<td>" .$average ."</td>";
		echo "</tr>";
	}
	echo "</table>";
}

 ?>
</html>