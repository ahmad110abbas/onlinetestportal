<?php 
include 'config.php';
$marks=0;

if (isset($_GET['id'])) {
	$sql = "SELECT * FROM test WHERE subject='".$_GET['id']."'";
	$result = mysqli_query($conn, $sql);
	$questions = mysqli_fetch_all($result, MYSQLI_ASSOC);
}
function print_question_m($questions){
	if (isset($_POST)) {
		$questions;
		echo "<form method='POST'>";
		echo '<p>',$questions[0]["question"],'</p>';
		echo '<input type="radio" name="op',$questions[0]["qid"],'" value="op1"><label for="op">',$questions[0]["op1"],'</label><br>';
		echo '<input type="radio" name="op',$questions[0]["qid"],'" value="op2"><label for="op">',$questions[0]["op2"],'</label><br>';
		echo '<input type="radio" name="op',$questions[0]["qid"],'" value="op3"><label for="op">',$questions[0]["op3"],'</label><br>';
		echo '<input type="radio" name="op',$questions[0]["qid"],'" value="op4"><label for="op">',$questions[0]["op4"],'</label><br><br>';
		echo '<input type="submit" id="pre" name="pre" value="Previous">';
			// echo '<input type="submit" id="submit" name="submit" value="Submit">';
		echo '<input type="submit" id="next" name="next" value="Next">';
		echo '</form>';
	}
}
function print_question_f($questions){
	if (isset($_POST)) {
		$questions;
		echo "<form method='POST'>";
		echo '<p>',$questions[0]["question"],'</p>';
		echo '<input type="radio" name="op',$questions[0]["qid"],'" value="op1"><label for="op">',$questions[0]["op1"],'</label><br>';
		echo '<input type="radio" name="op',$questions[0]["qid"],'" value="op2"><label for="op">',$questions[0]["op2"],'</label><br>';
		echo '<input type="radio" name="op',$questions[0]["qid"],'" value="op3"><label for="op">',$questions[0]["op3"],'</label><br>';
		echo '<input type="radio" name="op',$questions[0]["qid"],'" value="op4"><label for="op">',$questions[0]["op4"],'</label><br><br>';
			// echo '<input type="submit" id="pre" name="pre" value="Previous">';
			// echo '<input type="submit" id="submit" name="submit" value="Submit">';
		echo '<input type="submit" id="next" name="next" value="Next">';
		echo '</form>';
	}
}
function print_question_l($questions){
	if (isset($_POST['count'])) {
		$questions;
		echo "<form method='POST'>";
		echo '<p>',$questions[0]["question"],'</p>';
		echo '<input type="radio" name="op',$questions[0]["qid"],'" value="op1"><label for="op">',$questions[0]["op1"],'</label><br>';
		echo '<input type="radio" name="op',$questions[0]["qid"],'" value="op2"><label for="op">',$questions[0]["op2"],'</label><br>';
		echo '<input type="radio" name="op',$questions[0]["qid"],'" value="op3"><label for="op">',$questions[0]["op3"],'</label><br>';
		echo '<input type="radio" name="op',$questions[0]["qid"],'" value="op4"><label for="op">',$questions[0]["op4"],'</label><br><br>';
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
			if ($_GET['count']==0) {
				print_question_f($questions);
				$_GET['count']=$_GET['count']+1;
			}
			elseif ($_GET['count']>0 && $_GET['count']<9) {
				print_question_m($questions);
			}
			elseif ($_GET['count']==9) {
				print_question_l($questions);
			}
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


