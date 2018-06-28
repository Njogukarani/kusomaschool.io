<?php 
$servername="localhost";
$username="root";
$password="";
$dbname="school";
$errors=array();
$connect=mysqli_connect($servername,$username,$password,$dbname);
if (!$connect) {
	echo "Connection successful";
	die("Connection Failed " .mysqli_connect());
}
	mysqli_close($connect);


 ?>