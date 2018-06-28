<?php 
session_start();
$servername="localhost";
$username="root";
$password="";
$dbname="school";
$errors=array();
$connect=mysqli_connect($servername,$username,$password,$dbname);
if (!$connect) {
	die("Connection Failed " .mysqli_connect());
}
if (isset($_POST['student_user'])) {
	$name=mysqli_real_escape_string($connect,$_POST['username']);
	$passwordd=mysqli_real_escape_string($connect,$_POST['password']);
	if (empty($name)) {
		array_push($errors, "Username is required");
	}
	if (empty($passwordd)) {
		array_push($errors, "Password is required");
	}
	if (count($errors==0)) {
		$pswd=md5($passwordd);
		$insert="INSERT INTO students(username,password) VALUES('$name',$pswd')";
		mysqli_query($connect,$insert);
		$_SESSION['username']=$name;
		header("location:index.php");
	}
}
else if (isset($_POST['teacher_user'])) {
	$name=mysqli_real_escape_string($connect,$_POST['username']);
	$passwordd=mysqli_real_escape_string($connect,$_POST['password']);
	if (empty($name)) {
		array_push($errors, "Username Is required");
	}
	if (empty($passwordd)) {
		array_push($errors, "Password is required");
	}
	if (count($errors==0)) {
		$pswd=md5($passwordd);
		$pp="INSERT INTO teachers(username,password) VALUES('$name','$pswd')";
		mysqli_query($connect,$pp);
		$_SESSION['username']=$name;
		header("location:grades.php");
	}
}
if (isset($_POST['student_login'])) {
	$name=mysqli_real_escape_string($connect,$_POST['username']);
	$pswd=mysqli_real_escape_string($connect,$_POST['password']);
		if (empty($name)) {
			array_push($errors, "Username Required");
		}
		if (empty($pswd)) {
			array_push($errors, "Password Required");
		}if (count($errors==0)) {
			$pswd=md5($pswd);
			$insert="SELECT * FROM students WHERE username='$name' AND password='$pswd'";
			$result=mysqli_query($connect,$insert);
			if (mysqli_num_rows($result)==1) {
				$_SESSION['username']=$name;
				header("location:index.php");
			}
		}
}
if (isset($_POST['teacher_login'])) {
	$name=mysqli_real_escape_string($connect,$_POST['username']);
	$pswd=mysqli_real_escape_string($connect,$_POST['password']);
	if (empty($name)) {
		array_push($errors, "Username is Required");
	}
	if (empty($pswd)) {
		array_push($errors, "Password is required");
	}
	if (count($errors==0)) {
		$pswd=md5($pswd);
		$pp="SELECT * FROM teachers WHERE username='$name' AND password='$pswd'";
		$result=mysqli_query($connect,$pp);
		if (mysqli_num_rows($result)==1) {
			$_SESSION['username']=$name;
			header("location:grades.php");
	}
	}
}
mysqli_close($connect);
 ?>