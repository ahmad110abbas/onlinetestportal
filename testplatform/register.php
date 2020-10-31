<?php 
	include 'config.php';
	$error='';
	if (isset($_POST['register'])) {
		$username=isset($_POST['username'])?$_POST['username']:'';
		$password=isset($_POST['password'])?$_POST['password']:'';
		$repassword=isset($_POST['repassword'])?$_POST['repassword']:'';
		$email=isset($_POST['email'])?$_POST['email']:'';

	if ($password!=$repassword) {
		$error="password doesn't match";
		echo "<p>",$error,"</p>";
	}else{
		$sql = "INSERT INTO user (username, password, email) VALUES ('".$username."', '".$password."' , '".$email."')";
		if ($conn->query($sql)===true) {
			echo "New Record Added Successfully";
		}else{
			print_r($conn->error);
		}
		
		$conn->close();
	}
	}


 ?>

<!DOCTYPE html>
<html>
<head>
	<title>online test portal</title>
</head>
<body>
	<div>
		<div>
			<h1>User Rgistration</h1>
			<form method="POST">
				<label>Username:</label>
				<input type="text" name="username" required><br>
				<label>Password:</label>
				<input type="password" name="password" required><br>
				<label>Re-Password:</label>
				<input type="password" name="repassword" required><br>
				<label>Email:</label>
				<input type="email" name="email" required><br>
				<input type="submit" name="register" value="Register">
				<a href="index.php">Login</a>
			</form>
		</div>
	</div>
</body>
</html>