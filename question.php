<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?=$base_url?>/lib/bootstrap/css/bootstrap.css">
<script type="text/javascript" src="<?=$base_url?>/lib/bootstrap/js/bootstrap.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>

	<?php
$server="localhost";
$user="root";
$pass="";
$db="online_exam";
$conn=new mysqli($server,$user,$pass,$db);
if($conn->connect_error){
	die("Connection Failed ".$conn->connect_error);
}
//connection created

//user answer insert operation


function insert_userans($conn,$user_answer,$prev_qno,$prev_question,$correct_answer,$subject,$qno){
	
	$sql1="SELECT qno FROM user_answer";
		 	$result1=$conn->query($sql1);
		 	$number_of_rows = mysqli_num_rows($result1);
		 	$sql2="INSERT INTO user_answer(qno, question, correct_ans,user_ans) VALUES ('$prev_qno','$prev_question','$correct_answer','$user_answer')";
				$result2=$conn->query($sql2);
			if($number_of_rows<=8){
				generate_random($conn,$subject,$qno);
		 	}
		 	else{
		 	
		 		echo"<form method='POST' action='result.php'>";
		 		echo "<input type='submit' style='margin-left:44%;' class='btn btn-success' name='viweresult' id='result' value='See Results'/>";
		 		echo "</form>";
		 	}
		 	// <div class="col-md-offset-5">

		 	
}

		$user_answer= $_POST['user_ans'];
		$prev_question=$_POST['question'];
		$prev_qno=$_POST['qid'];
		$correct_answer=$_POST['correct_ans'];
		$subject=$_POST['subject'];
		//echo $subject;
		$qno=$_POST["qno"];
		
		//Main function here
		
				
				
		ini_set('memory_limit', '1024M');
		insert_userans($conn,$user_answer,$prev_qno,$prev_question,$correct_answer,$subject,$qno);
					

		function getquestion( $conn,$random,$subject,$qno){
			$rand=$random;
			$qno=$qno+1;
			$sql="SELECT qid,question,ans1,ans2,ans3,ans4,correct_ans FROM $subject WHERE qid='$rand'";
			$result=$conn->query($sql);
			if($result-> num_rows > 0){
				while($row=$result->fetch_assoc()){
					$question= $row["question"];
					echo "<h2>".$qno.".\t";
					echo $question."</h2>";
					echo"<br>";
					$qid=$row["qid"];
					$correct_ans=$row['correct_ans'];
					echo "<div class='row'>";
						echo "<div class='col-md-1'></div>";
						echo "<div class='col-md-11'>";
					    echo "<input type='radio' name='answer' id='ans1' value='".$row['ans1']."' />".$row['ans1']."<br>";
					    echo "<input type='radio' name='answer' id='ans2' value='".$row['ans2']."' />".$row['ans2']."<br>";
					    echo "<input type='radio' name='answer' id='ans3' value='".$row['ans3']."' />".$row['ans3']."<br>";
					    echo "<input type='radio' name='answer' id='ans4' value='".$row['ans4']."' />".$row['ans4']."<br>";
						echo "<input type='hidden' name='correct_answer' id='corr_ans' value='".$row['correct_ans']."' />";
						echo "<input type='hidden' name='question' id='question' value='".$row['question']."' />";
						echo "<input type='hidden' name='qid' id='qid' value='".$row['qid']."' />";
						echo "<input type='hidden' name='subject' id='subject' value='".$subject."' />";
						echo "<input type='hidden' name='qno' id='qno' value='".$qno."' />";
						echo "</div>";
					echo "</div>";
				}
			}
		else{
			echo "0 results ";
		}
	}

function generate_random($con,$subject,$qno){
	$conn=$con;
	
	$sql5="SELECT qid FROM $subject";
	$result5=mysqli_query($conn,$sql5);
	$no_of_rows = mysqli_num_rows($result5);
	$random=mt_rand(1,$no_of_rows);
	
	$sql4="SELECT qno FROM user_answer where qno='$random'";
	  $result4 = mysqli_query($conn,$sql4);
      $row = mysqli_fetch_array($result4,MYSQLI_ASSOC);
      //$active = $row['active'];
      
      $count = mysqli_num_rows($result4);
      
      // If result matched this random number  and previous question, table row must be 1 row
		
      if($count == 1) {
         generate_random($conn,$subject,$qno);
        } else {
        getquestion($conn,$random,$subject,$qno);
      }
	
}

$conn->close();
?>

</body>
</html>



