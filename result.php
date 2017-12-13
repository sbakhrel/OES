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


     <form class="navbar-form navbar-right">
       		<p style="color: white"><?php echo ucwords($_SESSION['userName']); ?>
         	<a href="logout.php" class="btn btn-default">Logout</a></p>
	</form>
     
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
		<h2 style="text-align: center;">Your Result</h2>
			<br><div class="panel panel-default">
			  
				<?php
					$count=0;
					$con=makeconnection();
					$sql="SELECT * FROM user_answer";
					$result = mysqli_query($con,$sql);


					echo "<div class='row'>"
				    . "<div class='table-responsive'>"
				    . "<table class = 'table table-striped'>"
				    . "
					    <tr>
					    <th>Qn</th>
					    <th>Questions</th>
					    <th>Your Answer</th>
					    <th>Correct Answer</th>
					    </tr>"; 

					while($row = mysqli_fetch_array($result))
					{
						$count++;
						$correct_ans=$row['correct_ans'];
						$user_ans=$row['user_ans'];
					echo "<tr style='height: 0;'>";
					echo "<td bgcolor='#919294'  >" . $count . "</td>";
					echo "<td bgcolor='#a3a5a7'>" . $row['question'] . "</td>";
					if ($correct_ans==$user_ans) {
						echo "<td bgcolor='#7FFF7F'>" . $row['user_ans'] . "</td>";
					}
					else{
						echo "<td bgcolor='#FF857F'>" . $row['user_ans'] . "</td>";
					}
					echo "<td bgcolor='#7FFF7F'>" . $row['correct_ans'] . "</td>";

					echo "</tr>";
					}
					echo "</table></div></div>";
					$result1=mysqli_query($con,"SELECT * FROM user_answer where user_ans=correct_ans");
					 $count = mysqli_num_rows($result1);
					 if($count>=5){
					 	echo "<h3 class='text-center'>Congratulations! You have Passed!</h3>";
					 }
					 else{
					 	echo "<h3 class='text-center'>Sorry !!You have Failed.</h3>";
					 }
					?>
					<h3 class="text-center">Marks Scored:<?php echo $count; ?></h3>
					<div class="row">
						<div class="col-md-offset-5">
							<a href="subject.php"><input class="btn btn-success" type="button" name="submits" value="Choose Another Subject"></a>
						</div>
					</div>
						
	 

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


	