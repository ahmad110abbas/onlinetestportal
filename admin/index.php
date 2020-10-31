<?php 
	session_start();
	include 'config.php';

	if (isset($_POST['login'])) {
		$username=isset($_POST['username'])?$_POST['username']:'';
		$password=isset($_POST['password'])?$_POST['password']:'';

		$sql= "SELECT * FROM admin WHERE admin_name='".$username."' AND password='".$password."'";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
			while ($row=$result->fetch_assoc()) {
				$_SESSION['userdata']=array('username'=>$row['admin_name']);
				header('Location: admin_portal.php');
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
			<h1>Online Test Portal/Admin Sction</h1>
			<form method="POST">
				<label>Username:</label>
				<input type="text" name="username" required><br>
				<label>Password:</label>
				<input type="password" name="password" required><br>
				<input type="submit" name="login" value="Login">
			</form>
		</div>
	</div>
</body>
</html>