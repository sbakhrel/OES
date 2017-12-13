
<?php
include 'connection.php'; 
include 'global.php';
session_start();
$deleterecords = "TRUNCATE TABLE user_answer"; //empty the table of its current records
					  		$connection=makeconnection();
							mysqli_query( $connection, $deleterecords );
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<?php include 'include/lib.php'; 
	?>
	<!-- <link rel="stylesheet" href="<?=$base_url?>/lib/css/TimeCircles.css">
	<script type="text/javascript" src="<?=$base_url?>/lib/js/TimeCircles.js"></script> -->
	<script src="jquery.min.js"></script>

</head>

<body style="background-color: #e6e3ee">

<!--nav bar starts-->

<nav class="navbar navbar-default">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <!-- <a class="" href="<?=$base_url?>">
        <img src="lib/img/logo1.png" class="img-responsive" alt="OES" width="100px">
      </a> -->
      <a class="navbar-brand" href="<?=$base_url?>">Online Examination</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

      <ul class="nav navbar-nav ">
         <!-- <li><a href="#home">Home</a></li>
        <li><a href="#feature">Features</a></li>
        <li><a href="#syllabus">Syllabus</a></li> -->
      </ul>

     <form class="navbar-form navbar-right">
       		<p style="color: white"><?php echo ucwords($_SESSION['userName']); ?>
         	<a href="logout.php" class="btn btn-default">Logout</a>
	</form>
     
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<!-- Header starts -->

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<h2 style="text-align: center;">Welcome our valuable users</h2>
			<p style="text-align: center;">Note: If you click next button without choosing answer, your answer default answer be undefined.</p>
			<h3 style="text-align: center;">Only 10 questions available for a time.</h3>
		</div>
	</div>
</div>

