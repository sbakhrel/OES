
<?php 
	include 'global.php';
	include 'connection.php';
	session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<?php include 'include/lib.php'; ?>
	<style>

}
</style>
</head>
<!-- Sign up Modal-->
	<div id="signupModal" class="modal fade" role="dialog">
	  <div class="modal-dialog">

	    <!-- Modal content-->
	    <div class="modal-content"  >
		<form method="post" action="log.php">
	      <div class="modal-header" style="background-color: #d8cbcb">
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		        <h4 class="modal-title">Register a account</h4>
	      </div>

	      <div class="modal-body" style="background-color: #d8cbcb">
		      	<div class="row">
		      		<div class="col-md-6">
		      			<div class="form-group">
						    <label for="user">First Name </label>
						    <input type="text" class="form-control"  id="firstName" name="firstName" required>
				    	</div>
		      		</div>
		      		<div class="col-md-6">
		      			<div class="form-group">
						    <label for="user">Last Name </label>
						    <input type="text" class="form-control"  id="lastName" name="lastName" required>
						</div>
		      		</div>
		      	</div>
	        	<div class="form-group">
					    <label for="user">User name: </label>
					    <input type="text" class="form-control"  name="userName" required>
				</div>

				<div class="form-group">
					    <label for="email">Email address:</label>
					    <input type="email" class="form-control" id="email" name="email" required>
				 </div>

				<div class="form-group">
					    <label for="pwd">Password:</label>
					    <input type="password" class="form-control" id="password" name="password" required>
			 	</div>
				  <button id="sign" type="submit" name="btnSignUp" class="btn btn-default btn-block" style="background-color: #aea8a8"  >Create My Account</button>
					</script>
				  <p>Already have a account?
				  <a href="<?=$base_url?>/login.php">Login</a>

	      </div>
	      <div class="modal-footer" style="background-color: #d8cbcb">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	      </div>
	      </form>
	    </div>

	  </div>
	</div>

<!--Login Modal-->

	<div id="loginModal" class="modal fade" role="dialog">
	  <div class="modal-dialog">

	    <!-- Modal content-->
	    <div class="modal-content"  >
		<form method="POST" action="log.php">
	      <div class="modal-header" style="background-color: #d8cbcb">
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		        <h4 class="modal-title">Login</h4>
	      </div>

	      <div class="modal-body"  style="background-color: #d8cbcb">

	        	<div class="form-group">
					    <label for="name">Username or Email: </label>
					    <input type="text" class="form-control" id="userName" name="userName" placeholder="Username or Email" required autofocus>
				</div>

				<div class="form-group">
					    <label for="password">Password:</label>
					    <input type="password" name="password" class="form-control" id="logInPass" required>
			 	</div>
				  <button name="btnLogin" type="submit" class="btn btn-default btn-block" style="background-color: #aea8a8">Login</button>


	      </div>
	      <div class="modal-footer" style="background-color: #d8cbcb">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	      </div>
	      </form>
	    </div>

	  </div>
	</div>

<body style="background-color: #e6e3ee; margin-top: 0" >

<!--Home Starts-->	
<div id="home">
	<?php include 'include/menu.php' ?>	
</div>
<!-- For login Error -->
<div class="row">
	<div class="col-md-12">


	<!-- For Error value -->
		<?php 
		if(!isset($_SESSION['loginError'])==null):?>
			<div class="alert alert-danger alert-dismissible fade in" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="close">
				<span aria-hidden="true">&times;</span>
			</button>
				<div align="center"><?=$_SESSION['loginError'];?></div>
			</div>
		<?php endif; $_SESSION['loginError']=null;?>

		<!-- For error feedback -->
		<?php 
		if(!isset($_SESSION['signUpError'])==null):?>
			<div class="alert alert-danger alert-dismissible fade in" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="close">
				<span aria-hidden="true">&times;</span>
			</button>
				<div align="center"><?=$_SESSION['signUpError'];?></div>
			</div>
		<?php endif; $_SESSION['signUpError']=null;?>


	<!-- For Success value -->
		<?php 
		if(!isset($_SESSION['signUpOk'])==null):?>
			<div class="alert alert-success alert-dismissible fade in" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="close">
				<span aria-hidden="true">&times;</span>
			</button>
				<div align="center"><?=$_SESSION['signUpOk'];?></div>
			</div>
		<?php endif; $_SESSION['signUpOk']=null;?>


		<!-- For success feedback -->
		<?php 
		if(!isset($_SESSION['btnFeedbackOk'])==null):?>
			<div class="alert alert-success alert-dismissible fade in" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="close">
				<span aria-hidden="true">&times;</span>
			</button>
				<div align="center"><?=$_SESSION['btnFeedbackOk'];?></div>
			</div>
		<?php endif; $_SESSION['btnFeedbackOk']=null;?>

	</div>
