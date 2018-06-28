<?php include ('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<style type="text/css">
		body{
			background-image: url(eric-ward-267021-unsplash.jpg);
			background-size: cover;
		}
		form{
			font-family: sans-serif;
			font-size: 23px;
			margin-left: 30%;
			color: black;
		}
		input[type=text],input[type=password]{
			border-radius: 15px;
			width: 300px;
			height: 40px;
		}
	</style>
</head>
<body>
	<form action="login.php" method="post">
		<?php include ('errors.php'); ?>
		<label>Username</label><br>
		<input type="text" name="username" placeholder="Enter Admission/TSC number" ><br>
		<label>Password</label><br>
		<input type="password" name="password" placeholder="Enter Student/Teacher ID"><br>
		<button class="btn btn-success" type="submit" name="student_login">Login as Student</button>
		<button class="btn btn-danger" type="submit" name="teacher_login">Login as Teacher</button>
	</form>

</body>
</html>