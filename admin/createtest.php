<?php 
	include 'config.php';
	if (isset($_POST['submit'])) {
		$sql="INSERT INTO test (subject, question, op1, op2, op3,op4,ans) VALUES ('".$_POST['sub']."', '".$_POST['q1']."' , '".$_POST['q1o1']."','".$_POST['q1o2']."','".$_POST['q1o3']."', '".$_POST['q1o4']."','".$_POST['q1a1']."'),

		('".$_POST['sub']."', '".$_POST['q2']."' , '".$_POST['q2o1']."','".$_POST['q2o2']."','".$_POST['q2o3']."', '".$_POST['q2o4']."','".$_POST['q2a2']."'),

		('".$_POST['sub']."', '".$_POST['q3']."' , '".$_POST['q3o1']."','".$_POST['q3o2']."','".$_POST['q3o3']."', '".$_POST['q3o4']."','".$_POST['q3a3']."'),

		('".$_POST['sub']."', '".$_POST['q4']."' , '".$_POST['q4o1']."','".$_POST['q4o2']."','".$_POST['q4o3']."', '".$_POST['q4o4']."','".$_POST['q4a4']."'),

		('".$_POST['sub']."', '".$_POST['q5']."' , '".$_POST['q5o1']."','".$_POST['q5o2']."','".$_POST['q5o3']."', '".$_POST['q5o4']."','".$_POST['q5a5']."'),

		('".$_POST['sub']."', '".$_POST['q6']."' , '".$_POST['q6o1']."','".$_POST['q6o2']."','".$_POST['q6o3']."', '".$_POST['q6o4']."','".$_POST['q6a6']."'),

		('".$_POST['sub']."', '".$_POST['q7']."' , '".$_POST['q7o1']."','".$_POST['q7o2']."','".$_POST['q7o3']."', '".$_POST['q7o4']."','".$_POST['q7a7']."'),

		('".$_POST['sub']."', '".$_POST['q8']."' , '".$_POST['q8o1']."','".$_POST['q8o2']."','".$_POST['q8o3']."', '".$_POST['q8o4']."','".$_POST['q8a8']."'),

		('".$_POST['sub']."', '".$_POST['q9']."' , '".$_POST['q9o1']."','".$_POST['q9o2']."','".$_POST['q9o3']."', '".$_POST['q9o4']."','".$_POST['q9a9']."'),

		('".$_POST['sub']."', '".$_POST['q10']."' , '".$_POST['q10o1']."','".$_POST['q10o2']."','".$_POST['q10o3']."', '".$_POST['q10o4']."','".$_POST['q10a10']."')";
		if ($conn->query($sql) === true) {
			echo "Record Added";
		}else{
			print_r($conn->error);
			die();
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
			<h1>Welcome to the Add Test section</h1>
		</div>
		<div>
			<form method="POST">
				<label for="sub"><strong>Enter Test Subject:</strong></label>
  				<input type="text" name="sub" required size="30"><br><br>


				<label for="q1">Question1:</label>
  				<input type="text" name="q1" required size="50"><br>
  				<label for="q1o1">Option1:</label>
  				<input type="text" name="q1o1" required size="20"><br>
  				<label for="q1o2">Option2:</label>
  				<input type="text" name="q1o2" required size="20"><br>
  				<label for="q1o3">Option3:</label>
  				<input type="text" name="q1o3" required size="20"><br>
  				<label for="q1o4">Option4:</label>
  				<input type="text" name="q1o4" required size="20"><br>
  				<label for="q1a1">Answer1:</label>
  				<input type="text" name="q1a1" required size="20"><br><br>


  				<label for="q2">Question2:</label>
  				<input type="text" name="q2" required size="50"><br>
  				<label for="q2o1">Option1:</label>
  				<input type="text" name="q2o1" required size="20"><br>
  				<label for="q2o2">Option2:</label>
  				<input type="text" name="q2o2" required size="20"><br>
  				<label for="q2o3">Option3:</label>
  				<input type="text" name="q2o3" required size="20"><br>
  				<label for="q2o4">Option4:</label>
  				<input type="text" name="q2o4" required size="20"><br>
  				<label for="q2a2">Answer2:</label>
  				<input type="text" name="q2a2" required size="20"><br><br>

  				<label for="q3">Question3:</label>
  				<input type="text" name="q3" required size="50"><br>
  				<label for="q3o1">Option1:</label>
  				<input type="text" name="q3o1" required size="20"><br>
  				<label for="q3o2">Option2:</label>
  				<input type="text" name="q3o2" required size="20"><br>
  				<label for="q3o3">Option3:</label>
  				<input type="text" name="q3o3" required size="20"><br>
  				<label for="q3o4">Option4:</label>
  				<input type="text" name="q3o4" required size="20"><br>
  				<label for="q3a3">Answer3:</label>
  				<input type="text" name="q3a3" required size="20"><br><br>

  				<label for="q4">Question4:</label>
  				<input type="text" name="q4" required size="50"><br>
  				<label for="q4o1">Option1:</label>
  				<input type="text" name="q4o1" required size="20"><br>
  				<label for="q4o2">Option2:</label>
  				<input type="text" name="q4o2" required size="20"><br>
  				<label for="q4o3">Option3:</label>
  				<input type="text" name="q4o3" required size="20"><br>
  				<label for="q4o4">Option4:</label>
  				<input type="text" name="q4o4" required size="20"><br>
  				<label for="q4a4">Answer4:</label>
  				<input type="text" name="q4a4" required size="20"><br><br>

  				<label for="q5">Question5:</label>
  				<input type="text" name="q5" required size="50"><br>
  				<label for="q5o1">Option1:</label>
  				<input type="text" name="q5o1" required size="20"><br>
  				<label for="q5o2">Option2:</label>
  				<input type="text" name="q5o2" required size="20"><br>
  				<label for="q5o3">Option3:</label>
  				<input type="text" name="q5o3" required size="20"><br>
  				<label for="q5o4">Option4:</label>
  				<input type="text" name="q5o4" required size="20"><br>
  				<label for="q5a5">Answer5:</label>
  				<input type="text" name="q5a5" required size="20"><br><br>

  				<label for="q6">Question6:</label>
  				<input type="text" name="q6" required size="50"><br>
  				<label for="q6o1">Option1:</label>
  				<input type="text" name="q6o1" required size="20"><br>
  				<label for="q6o2">Option2:</label>
  				<input type="text" name="q6o2" required size="20"><br>
  				<label for="q6o3">Option3:</label>
  				<input type="text" name="q6o3" required size="20"><br>
  				<label for="q6o4">Option4:</label>
  				<input type="text" name="q6o4" required size="20"><br>
  				<label for="q6a6">Answer6:</label>
  				<input type="text" name="q6a6" required size="20"><br><br>

  				<label for="q7">Question7:</label>
  				<input type="text" name="q7" required size="50"><br>
  				<label for="q7o1">Option1:</label>
  				<input type="text" name="q7o1" required size="20"><br>
  				<label for="q7o2">Option2:</label>
  				<input type="text" name="q7o2" required size="20"><br>
  				<label for="q7o3">Option3:</label>
  				<input type="text" name="q7o3" required size="20"><br>
  				<label for="q7o4">Option4:</label>
  				<input type="text" name="q7o4" required size="20"><br>
  				<label for="q7a7">Answer7:</label>
  				<input type="text" name="q7a7" required size="20"><br><br>

  				<label for="q8">Question8:</label>
  				<input type="text" name="q8" required size="50"><br>
  				<label for="q8o1">Option1:</label>
  				<input type="text" name="q8o1" required size="20"><br>
  				<label for="q8o2">Option2:</label>
  				<input type="text" name="q8o2" required size="20"><br>
  				<label for="q8o3">Option3:</label>
  				<input type="text" name="q8o3" required size="20"><br>
  				<label for="q8o4">Option4:</label>
  				<input type="text" name="q8o4" required size="20"><br>
  				<label for="q8a8">Answer8:</label>
  				<input type="text" name="q8a8" required size="20"><br><br>

  				<label for="q9">Question9:</label>
  				<input type="text" name="q9" required size="50"><br>
  				<label for="q9o1">Option1:</label>
  				<input type="text" name="q9o1" required size="20"><br>
  				<label for="q9o2">Option2:</label>
  				<input type="text" name="q9o2" required size="20"><br>
  				<label for="q9o3">Option3:</label>
  				<input type="text" name="q9o3" required size="20"><br>
  				<label for="q9o4">Option4:</label>
  				<input type="text" name="q9o4" required size="20"><br>
  				<label for="q9a9">Answer9:</label>
  				<input type="text" name="q9a9" required size="20"><br><br>

  				<label for="q10">Question10:</label>
  				<input type="text" name="q10" required size="50"><br>
  				<label for="q10o1">Option1:</label>
  				<input type="text" name="q10o1" required size="20"><br>
  				<label for="q10o2">Option2:</label>
  				<input type="text" name="q10o2" required size="20"><br>
  				<label for="q10o3">Option3:</label>
  				<input type="text" name="q10o3" required size="20"><br>
  				<label for="q10o4">Option4:</label>
  				<input type="text" name="q10o4" required size="20"><br>
  				<label for="q10a10">Answer10:</label>
  				<input type="text" name="q10a10" required size="20"><br><br>

  				<input type="submit" name="submit" value="Submit">
			</form>
		</div>
	</div>
</body>
</html>