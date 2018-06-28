<!DOCTYPE html>
<html>
<head>
	<title>Grades</title>
	<style type="text/css">
		body{
			background-image: url(eric-ward-267021-unsplash.jpg);
			background-size: cover;
			font-family: sans-serif;
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
				<a href="index.php" >Home</a>
				<a href="#">About Us</a>
				<a href="grading.php" class="active">Grades</a>
				<a href="#">Contact Us</a>
			</ul>
		</div>
	</nav>
</head>
<body>
	<form action="grades.php" method="POST">
		<label>Username</label><br>
		<input type="text" name="username" placeholder="Enter Student Admission Number"><br>
		<label>Mathematics</label><br>
		<input type="number" name="math"><br>
		<label>English</label><br>
		<input type="number" name="eng"><br>
		<label>Kiswahili</label><br>
		<input type="number" name="kis"><br>
		<label>Biology</label><br>
		<input type="number" name="bio"><br>
		<label>Chemistry</label><br>
		<input type="number" name="chem"><br>
		<label>Physics</label><br>
		<input type="number" name="phyc"><br>
		<label>Humanity</label><br>
		<input type="number" name="hum"><br>
		<input type="submit" value="submit">
		<input type="reset" value="reset">
	</form>
</body>
</html>


<?php 
error_reporting(~E_NOTICE);
$username="";
$username=$_POST['username'];
$math="";
$math=$_POST['math'];
$eng="";
$eng=$_POST['eng'];
$kis="";
$kis=$_POST['kis'];
$bio="";
$bio=$_POST['bio'];
$chem="";
$chem=$_POST['chem'];
$phyc="";
$phyc=$_POST['phyc'];
$hum="";
$hum=$_POST['hum'];
$average=($math+$eng+$kis+$bio+$chem+$phyc+$hum)/7;
if ($average>88) {
	echo "A";
}
elseif ($average>81) {
	echo "A-";
}elseif ($average>77) {
	echo "B+";
}elseif ($average>74) {
	echo "B";
}elseif ($average>69) {
	echo "B-";
}elseif ($average>65) {
	echo "C+";
}elseif ($average>62) {
	echo "C";
}elseif ($average>58) {
	echo "C-";
}elseif ($average>54) {
	echo "D+";
}elseif ($average>50) {
	echo "D";
}elseif ($average>45) {
	echo "D-";
}
 else {
	echo "E";
}
$servername="localhost";
$username="root";
$password="";
$dbname="school";
$connect=mysqli_connect($servername,$username,$password,$dbname);
if (!$connect) {
	die("Connetion Failed " .mysqli_connect_error());
	$sql="INSERT INTO 2018(username,mathematics,english,kiswahili,biology,chemistry,physics,humanity,grade ) VALUES('$username','$math','$eng','$kis','$bio','$chem','$phyc','$hum','$grade')";
	mysqli_query($connect,$sql);

}
 ?>