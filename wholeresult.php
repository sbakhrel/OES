<?php 
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


<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <h2 style="text-align: center;">Final Result</h2>
      

      


          <div class="col-md-12">
      <br><div class="panel panel-default">
        <div class="panel-heading">
          <h4 style="margin-left: 50px;">
            <p><b>Candiate Name: <?=$_SESSION['fullName']?></b></p> <br>
            <p><b>Roll No.: <?=$_SESSION['userId']?></b></p>
          </h4></div>
        <div class="panel-body">
        
         <div id="question">
           <div class="col-md-12">
          <table class="table table-striped table-hover">
                <tr>
                  <th>Qno</th>
                  <th>Question</th>
                  <th style="width: 30%">Your Answer</th>
                  <th>Correct Answer</th>
                  <th>Marks</th>
                </tr>
                 <?php
                  $server="localhost";
                  $user="root";
                  $pass="";
                  $db="online_exam";
                  $id=0;
                  $total_marks=0;
                  $conn=new mysqli($server,$user,$pass,$db);
                  if($conn->connect_error){
                    die("Connection Failed ".$conn->connect_error);
                  }
                  $sql=mysqli_query($conn,"SELECT question,answer,UserAns,marks FROM word_answer");
                 while($row = mysqli_fetch_array($sql)){
                      $question=$row['question'];
                      $answer= $row['answer'];
                      $UserAns=$row['UserAns'];
                      $marks=$row['marks'];
                      
                     $total_marks=$marks+$total_marks;
                 
                echo"<tr>";
                //echo"<td><input type='radio' name='feedno' value='".$id."' required></td>";
                $id=$id+1;
                  echo"<td>".$id." </td>";
                  echo"<td>".$question."</td>";
                  echo"<td>".$answer."</td>";
                  echo"<td>".$UserAns."</td>";
                  echo"<td>".$marks."</td>";
                }
              echo '<tr>
                  <th>Total</th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th>'.$total_marks.'</th>
                </tr>
                </table>';
                if($total_marks>=8){
            echo "<h3 class='text-center'><b>Congratulations! You have Passed!</b></h3>";
           }
           else{
            echo "<h3 class='text-center'>Sorry !!You have Failed.</h3>";
           }
          ?>
          <h3 class="text-center">Marks Scored:<?php echo $total_marks; ?></h3>
          <div class="row">
            <div class="col-md-offset-5">
              <a href="subject.php"><input class="btn btn-success" type="button" name="submits" value="Choose Another Subject"></a>
            </div>
          </div>
           </div>
        </div>
        </div>
        </div>
        

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