</div>
	<div class="container-fluid text-center"  style="background-color: black">
		<div class="row">
		
		<button class="kc_fab_main_btn">
			<a href="#home" class="noColor">
				<i class="fa fa-home " aria-hidden="true"></i>
			</a>
		</button>
				
				<!-- Carsoul Starts -->

				<div id="carousel-example-generic" class="carousel slide " data-ride="carousel">
				  <!-- Indicators -->
				  <ol class="carousel-indicators" style="margin-bottom: 120px;">
				    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
				    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
				    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
				  </ol>

				  <!-- Wrapper for slides -->
					  <div class="carousel-inner" role="listbox">
					    <div class="item active">
					    	<img src="lib/img/2.jpg" class="img-responsive">
					      <div class="carousel-caption"> 
							<h1 class="fadeInDown">Exam Preparation Simplified</h1>
					        <p>PRACTICE ANALYZE AND IMPROVE</p>
					        <form method="post" action="checkSession.php">
						        <button type="submit" name="gettingStarted" class="btn btn-success btn-lg" data-toggle="modal" data-target="#signupModal">Getting Started</button>
					       	</form>
					      </div>
					    </div>
					    <div class="item" >
					      <img src="lib/img/3.jpg" class="img-responsive" >
					      <div class="carousel-caption">
							<h1 class="fadeInDown" >Exam Preparation Simplified</h1>
					        <p>PRACTICE ANALYZE AND IMPROVE</p>
					        <form method="post" action="checkSession.php">
						        <button type="submit" name="gettingStarted" class="btn btn-success btn-lg" data-toggle="modal" data-target="#signupModal">Getting Started</button>
					       	</form>
					      </div>
					    </div>
					    <div class="item">
					      <img src="lib/img/4.jpg" class="img-responsive" >
					      <div class="carousel-caption">
					      	<h1 class="fadeInDown" >Exam Preparation Simplified</h1>
					        <p>PRACTICE ANALYZE AND IMPROVE</p>
					        <form method="post" action="checkSession.php">
						        <button type="submit" name="gettingStarted" class="btn btn-success btn-lg">Getting Started</button>
					       	</form>
					      </div>
					    </div>
					  </div>

				<!-- Controls -->

				<!--Get Started starts-->
				

				<!--Get Started Ends-->

				  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
				    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
				  </a>
				  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
				    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
				  </a>


				<!-- carsoul ends -->

				
					
				
			

				<h1 style="color: white">Best Exam Preparation for You. Start Now!</h1>
                <p style="color: white">Boost your exam preparation with Testbook to crack the most popular competitive exams in Nepal.</p> 
                <p style="color: white">Select your course and get started.</p>

			</div>
		</div>
	</div>

<!--Home Ends-->




<!--About Starts-->

	<div class="container-fluid " id="feature" >
		<div class="row">
			<div class="col-md-8">
					<div class="panel panel-default">
					  <div class="panel-heading" style="background-color: grey"><h1>What our system provides</h1></div>
					  
					  <div class="panel-body">
					  	<p>The Online Examination Management System (OEMS) is a web    application. This system will help the examinees to practice the exam system in terms of users that are registered in the system. This Online Examination Management System enables the users to create their own login. Then users can login with their unique login id and undertake the test available for an individual. The user can practice the online examination and report the outcome in a couple of time. Then the system generates the results with the help of the right answers in database. Users can give the online exam in term of Multiple Choice Questions (MCQ) where random number of question are generated by the system. They can analyze their own performance level which helps them to improve in their academics. 
						Today Online Examination System has become a fast growing examination method because of its speed and accuracy. It is also needed less manpower to execute the examination. Almost all organizations now-a-days, are conducting their objective exams online. It saves students time in examinations. Organizations can also easily check the performance of the student that they give in an examination. As a result of this, organizations are releasing results in less time. Mass quantity of papers are used for the purpose of examination. Implementing this system for purpose of examination, it can save lots of trees. 
						</p>
					  </div>
					</div>
			</div>
			<div class="col-md-4" id="syllabus">
				<div class="panel panel-default">
					<div class="panel-heading" style="background-color: grey"><h1>Syllabus</h1></div>
						<div class="panel-body">
							<ul class="list-group" id="syllabus_list">
							  <li class="list-group-item"><a href="#">BSc. CSIT</a></li>
							  <li class="list-group-item"><a href="#">MBBS</a></li> 
							  <li class="list-group-item"><a href="#">Engineering</a></li> 
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><br>

