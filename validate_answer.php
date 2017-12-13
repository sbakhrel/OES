<?php
//include 'connection.php'; 
include 'global.php';
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
			<!-- <h2 style="text-align: center;">Welcome our valuable users</h2>
			<p style="text-align: center;">You can select the subject of your field from the subject list and practice</p>
			<h3 style="text-align: center;">Feel free to learn</h3> -->

			<div class="row">
				<div class="col-md-12">
					<br>
					<div class="panel panel-default">

					  <div class="panel-heading">
					  	<h4 style="margin-left: 50px;">
					  		<p><b>Candiate Name: <?=$_SESSION['userName']?></b></p><br>
					  		<p><b>Roll No.: <?=$_SESSION['userId']?></b></p>
					  	</h4>
					  </div>

				  	<div class="panel-body">
					<?php 
						include 'tokenize.php';
						if(!isset($_POST['qno'])){
						}else{
						$qno=$_POST['qno'];
						// echo $qno;
					     $connection=makeconnection();
					    $sql="SELECT qno,question,Must_Include,Answer FROM word_questions where qno='$qno'";
						$result =mysqli_query($connection,$sql);
						$User_answer=get_user_ans();
						if ($result->num_rows > 0) {
					    // output data of each row
					        while($row = $result->fetch_assoc()) {
					        	$qid=$row['qno'];  
					        	$question=$row["question"];
					            $Must_Include=$row['Must_Include'];
					            $answer_db=$row['Answer'];
					            echo "<h1>".$question."</h1>";
					            
					        }
					       
					    }
					    ?>

					    <table class="table table-striped table-bordered">

						<?php
					    echo "<h3><tr><th>Correct Answer: </th><td>".$answer_db."</td></tr></h3>";
						$token_answer_db=tokenize($Must_Include);
					    /*echo "<br> The Database answer after tokenization answer is:  ";
					    for ($i=0; $i <count($token_answer_db) ; $i++) { 
					        echo $i."\t";
					        printf($token_answer_db[$i]);
					        echo "<br>";
					    }*/
						$stem_answer_db=stemming($token_answer_db);
						$stem_len_db=count($stem_answer_db);
					   /* echo "<br> The Stemmed database answer is:  ";
					    for ($i=0; $i <$stem_len_db ; $i++) { 
					        echo $i."\t";
					        printf($stem_answer_db[$i]);
					        echo "<br>";
					    }*/
						$db_length=count(array_filter($stem_answer_db));

						$answer_user=get_user_ans();
					    echo "<h3><tr><th> Your answer: </th><td>".$answer_user."</td</h3>";
						$token_answer_user=tokenize($answer_user);
					    $token_len_user=count($token_answer_user);
					    ?>
						</table>
					    <table class="table table-striped table-bordered">
					    	<tr>
					    		<th>Tokenized answer : </th>
							    <?php
							    for ($i=0; $i <$token_len_user ; $i++) { 
							        //echo"<h4><td>(".$i.")\t</td>";
							      	echo "<td>".$token_answer_user[$i]."</td>";
							        //echo "</h4><br>";
							    }
							    ?>
					    	</tr>
					   
					   
							
							<?php
							$stem_answer_user=stemming($token_answer_user);
							?>
							<tr>
								<th>Stemmed answer : </th>
							
								<?php
							    for ($i=0; $i <count($stem_answer_user ); $i++) { 
							        //echo"<h4>Stemmed No.:".$i."\t";
							        echo "<td>".$stem_answer_user[$i]."</td>";
							        //echo "</h4><br>";
							    }
							    ?>
							 </tr>
						 </table>

					<?php   
						$stem_len_user=count($stem_answer_user);
						
					    
					    $sum=0;
					    for ($i=0; $i <$stem_len_db ; $i++) { 
					        for ($j=0; $j < $stem_len_user; $j++) {          	
					         	similar_text( $stem_answer_user[$j],$stem_answer_db[$i] ,$percent);
					        	if( $percent>80)
					            {
					                $sum=$sum+$percent;
					            }
					           
					        }
					       
					    } 
					  $avg_score=$sum/$db_length;
					  echo "<h3>Obtained average percent is : ";
					  echo $avg_score."%";
					  $marks=(($avg_score/100)*2);
			            echo "<br></h3><h3>Obtained marks out of 2 is : ";
			            $marks= round( $marks, 1, PHP_ROUND_HALF_UP);
			                if($marks<=0.3)
			                {
			                    $marks=0;
			                }
			                elseif ($marks>0.3 && $marks<=0.7) {
			                   $marks=0.5;
			                }
			                    elseif($marks>0.7&& $marks<=1.2){
			                        $marks=1.0;
			                    }
			                    elseif($marks>1.2 && $marks<=1.7){
			                        $marks=1.5;
			                     }
			                else{
			                    $marks=2;
			                }
			            echo $marks."</h3>";
					       
						}
						if(!isset($_POST['qno']))
						{
						}else
						{
						$qno=$_POST['qno'];
						$sql1="SELECT qno,question,Must_Include,Answer FROM word_questions where qno='$qno'";
						$result =mysqli_query($connection,$sql1);
						$User_answer=get_user_ans();
						if ($result->num_rows > 0) {
					    // output data of each row
					        while($row = $result->fetch_assoc()) {
					        	$qid=$row['qno'];  
					        	$question=$row["question"];
					            $Must_Include=$row['Must_Include'];
					            $answer_db=$row['Answer'];
					            
					        }
					       
					    }

						 //$sql2="INSERT into word_answer VALUES $qid,$question,$answer_db,$User_answer,$marks";
						 $sql2="INSERT INTO word_answer SET qid='".$qid."', question='".$question."', answer='".$answer_db."', userAns='".$User_answer."', marks='".$marks."'";
						 mysqli_query($connection,$sql2);
						}
						$sql3="SELECT * FROM word_answer";
						$connection=makeconnection();
						 $result3 = mysqli_query($connection,$sql3);
								      $row = mysqli_fetch_array($result3);
								      //$active = $row['active'];
								      
								      $count = mysqli_num_rows($result3);
					if($count<=9){
					echo'<div class="row">
						<div class="col-md-offset-5">
							<a href="wordquestion.php"><input class="btn btn-success" type="button" name="submits" value="Try Next Question"></a>
						</div>

					</div>';
				}
				else{
					echo'<div class="row">
						<div class="col-md-offset-5">
							<a href="wholeresult.php"><input class="btn btn-success" type="button" name="submits" value="View total result"></a>
						</div>

					</div>';
				}
					?>
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