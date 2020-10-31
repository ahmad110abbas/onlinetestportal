<?php 
	include 'config.php';
	$sum=0;
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>online test portal</title>
</head>
<body>
	<div>
		<h1>Test</h1>
	</div>
	<form method="POST">
		<?php 
		if (isset($_GET['id'])) {
			$sql = "SELECT * FROM test WHERE subject='".$_GET['id']."'";
 			$result = $conn->query($sql);
 			if ($result->num_rows>0) {
 				while ($row=$result->fetch_assoc()) {
 					echo "<div>";
 					echo "<p>",$row['question'],"</p>";
 					echo '<input type="radio" name="op',$row["qid"],'" value="',($row["ans"]==$row["op1"])?1:0,'"><label for="op1">',$row["op1"],'</label><br>';
 					echo '<input type="radio" name="op',$row["qid"],'" value="',($row["ans"]==$row["op2"])?1:0,'"><label for="op2">',$row["op2"],'</label><br>';
 					echo '<input type="radio" name="op',$row["qid"],'" value="',($row["ans"]==$row["op3"])?1:0,'"><label for="op3">',$row["op3"],'</label><br>';
 					echo '<input type="radio" name="op',$row["qid"],'" value="',($row["ans"]==$row["op4"])?1:0,'"><label for="op4">',$row["op4"],'</label><br>';
 					echo "</div>";
 				}
 			}
		}
		?>
		<br>
		<input type="submit" name="submit" value="Submit">
	</form>
	<?php 
		foreach ($_POST as $key => $value) {
			if ($value!='Submit') {
				$sum=$sum+$value;
			}
		}
		if ($sum>5) {
			echo '<script>alert("Passed")</script>';
		}else{
			echo '<script>alert("Failed")</script>';
		}
	 ?>
</body>
</html>
 				<!-- print_r($ques[1]['q']['subject']); -->