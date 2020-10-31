<?php 
	session_start();
	include 'config.php';

	if (isset($_POST['login'])) {
		$username=isset($_POST['username'])?$_POST['username']:'';
		$password=isset($_POST['password'])?$_POST['password']:'';

		$sql= "SELECT * FROM user WHERE username='".$username."' AND password='".$password."'";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
			while ($row=$result->fetch_assoc()) {
				$_SESSION['userdata']=array('username'=>$row['username'],'user_id'=>$row['user_id']);
				header('Location: testportal.php');
			}
		}else{
			echo "Invalid Username or Password";
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
			<h1>Online Test Portal</h1>
			<form method="POST">
				<label>Username:</label>
				<input type="text" name="username" required><br>
				<label>Password:</label>
				<input type="password" name="password" required><br>
				<input type="submit" name="login" value="Login">
				<p>New user, <a href="register.php">Register here</a></p>
			</form>
		</div>
	</div>
</body>
</html>