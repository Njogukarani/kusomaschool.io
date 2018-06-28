<?php 

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
?>