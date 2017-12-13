<?php
include 'connection.php'; 
include 'global.php';
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<?php include 'include/lib.php'; 
	?><!-- 
	<link rel="stylesheet" href="<?=$base_url?>/lib/css/TimeCircles.css">
	<script type="text/javascript" src="<?=$base_url?>/lib/js/TimeCircles.js"></script> -->

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


<form class="navbar-form navbar-right">
       		<p style="color: white"><?php echo ucwords($_SESSION['userName']); ?>
         	<a href="logout.php" class="btn btn-default">Logout</a>
	</form>
     
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


<!-- container begins -->

<!-- container ends -->

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<h2 style="text-align: center;">Welcome our valuable users</h2>
			<p style="text-align: center;">You can select the subject of your field from the subject list and practice</p>
			<h3 style="text-align: center;">Feel free to learn</h3>

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
							        <div id="time" class="time">00:30</div>
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
						                    document.getElementById('time').style.backgroundColor = "red";
						                    alert("Exam time Finished. You did't Submitted any answers. Try Another Question");
						                    location.href="wordquestion.php";
						                }
						            }, 1000);
						        }

						        window.onload = function() {
						            setUP();
						            showQuestions();
						            var minutesLeft = 30, //Change to minutes you need -- counted in seconds -- minus one second 
						                display = document.querySelector('#time');
						            startTimer(minutesLeft, display);
						                        document.getElementById('questions').onclick = setUP;
						                        document.getElementById('questions').onclick = showSpinner;


						        };
						    </script>
						  </div>
					</div>
				</div>

				<div class="col-md-9">
					<br>
					<div class="panel panel-default">

					  <div class="panel-heading">
					  	<h4 style="margin-left: 50px;">
					  		<p><b>Candiate Name: <?=$_SESSION['userName']?></b></p> <br>
					  		<p><b>Roll No.: <?=$_SESSION['userId']?></b></p>
					  	</h4>
					  </div>

				  	<div class="panel-body">
						<div id="question">
						<form method="post" action="validate_answer.php">
							<div class="col-md-12">
					  			<h2>
							 	<?php

							 	function generate_random()
							 	{
							 		$conn=makeconnection();
								 	$sql5="SELECT qno FROM word_questions";
									$result5=mysqli_query($conn,$sql5);
									$no_of_rows = mysqli_num_rows($result5);
									$random=mt_rand(1,$no_of_rows);
									//echo $no_of_rows;
									$sql4="SELECT qid FROM word_answer where qid='$random'";
									  $result4 = mysqli_query($conn,$sql4);
								      $row = mysqli_fetch_array($result4);
								      //$active = $row['active'];
								      
								      $count = mysqli_num_rows($result4);
								      
								      // If result matched this random number  and previous question, table row must be 1 row
										
								      if($count == 1) {
								         generate_random();
								        } 
								       else{
								       	generate_question($random);
								       }
							      }
									generate_random();
							  	function generate_question( $rand){
							  	$random=$rand;
								$sql="SELECT Qno,Question,Answer FROM word_questions where qno='$random'";
								$connection=makeconnection();
								$result = $connection->query($sql);

								if ($result->num_rows > 0) {
								    // output data of each row
								    while($row = $result->fetch_assoc()) {

						       		 	$question=$row["Question"];
								      	$qno=$row['Qno'];
								      	 ?> 
								    <input type="hidden" name="qno" value="<?php echo $qno; ?>" >

								<?php echo $question;  ?>

							</div>
								<div class="col-md-2">
								  	<div class="radio-inline">
									 <label> Ans:<textarea rows='2' cols='65' name="answer" id="answer" required></textarea></label>
									</div>
								</div> 

					       
					    
					   <?php }
					} else {
					    echo "0 results";
					}
				
						}
					  			?>
									
										
					  			</h2><br><hr>
							
							</div>
							</div><br><hr>
					
								<button id="next" type="submit" class="btn-group btn-success btn-sm btn-group-justified"  data-toggle="modal" value="show" >Check Result</button>
								
							
						</form>
					  </div>
				
						</div>
				</div>

			</div>
		</div>
	</div>
</div>


<!--footer begins -->

<footer class="container-fluid" id="footer" style="background-color: black">
	<div class="row">
		<div class="col-md-12">
			<br>
			<p class="text-center v-center" style="color: white">All rights reserved. Copyright @OES team. Team Online Examination System 2017</p><br>
		</div>
		
	</div>
</footer>

</body>
</html>