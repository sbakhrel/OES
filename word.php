
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
	<?php include 'include/lib.php'; ?>

<!-- 	<script language="javascript" type="text/javascript">
		var a;
      function showentry()
         {
         if (window.XMLHttpRequest)
            {// code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp=new XMLHttpRequest();
            }
         else
            {// code for IE6, IE5
                xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
            }
        xmlhttp.onreadystatechange=function()
            {
            if (xmlhttp.readyState==4 && xmlhttp.status==200)
               {
                  document.getElementById("question").innerHTML=xmlhttp.responseText;
               }
            }
        xmlhttp.open("GET","question.php",true);//whatever the contents of file                                       details.php displayed in right div
        xmlhttp.send();
        }
       </script> -->

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
         <li><a href="#home">Home</a></li>
        <li><a href="#feature">Features</a></li>
        <li><a href="#syllabus">Syllabus</a></li>
      </ul>

      <form class="navbar-form navbar-right">
       
          <button type="button" class="btn btn-sm"  data-toggle="modal" id="logout" >LogOut</button>
          <script type="text/javascript">
    					document.getElementById("logout").onclick = function () {
       						location.href = "index.php";
    					 };
					</script>

      </form>
     
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<!-- Header starts -->

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<h2 style="text-align: center;">Welcome our valuable users</h2>
			<p style="text-align: center;">You can select the subject of your field from the subject list and practice</p>
			<h3 style="text-align: center;">Feel free to learn</h3>
		</div>
	</div>
</div>

<!-- Container starts -->
<div class="container-fluid">
	<div class="row">
		<div class="col-md-3">
			<h3 class="text-center" style="background-color: grey;padding: 7px;">Time Remaining</h3>
			<div class="list-group text-center">
			  <!-- <a href="#" class="list-group-item">BSc. CSIT</a>
			  <a href="#" class="list-group-item">MBBS</a>
			  <a href="#" class="list-group-item">Engineering</a> -->
			</div>
			<div class="text-center list-group-item">
				<h2 id="time"></h2>
				<script>
					// Set the date we're counting down to
					var countDownDate = new Date("Jan 5, 2018 15:06:30").getTime();

					// Update the count down every 1 second
					var x = setInterval(function() {

					  // Get todays date and time
					  var now = new Date().getTime();

					  // Find the distance between now an the count down date
					  var distance = countDownDate - now;

					  // Time calculations for days, hours, minutes and seconds
					  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
					  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

					  // Display the result in the element with id="demo"
					  document.getElementById("time").innerHTML =minutes + "m " + seconds + "s ";

					  // If the count down is finished, write some text 
					  if (distance < 0) {
					    clearInterval(x);
					    document.getElementById("time").innerHTML = "EXPIRED";
					  }
					}, 1000);
					</script>
			</div>
		</div>

			<!-- Question section-->

		<div class="col-md-9">
			<br><div class="panel panel-default">
			  <div class="panel-heading">
			  	<h4 style="margin-left: 50px;">
			  		<p><b>User name: <?php echo $_SESSION['user']?></b></p> <br>
			  		<p><b>Roll No.:$_SESSION['rid']</b></p>
			  	</h4></div>
			  <div class="panel-body">
				<form>
				<div id="question">
					<div class="col-md-12">
			  			<h2>
			  			<?php
			  										

			$sql="SELECT qid,question,ans1,ans2,ans3,ans4,correct_ans FROM physics ORDER BY RAND() LIMIT 1";

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
					       echo $question;
	
			       
			    
			    }
			} else {
			    echo "0 results";
			}
		

			  			?>
							
								
			  			</h2><br><hr>
					</div>
					<div class="col-md-12">
					  	<div class="radio-inline form-group">
						  <label for="usr">Answer:</label>
						  <input type="text" class="form-control" id="answer" placeholder="Type your answer">
						</div><
					</div>
					</div><br><hr>
			
						<button id="next" type="submit" class="btn-group btn-sm btn-group-justified"  data-toggle="modal" value="show" onclick="showentry()">Next</button>
						<script type="text/javascript">
							$('#foo').submit(function(event){
							  $.ajax({
							    url: 'multiple.php',
							    type: 'post',
							    dataType:'html',   //expect return data as html from server
							   data: $('#foo').serialize(),
							   success: function(response, textStatus, jqXHR){
							      $('#question').html(response);   //select the id and put the response in the html
							    },
							   error: function(jqXHR, textStatus, errorThrown){
							      console.log('error(s):'+textStatus, errorThrown);
							   }
							 });
							 });
						</script>
					
				</form>
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
			<p class="text-center v-center" style="color: white">All rights reserved. Copyright @OES team. Team Online Examination System 2017</p><br>
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