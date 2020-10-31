<?php 
	include 'config.php';
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>online test portal</title>
</head>
<body>
	<div>
		<div>
			<h1>Test</h1>
			<?php 
				$sql = "SELECT * FROM test WHERE subject='".$_GET['id']."'";
 				$result = $conn->query($sql);
 				if ($result->num_rows>0) {
 					while ($row=$result->fetch_assoc()) {
 						echo "<div>";
 						echo "<p>",$row['question'],"</p>";
 						echo "<ul>";
 						echo "<li>",$row['op1'],"</li>";
 						echo "<li>",$row['op2'],"</li>";
 						echo "<li>",$row['op3'],"</li>";
 						echo "<li>",$row['op4'],"</li>";
 						echo "</ul>";
 						echo "<p><strong>Answer:</strong>",$row['ans'],"</p>";
 						echo "</div>";
 					}
 				}
			 ?>
		</div>
	</div>
</body>
</html>