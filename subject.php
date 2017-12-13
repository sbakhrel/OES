<?php 
include 'connection.php'; 
include 'global.php';
session_start();
	if ($_SESSION['userName']==false)
		 {
			header("Location:" .$base_url. "index.php");
		}
		$deleterecords = "TRUNCATE TABLE user_answer"; //empty the table of its current records
					  		$connection=makeconnection();
							mysqli_query( $connection, $deleterecords );
		$deleterecords1 = "TRUNCATE TABLE word_answer"; //empty the table of its current records
					  		$connection=makeconnection();
							mysqli_query( $connection, $deleterecords1 );
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<?php include 'include/lib.php'; ?>
</head>

<body style="background-color: #e6e3ee">
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

     <!--  <ul class="nav navbar-nav ">
         <li><a href="#home">Home</a></li>
        <li><a href="#feature">Features</a></li>
        <li><a href="#syllabus">Syllabus</a></li>
      </ul> -->

      <form class="navbar-form navbar-right">
       		<p style="color:#eedfdf"><?php echo ucwords($_SESSION['userName']); ?>
         	<a href="logout.php" class="btn btn-default">Logut</a>
	</form>

	     
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<h2 style="text-align: center;">Welcome our valuable users</h2>
			<p style="text-align: center;">You can select the subject of your field from the subject list and practice</p>
			<h3 style="text-align: center;">Feel free to learn</h3>
		</div>
	</div>
</div>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<br><div class="panel panel-default">
			  <div class="panel-heading">
			  </div>

			  <form method="post" action="multiple.php">
			  <div class="panel-body">

					<h1 style="text-align: center;">Choose Exam</h1><br>

				
					<div id="mul">
						<button type="button" class="btn-group btn-sm btn-group-justified" onclick="gSubject()"><h4>Multiple Choice Questions</h4> </button>
							<script type="text/javascript">
								function gSubject(){
									document.getElementById("multipleChoice").style.display="";
									document.getElementById("word").style.display="none";
								}

							</script>
							<br>
					</div>

					<div class="row" id="multipleChoice" style="display: none;">
					<h4>
						<div class="col-md-offset-5">
							<div class="radio-inline">
							  <label><input type="radio" name="subject" id="option1" value="mbbs" required="">Mbbs</label>
							</div>

			   				<div class="radio-inline">
							  <label><input type="radio" name="subject" id="option1" value="csit" >Csit</label>
							</div>

			   				<div class="radio-inline">
							  <label><input type="radio" name="subject" id="option1" value="engineering" >Engineering</label>
							</div>
						</div>
					</h4>
					</div>

					<div id="word">
						<button type="button" class="btn-group btn-sm btn-group-justified" onclick="window.location.href='wordquestion.php'"><h4>Word Questions</h4></button>
							<script type="text/javascript">
								function geSubject(){
									document.getElementById("wordQues").style.display="";
									document.getElementById("mul").style.display="none";
								}

							</script>
							<br>
					</div>

					
					</div>
					
					<div>
						<br>
						<button type="submit" class="btn-group btn-sm btn-group-justified btn-success" ><h3>START EXAM</h3></button>
					</div>
			  	</div>
			 </form>

		</div>
	</div>
</div>

<div class="container-fluid" id="footer" style="background-color: black">
	<div class="row">
		<div class="col-md-12">
			<br>
			<p class="text-center v-center" style="color: white">All rights reserved. Copyright &copy;OES team. Team Online Examination System 2017</p><br>
		</div>
	</div>
</div>

</body>

</html>