<!-- feedback carousel -->

	<div style="background-color: grey">
		<h2 class="text-center"><br>What our users say</h2>
		<div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
		  <!-- Indicators -->
		  <ol class="carousel-indicators">
		    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		    <li data-target="#myCarousel" data-slide-to="1"></li>
		    <li data-target="#myCarousel" data-slide-to="2"></li>
		  </ol>

		  <!-- Wrapper for slides -->

		  <?php
                  
              $conn=makeconnection();
              $sql1=mysqli_query($conn,"SELECT * FROM feedback ORDER BY RAND() LIMIT 1");
             while($row = mysqli_fetch_array($sql1))
             {
                  $id1=$row['feedno'];
                  $name1= $row['name'];
                  $email1=$row['email'];
                  $feedback1=$row['feedback'];
              }

               $sql2=mysqli_query($conn,"SELECT * FROM feedback ORDER BY RAND() LIMIT 1");
             while($row = mysqli_fetch_array($sql2))
             {
                  $id2=$row['feedno'];
                  $name2= $row['name'];
                  $email2=$row['email'];
                  $feedback2=$row['feedback'];
              }

               $sql3=mysqli_query($conn,"SELECT * FROM feedback ORDER BY RAND() LIMIT 1");
             while($row = mysqli_fetch_array($sql3))
             {
                  $id3=$row['feedno'];
                  $name3= $row['name'];
                  $email3=$row['email'];
                  $feedback3=$row['feedback'];
              }
            ?>

		  <div class="carousel-inner" role="listbox">
		    <div class="item active">
		    <h4><i><?php echo ucfirst($feedback1); ?></i><br><span style="font-style:normal;"><?php echo ucfirst($name1); ?></span></h4>
		    </div>
		    <div class="item">
		      <h4><i><?php echo ucfirst($feedback2); ?></i><br><span style="font-style:normal;"><?php echo ucfirst($name2); ?></span></h4>
		    </div>
		    <div class="item">
		      <h4><i><?php echo ucfirst($feedback3); ?></i><br><span style="font-style:normal;"><?php echo ucfirst($name3); ?></span></h4>
		    </div>
		  </div>


		  <!-- Left and right controls -->

		  <a class="left carousel-control" id="carsoul_control_left" href="#myCarousel" role="button" data-slide="prev">
		    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" id="carsoul_control_right" href="#myCarousel" role="button" data-slide="next">
		    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>
	</div>

<!--Feedback Carousel ends  -->

<!--About Ends-->

<!--Feedback -->

<div class="container-fluid" id="feedback">
	<div class="panel panel-default" style="background-color: #e6e3ee">

	  <div class="panel-heading"  style="background-color: #e6e3ee"><p><h1  class="text-center">Send Feedback</h1></p></div>

	  <div class="panel-body">
	  		<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			
			<br>
			<form method="post" action="log.php">
				<div class="form-group">
				   <label for="user"><h3>Name:</h3></label>
				   <input type="text" class="form-control" id="userName" name="userName" placeholder="Enter your name" required>
				</div>

				<div class="form-group">
				   <label for="email"><h3>Email address:</h3></label>
				   <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email address" required>
				 </div>

				<div class="form-group">
				  <label for="comment"><h3>Comment:</h3></label>
				  <textarea class="form-control" rows="5" id="comment" name="comment" placeholder="Type what you wanna say about the system" required></textarea>
				</div>

				<button type="submit" name="btnFeedback" id="btnFeedback" style="margin-left: 42%" class="btn btn-success"><h4>Send Feed Back</h4> </button>
			</form>
			<br>	
		</div>
		<div class="col-md-2"></div>
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
	</div>
</div>

		
</body>
</html>