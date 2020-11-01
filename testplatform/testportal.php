<?php 
	session_start();
	include 'config.php';
	$link=($_SESSION['nav']=='off')?test:testns;
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>online test portal</title>
</head>
<body>
	<div>
		<div>
			<h1>Welcome to Online Test Portal</h1>
		</div>
		<div>
 			<?php 
 				$sql = "SELECT DISTINCT subject FROM test";
 				$result = $conn->query($sql);
 				if ($result->num_rows>0) {
					while ($row=$result->fetch_assoc()) {
						echo '<div style="display: inline;float: left;margin: 20px;">';
						echo "<h3>".$row['subject']." Test</h3><br>";
						echo '<a href="',$link,'.php?id=',$row['subject'],'&count=0">Take Test</a>';
						echo "</div>";
					}
				}
 		 	?>
		</div>
	</div>
</body>
</html>