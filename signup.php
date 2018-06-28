<?php include ('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
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
	<form action="signup.php" method="post">
		<?php include ('errors.php'); ?>
		<input type="text" name="username" placeholder="Enter Admission/TSC number" value="<?php echo $username ?>"><br>
		<label>Password</label><br>
		<input type="password" name="password" placeholder="Enter student/Teacher id" value="<?php echo $passwordd ?>"><br>
		<button class="btn btn-success" name="student_user" type="submit">Signup as Student</button>
		<button class="btn btn-danger" name="teacher_user" type="submit">Signup as Teacher</button>
	</form>
	<p style="border-radius: 30%;">Already have an account
		<a href="login.php">Login</a></p>
</body>
</html>