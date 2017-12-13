<?php

include '../global.php';
include '../connection.php';
session_start();

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <title>Admin Area | Dashboard </title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/admin_style.css" rel="stylesheet">
    <script src="https://cdn.ckeditor.com/4.7.0/standard/ckeditor.js"></script>

  </head>

  <body>

<!-- Nav bar -->

<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Admin Panel</a>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Dashboard</a></li>
<!--             <li><a href="questions.php">Questions</a></li>
        <li><a href="users.php">Users</a></li> -->

      </ul>

       <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><?php echo $_SESSION['userName']; ?></a></li>
        <li><a href="../logout.php">Logout</a></li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>

<div id="header">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard <small>Manage  OES</small></h1>
      </div>
     <!--  <div class="col-md-2">
        <div class="dropdown create">
          <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown"   aria-haspopup="true" aria-expanded="true">
            Create Content
            <span class="caret"></span>
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
            <li><a type="button" data-toggle="modal" data-target="#addQuestions"> Add Questions</a></li>
            <li><a type="button" data-toggle="modal" data-target="#addUsers" >Add User</a></li>
          </ul>
        </div>
      </div> -->
    </div>
  </div>
</div>

<section id="breadcrumb">
  <div class="container">
    <ol class="breadcrumb">
      <li class="active">Dashboard</li>
    </ol>
  </div>
</section>

<section id="main">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
       
        <div class="list-group">
          <a href="index.php" class="list-group-item" style="background-color: grey;">
            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard
          </a>
          <a href="questions.php" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Questions <!-- <span class="badge">12</span> --></a>
          <a href="users.php" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Members <!-- <span class="badge">5</span> --></a>
          <a href="feedback.php" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Feedback <!-- <span class="badge">5</span>--></a>
        </div>


      </div>
      <div class="col-md-9">

        <!--Website Overview-->

        <div class="panel panel-default">
          <div class="panel-heading" style="background-color: grey">
            <h3 class="panel-title">Website Overview</h3>
          </div>
          <div class="panel-body">
            <div class="col-md-4">
              <div class="well dash-box">
                <h2><span class="glyphicon glyphicon-user" aria-hidden="true"></span><?php
                  $connection=makeconnection();
                  $sql5="SELECT * FROM user";
                  $result5=mysqli_query($connection,$sql5);
                  $no_of_users = mysqli_num_rows($result5);
                  echo $no_of_users;
                ?></h2>
                <h4> Users </h4>
              </div>
            </div>

            <div class="col-md-4">
              <div class="well dash-box">
                <h2><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span><?php
                  $sql1="SELECT * FROM mbbs";
                  $result1=mysqli_query($connection,$sql1);
                  $no_of_mbbs = mysqli_num_rows($result1);
                   $sql2="SELECT * FROM csit";
                  $result2=mysqli_query($connection,$sql2);
                  $no_of_csit = mysqli_num_rows($result2);
                   $sql3="SELECT * FROM engineering";
                  $result3=mysqli_query($connection,$sql3);
                  $no_of_engg = mysqli_num_rows($result3);
                  $sql4="SELECT * FROM word_questions";
                  $result4=mysqli_query($connection,$sql4);
                  $no_of_word_question = mysqli_num_rows($result4);
                  $total_question=$no_of_engg+$no_of_csit+$no_of_mbbs+$no_of_csit+$no_of_word_question;
                  echo $total_question;
                ?></h2>
                <h4> Questions </h4>
              </div>
            </div>

            <div class="col-md-4">
              <div class="well dash-box">
                <h2><span class="glyphicon glyphicon-stats" aria-hidden="true"></span><?php
                  $sql6="SELECT * FROM feedback";
                  $result6=mysqli_query($connection,$sql6);
                  $no_of_feedback = mysqli_num_rows($result6);
                  echo "\t".$no_of_feedback;
                ?></h2>
                <h4> Feedbacks </h4>
              </div>
            </div>
          </div>
        </div>

      <!--Latest Users -->



      </div>
    </div>
  </div>
</section>

    <footer id="footer">
      <p>Copyright OES, &copy; 2017</p>
    </footer>

<!--Modals-->

<!--Add Multiple choice Question Modal-->
   <!--  <div class="modal fade" id="addQuestions" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
        
        <form>

          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Add Questions</h4>
          </div>
         
          <div class="modal-body">

            <div class="form-group">
              <label>Add Questions</label>
              <input type="text" class="form-control" name="question" placeholder="Type here" required>
            </div>

            <div class="form-group">
              <label>Option 1</label>
              <input type="text" class="form-control" name="ans1" placeholder="Add Option 1"  required>
            </div>

            <div class="form-group">
              <label>Option 2</label>
              <input type="text" class="form-control" name="ans2" placeholder="Add Option 2"  required>
            </div>

            <div class="form-group">
              <label>Option 3</label>
              <input type="text" class="form-control" name="ans3" placeholder="Add Option 3"  required>
            </div>

            <div class="form-group">
              <label>Option 4</label>
              <input type="text" class="form-control" name="ans3" placeholder="Add Option 4"  required>
            </div>

            <div class="form-group">
              <label>Right Answer</label>
              <input type="text" class="form-control" name="correct_ans" placeholder="Add correct answer"  required>
            </div>

            <div class="checkbox-inline myCheck">
              <label><input type="checkbox" value="csit">BSc CSIT</label>
            </div>
            <div class="checkbox-inline myCheck">
              <label><input type="checkbox" value="mbbs">MBBS</label>
            </div>
            <div class="checkbox-inline myCheck">
              <label><input type="checkbox" value="engineering">Engineering</label>
            </div>
          
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-success" id="changes" onclick="validateForm()">Save changes</button>
          </div>
            <script type="text/javascript">
                      function validateForm() {
                         var x=document.getElementById("myCheck").checked;
                          if (x == true && ($_POST['ans1']==$_POST['correct_ans'] || $_POST['ans2']==$_POST['correct_ans'] || $_POST['ans3']==$_POST['correct_ans'] || $_POST['ans4']==$_POST['correct_ans']))
                          {
                              insertIntoDb();
                          }
                          else{
                              alert("Please select the prefered subject");
                              return false;
                          }
                      }
            </script>
        </form>
        </div>
      </div>
    </div> -->


  
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    
    <script src="js/bootstrap.min.js"></script>
   
  </body>
</html>
