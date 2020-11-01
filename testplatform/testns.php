<?php 
	include 'config.php';
	$ques[]['q']=array();
	$marks=0;

	if (isset($_GET['id'])) {
		$sql = "SELECT * FROM test WHERE subject='".$_GET['id']."'";
 		$result = $conn->query($sql);
 		if ($result->num_rows>0) {
 			while ($row=$result->fetch_assoc()) {
 				$ques[]['q']=$row;
 			}
 		}
	}
	function print_question_m(){
		if (isset($_POST)) {
			global $ques;
			static $qnum=1;
			echo "<form method='POST'>";
			echo '<p>',$ques[$qnum]["q"]["question"],'</p>';
			echo '<input type="radio" name="op',$ques[$qnum]["q"]["qid"],'" value="op1"><label for="op">',$ques[$qnum]["q"]["op1"],'</label><br>';
			echo '<input type="radio" name="op',$ques[$qnum]["q"]["qid"],'" value="op2"><label for="op">',$ques[$qnum]["q"]["op2"],'</label><br>';
			echo '<input type="radio" name="op',$ques[$qnum]["q"]["qid"],'" value="op3"><label for="op">',$ques[$qnum]["q"]["op3"],'</label><br>';
			echo '<input type="radio" name="op',$ques[$qnum]["q"]["qid"],'" value="op4"><label for="op">',$ques[$qnum]["q"]["op4"],'</label><br><br>';
			echo '<input type="submit" id="pre" name="pre" value="Previous">';
			// echo '<input type="submit" id="submit" name="submit" value="Submit">';
			echo '<input type="submit" id="next" name="next" value="Next">';
			echo '</form>';
		}
	}
	function print_question_f(){
		if (isset($_POST)) {
			global $ques;
			static $qnum=1;
			echo "<form method='POST'>";
			echo '<p>',$ques[$qnum]["q"]["question"],'</p>';
			echo '<input type="radio" name="op',$ques[$qnum]["q"]["qid"],'" value="op1"><label for="op">',$ques[$qnum]["q"]["op1"],'</label><br>';
			echo '<input type="radio" name="op',$ques[$qnum]["q"]["qid"],'" value="op2"><label for="op">',$ques[$qnum]["q"]["op2"],'</label><br>';
			echo '<input type="radio" name="op',$ques[$qnum]["q"]["qid"],'" value="op3"><label for="op">',$ques[$qnum]["q"]["op3"],'</label><br>';
			echo '<input type="radio" name="op',$ques[$qnum]["q"]["qid"],'" value="op4"><label for="op">',$ques[$qnum]["q"]["op4"],'</label><br><br>';
			// echo '<input type="submit" id="pre" name="pre" value="Previous">';
			// echo '<input type="submit" id="submit" name="submit" value="Submit">';
			echo '<input type="submit" id="next" name="next" value="Next">';
			echo '</form>';
		}
	}
	function print_question_l(){
		if (isset($_POST)) {
			global $ques;
			static $qnum=1;
			echo "<form method='POST'>";
			echo '<p>',$ques[$qnum]["q"]["question"],'</p>';
			echo '<input type="radio" name="op',$ques[$qnum]["q"]["qid"],'" value="op1"><label for="op">',$ques[$qnum]["q"]["op1"],'</label><br>';
			echo '<input type="radio" name="op',$ques[$qnum]["q"]["qid"],'" value="op2"><label for="op">',$ques[$qnum]["q"]["op2"],'</label><br>';
			echo '<input type="radio" name="op',$ques[$qnum]["q"]["qid"],'" value="op3"><label for="op">',$ques[$qnum]["q"]["op3"],'</label><br>';
			echo '<input type="radio" name="op',$ques[$qnum]["q"]["qid"],'" value="op4"><label for="op">',$ques[$qnum]["q"]["op4"],'</label><br><br>';
			echo '<input type="submit" id="pre" name="pre" value="Previous">';
			echo '<input type="submit" id="submit" name="submit" value="Submit">';
			// echo '<input type="submit" id="next" name="next" value="Next">';
			echo '</form>';
		}
	}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>online test portal</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
	<div>
		<h1>Test</h1>
		<?php	
		print_question_m();
		?>
	</div>
</body>
</html>
<script>
	var count=0;
	$(document).ready(function(){
		$('#next').click(function(e){
			e.preventDefault();
			count++;
			console.log(count);
		});
	});
	$(document).ready(function(){
		$('#pre').click(function(e){
			e.preventDefault();
			count--;
			console.log(count);
		});
	});
</script>