<!-- Container starts -->
<div class="container-fluid">
	<div class="row">
		<div class="col-md-3"><br>
					<div class="panel text-center">
						  <!-- Default panel contents -->
						  <div class="panel-heading" style="background-color: grey">
						  	<h4>Time Remaining</h4>
						  </div>
						  <div class="panel-body">
						      <div id="questions">
							        <div id="set_1" class="questions"></div>
							        <div id="set_2" class="questions"></div>
							        <div id="set_3" class="questions"></div>
							        <div id="set_4" class="questions"></div>
							        <div id="set_5" class="questions"></div>
							        <div id="time" class="time">3:00</div>
							    </div>
							    <div id="click" onclick="location.reload();">
							        <div id="spinner"></div>
							    </div>
						    <script language="javascript">
						        // change questions here -- in quotes, comma separated
						        function setUP() {
						            var questionSets = [
						            ];

						            for (var setIndex = 0; setIndex < questionSets.length; ++setIndex) {
						                var questionSet = questionSets[setIndex];
						                var questionIndex = Math.floor(Math.random() * questionSet.length);
						                var question = questionSet[questionIndex];
						                var selector = '#questions div:nth-child(' + (setIndex + 1).toString() + ')';
						                document.querySelector(selector).innerHTML = question;
						                //alternative method follows -- comment out above two lines, uncomment below two lines
						                //var setId = 'set_' + (setIndex + 1).toString();
						                //document.getElementById(setId).innerHTML = question;
						            }
						        }

						        function showQuestions() {
						            document.getElementById('spinner').style.display = "none";
						            document.getElementById('click').style.display = "none";
						            document.getElementById('questions').style.display = "block";

						        }

						        function showSpinner() {
						            document.getElementById('questions').style.display = "none";
						            document.getElementById('click').style.display = "block";
						            document.getElementById('spinner').style.display = "block";
						        }

						        function startTimer(duration, display) {
						            var timer = duration,
						                minutes, seconds;
						            setInterval(function() {
						                minutes = parseInt(timer / 60, 10);
						                seconds = parseInt(timer % 60, 10);

						                minutes = minutes < 10 ? "0" + minutes : minutes;
						                seconds = seconds < 10 ? "0" + seconds : seconds;

						                display.textContent = minutes + ":" + seconds;

						                if (--timer < 0) {
						                    timer = 0;
						                    document.getElementById('time').style.backgroundColor = "#f46c6c";
						                    alert("Exam time Finished.");
						                    location.href="result.php";
						                }
						            }, 1000);
						        }

						        window.onload = function() {
						            setUP();
						            showQuestions();
						            var minutesLeft = 179, //Change to minutes you need -- counted in seconds -- minus one second 
						                display = document.querySelector('#time');
						            startTimer(minutesLeft, display);
						                        document.getElementById('questions').onclick = setUP;
						                        document.getElementById('questions').onclick = showSpinner;


						        };
						    </script>
						  </div>
					</div>
				</div>

			<!-- Question section-->

		<div class="col-md-9">
			<br><div class="panel panel-default">
			  <div class="panel-heading">
			  	<h4 style="margin-left: 50px;">
			  		<p><b>Candiate Name: <?=$_SESSION['fullName']?></b></p> <br>
			  		<p><b>Roll No.: <?=$_SESSION['userId']?></b></p>
			  	</h4></div>
			  <div class="panel-body">
				
				<div id="question">
					<div class="col-md-12">
			  			<h2>
			  			<?php
					  		$subject=$_POST['subject'];							
					  		$connection=makeconnection();
					  		
							$sql="SELECT qid,question,ans1,ans2,ans3,ans4,correct_ans FROM $subject ORDER BY RAND() LIMIT 1";

							$result = $connection->query($sql);

							if ($result->num_rows > 0) {
					   		 // output data of each row
					    		while($row = $result->fetch_assoc()) {
							        // echo "qid: " . $row["qid"]. " - Question: " . $row["question"]. "answer1" . $row["ans1"]."answer2".$row["ans2"]."answer3".$row["ans3"]."answer4".$row["ans4"]."correct answer".$row["correct_ans"]. "<br>"; 
					      
					       		 	$question=$row["question"];
							       $answer1=$row["ans1"];
							       $answer2=$row["ans2"];
							       $answer3=$row["ans3"];
							       $answer4=$row["ans4"];
							       $correct_answer=$row["correct_ans"];
							       echo "<h2>1.".$question ."</h2>" ;
							       $qno=1;?>

							</div><?php
							echo "<div class='row'>";
							echo "<div class='col-md-1'></div>";
							echo "<div class='col-md-11'>";
						    echo "<input type='radio' name='answer' id='ans1' value='".$row['ans1']."' />".$row['ans1']."<br>";
						    echo "<input type='radio' name='answer' id='ans2' value='".$row['ans2']."' />".$row['ans2']."<br>";
						    echo "<input type='radio' name='answer' id='ans3' value='".$row['ans3']."' />".$row['ans3']."<br>";
						    echo "<input type='radio' name='answer' id='ans4' value='".$row['ans4']."' />".$row['ans4']."<br>";
						    echo "<input type='hidden' name='correct_answer' id='corr_ans' value='".$row['correct_ans']."' />";
						    echo "<input type='hidden' name='subject' id='subject' value='".$subject."' />"."<br>";
						    echo "<input type='hidden' name='question' id='question' value='".$row['question']."' />";
							echo "<input type='hidden' name='qid' id='qid' value='".$row['qid']."' />";
							echo "<input type='hidden' name='qno' id='qno' value='".$qno."' />";
							echo "</div>";
							echo "</div>";
			     			?>
					       
					    
							<?php
							 		}
							} 
							else 
							{
							    echo "0 results";
							}
				
						?>
							
								
			  			</h2>
					
					</div>
					</div>
			
						<button class="btn-group btn-success btn-sm btn-group-justified"  data-toggle="modal" onclick="showNextQues()" >Next </button>
							<script>
							function showNextQues() {
							  var xhttp;    
							  var user_ans=$("input:radio[name='answer']:checked").val();
							  var corr_ans=$("input:hidden[name='correct_answer']").val();
							  var qid=$("input:hidden[name='qid']").val();
							   var qno=$("input:hidden[name='qno']").val();
							  var question=$("input:hidden[name='question']").val();
							   var subject=$("input:hidden[name='subject']").val();
							   var result="user_ans="+user_ans+"&question="+question+"&qid="+qid+"&correct_ans="+corr_ans+"&subject="+subject+"&qno="+qno;
							  //var result="user_ans="+user_ans+"&correct_ans="+corr_ans;
							  xhttp = new XMLHttpRequest();
							  xhttp.onreadystatechange = function() {
							    if (this.readyState == 4 && this.status == 200) {
							      document.getElementById("question").innerHTML = this.responseText;
							    }
							  };
							  xhttp.open("POST", "question.php", true);
							  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
							  xhttp.send(result);
							}
							</script>
						<?php /*
						function fisheryates(){
							$arrayName = array('' => , );
							
						}*/
						?>							

					
				
			  </div>
			</div>
		</div>
	</div>
</div>

<!--footer -->
<div class="container-fluid" id="footer" style="background-color: black">
	<div class="row">
		<div class="col-md-12">
			<br>
			<p class="text-center v-center" style="color: white">All rights reserved. Copyright &copy;OES team. Team Online Examination System 2017</p><br>
		</div>
		<!-- <div class="col-md-6">
			<a href="#" class="fa fa-facebook"></a>
			<a href="#" class="fa fa-twitter"></a>
		</div> -->
	</div>
</div>

<?php
			
?>	

		
</body>
</html>