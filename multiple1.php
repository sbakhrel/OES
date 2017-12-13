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
       
          <a href="logout.php" class="btn btn-default">Logout</a>
     <!--      <button type="button" id="gb" class="btn btn-success" onclick="goBack()">
          		<span class="glyphicon glyphicon-refresh" aria-hidden="true"></span> Refresh
          </button>
          <script type="text/javascript">
          			function goBack(){

    					document.getElementById("gb").onclick = function () {
    						session_destroy();
       						location.href = "index.php";
    					 };
          			}	
					</script> -->

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
							        <div id="time" class="time">05:00</div>
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
						                    alert("Exam time Finished.");
						                    location.href="result.php";
						                }
						            }, 1000);
						        }

						        window.onload = function() {
						            setUP();
						            showQuestions();
						            var minutesLeft = 299, //Change to minutes you need -- counted in seconds -- minus one second 
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
					<br><div class="panel panel-default">

				  <div class="panel-heading">
				  	<h4 style="margin-left: 50px;">
				  		<p><b>Candiate Name: <?=$_SESSION['fullName']?></b></p> <br>
				  		<p><b>Roll No.: <?=$_SESSION['userId']?></b></p>
				  	</h4></div>

				  <div class="panel-body">
					
					<div id="question">
						<div class="col-md-12">
				  			
					  	<?php if(isset($_POST['subject']))
					  	{
					  		$_SESSION['sub']=$_POST['subject'];	
					  		$_SESSION['num']=1;
					  		$_SESSION['score']=0;
					  	}
					  		
				  		$connection=makeconnection();								
			  			$sql="SELECT qid,question,ans1,ans2,ans3,ans4,correct_ans FROM ".$_SESSION['sub']." ORDER BY RAND() LIMIT 1";
			  			//$sql="SELECT qid,question,ans1,ans2,ans3,ans4,correct_ans FROM ".$_SESSION['sub']." ORDER BY qid LIMIT 1";
						$result = $connection->query($sql);
						if ($result->num_rows > 0) 
							{
							    // output data of each row
							    while($row = $result->fetch_assoc()) {
					      
					       		   $question=$row["question"];
							       $answer1=$row["ans1"];
							       $answer2=$row["ans2"];
							       $answer3=$row["ans3"];
							       $answer4=$row["ans4"];
							       $correct_answer=$row["correct_ans"];?>
							       <h2><?=$_SESSION['num'].". ".$question ;?></h2>

						</div>

						<form method="POST" id="option">
							<div class="col-md-3">
							  	<div class="radio-inline">
								  <input type="radio" class="radio1"  name="answer"  value="1"> (i) <?=ucwords($answer1)?>
								</div>
							</div>

							<div class="col-md-3">
								<div class="radio-inline text-center">
								  <input type="radio"  class="radio1" name="answer"  value="2" > (ii) <?=ucwords($answer2)?>
								</div>
							</div>
							
							<div class="col-md-3">
								<div class="radio-inline">
								  <input type="radio" class="radio1" name="answer"  value="3"> (iii) <?=ucwords($answer3)?>
								</div>
							</div>
							
							<div class="col-md-3">
								<div class="radio-inline">
								  <input type="radio" class="radio1" name="answer"  value="4"> (iv) <?=ucwords($answer4)." ".$_SESSION['score']?>
								</div>
								<div id="ans" style="display: none;"><?=$correct_answer;?></div>
							</div><br><br>
							
					    <?php } } else {
						    echo "0 results";
						}?>
						<hr>
					
					</div>
					<br><hr><br>
					
			
						<button id="next" type="button" class="btn-group btn-success btn-sm btn-group-justified"  data-toggle="modal" data-value="<?=$_SESSION['num']+=1;?>" >Next</button>
					</form>

							<script>
							$("#next").click(function(){
								if($('.radio1').is(':checked'))
								{
									
									var value=$('input[name=answer]:checked', '#option').val();
									
									 var answer=$('#ans').html();

									if (value==answer) 
									{
										//alert('Correct answer');
										<?php $_SESSION['score']+=5; ?>
										var score=<?=$_SESSION['score']+=5?>;
										alert('Your Score is '+score);
									}
									else
									{
										alert('The correct answer is '+answer);
									}

								 	showCustomer(value);
								 		
								}
								else
								{
									alert("Plese select an answer");
								}
							});
							
								function showCustomer(str) {
								var xhttp;    
								if (str == ""){
								  document.getElementById("txtHint").innerHTML = "";
								  return;
								}
								xhttp = new XMLHttpRequest();
								xhttp.onreadystatechange = function() {
								if (this.readyState == 4 && this.status == 200) {
								     document.getElementById("question").innerHTML = this.responseText;
								    }
								};
								xhttp.open("GET", "question.php?q="+str, true);
								xhttp.send();
								}
								
							</script>

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