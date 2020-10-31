<?php 
	session_start();
	include 'config.php';
	$nav="";
	if (isset($_POST['navigation'])) {
		$_SESSION['nav']=$_POST['navigation'];
	}
	if (isset($_GET['delete'])) {
		$sql = "DELETE FROM test WHERE subject='".$_GET['delete']."'";
		if ($conn->query($sql) === TRUE) {
			echo "Record deleted successfully";
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
 			<h1>Welcome to the Admin section of Online test portal</h1>
 			<p>Here you can view,add,delete tests.</p>
 		</div>
 		<div>
 			<a href="createtest.php">Create New Test</a>
 		</div>
 		<div>
 			<p>Next/Previous Navigation</p>
			<form method="POST">
  				<input type="radio" name="navigation" value="on">
  				<label for="on">On</label><br>
  				<input type="radio" name="navigation" value="off">
  				<label for="off">Off</label><br><br>
  				<input type="submit" value="Submit">
			</form>
 		</div>
 		<?php 
 			$sql = "SELECT DISTINCT subject FROM test";
 			$result = $conn->query($sql);
 			if ($result->num_rows>0) {
				while ($row=$result->fetch_assoc()) {
					echo '<div style="display: inline;float: left;margin: 20px;">';
					echo "<h3>".$row['subject']." Test</h3><br>";
					echo '<a href="viewtest.php?id=',$row['subject'],'">view  </a>';
					echo '<a href="?delete=',$row['subject'],'">  delete</a>';
					echo "</div>";
				}
			}
 		 ?>
 	</div>
 </body>
 </html>