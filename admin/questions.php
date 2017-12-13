<?php 
  include '../connection.php';
  session_start();


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <title>Admin Area | Questions  </title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/admin_style.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  </head>



  <body>

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
            <li><a href="index.php">Dashboard</a></li>
<!--             <li class="active"><a href="questions.php">Questions</a></li>
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
          <div class="col-md-10">
            <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Questions <small>Manage Questions </small></h1>
          </div>
          <div class="col-md-2">
            <div class="dropdown create">
              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown"   aria-haspopup="true" aria-expanded="true">
                Create Content
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <li> <a href="addQuestion.php" class="list-group-item">Multiple Choice Questions</a></li>
                 <li> <a href="addWordQuestion.php" class="list-group-item">Word Questions</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    <section id="breadcrumb">
      <div class="container">
        <ol class="breadcrumb">
        <li><a href="index.html">Dashboard</a></li>
          <li class="active">Questions</li>
        </ol>
      </div>
    </section>

    <section id="main">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
           
            <div class="list-group">
              <a href="index.php" class="list-group-item" style="background-color: grey">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard
              </a>
              <a href="questions.php" class="list-group-item"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Questions <!-- <span class="badge">101</span> --></a>
              <a href="users.php" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Members <!-- <span class="badge">5</span> --></a>
              <a href="feedback.php" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Feedback <!-- <span class="badge">5</span>--></a>
            </div>
    

          </div>
          <div class="col-md-9">
    
            <!--Website Overview-->

            <div class="panel panel-default">
              <div class="panel-heading" style="background-color: grey">
                <h3 class="panel-title">Questions</h3>
              </div>
              <div class="panel-body">

                 <!--  <button type="button" id="btnCsit" class="btn btn-secondary" onclick="chooseCsit()">BSc CSIT</button>
                    <script type="text/javascript">
                      function chooseCsit(){
                        document.getElementById("divCsit").style.display="block";
                        document.getElementById("divMbbs").style.display="none";
                        document.getElementById("divEngineering").style.display="none";
                      }

                    </script> -->
                    <!-- <script type="text/javascript">
                    $(document).ready(function(){
                        $("#btnCsit").click(function(){
                            $("divCsit").show();
                            $("divMbbs").hide();
                            $("divEngineering").hide();
                        });
                    });
                    </script> -->
                 <!--  <button type="button" id="btnMbbs" class="btn btn-secondary">MBBS</button>

                  <button type="button" id="btnEngineering" class="btn btn-outline-secondary">Engineering</button> -->
               


                    <ul class="nav nav-tabs">
                      <li class="active"><a data-toggle="tab" href="#divCsit">BSc CSIT</a></li>
                      <li><a data-toggle="tab" href="#divMbbs">MBBS</a></li>
                      <li><a data-toggle="tab" href="#divEngineering">Engineering</a></li>
                      <li><a data-toggle="tab" href="#divWord">Word Questions</a></li>
                    </ul>

                     <div class="tab-content">
                        <div id="divCsit" class="tab-pane fade in active">
                            <table class="table table-striped table-hover">
                              <tr>
                                <th>ID</th>
                                <th>Questions</th>
                                <th>Option 1</th>
                                <th>Option 2</th>
                                <th>Option 3</th>
                                <th>Option 4</th>
                                <th>Right Answer</th>
                                <th>Action</th>
                              </tr>

                                 <?php            
                                     $connection=makeconnection();
                                    $sql="SELECT qid,question,ans1,ans2,ans3,ans4,correct_ans FROM csit";
                                    $result = $connection->query($sql);
                                    if ($result->num_rows > 0) 
                                      {
                                        while($row = $result->fetch_assoc()) 
                                        { 
                                          $qid=$row["qid"];                            
                                          $question=$row["question"];
                                          $answer1=$row["ans1"];
                                          $answer2=$row["ans2"];
                                          $answer3=$row["ans3"];
                                          $answer4=$row["ans4"];
                                          $correct_answer=$row["correct_ans"];?>
                                        
                                          <tr>
                                            <td><?php echo $qid; ?></td>
                                            <td><?php echo $question; ?></td>
                                            <td><?php echo $answer1; ?></td>
                                            <td><?php echo $answer2; ?></td>
                                            <td><?php echo $answer3; ?></td>
                                            <td><?php echo $answer4; ?></td>
                                            <td><?php echo $correct_answer; ?></td>
                                            <td>
                                            <form method="POST" action="deleteOperation.php">
                                              <button type="submit" name="deleteCsitQuestion" id="deleteCsitQuestion" class="btn btn-danger btn-xs" value="<?php echo $qid; ?>" style="float: right;">Delete</button>
                                            </form>
                                            </td>
                                          </tr>
                                  <?php
                                        }
                                      }
                                  ?>
                            </table>
                        </div>
                        <div id="divMbbs" class="tab-pane fade">
                          <table class="table table-striped table-hover">
                              <tr>
                                <th>ID</th>
                                <th>Questions</th>
                                <th>Option 1</th>
                                <th>Option 2</th>
                                <th>Option 3</th>
                                <th>Option 4</th>
                                <th>Right Answer</th>
                                <th>Action</th>
                              </tr>

                                 <?php            
                                     $connection=makeconnection();
                                    $sql="SELECT qid,question,ans1,ans2,ans3,ans4,correct_ans FROM mbbs";
                                    $result = $connection->query($sql);
                                    if ($result->num_rows > 0) 
                                      {
                                        while($row = $result->fetch_assoc()) 
                                        { 
                                          $qid=$row["qid"];                            
                                          $question=$row["question"];
                                          $answer1=$row["ans1"];
                                          $answer2=$row["ans2"];
                                          $answer3=$row["ans3"];
                                          $answer4=$row["ans4"];
                                          $correct_answer=$row["correct_ans"];?>
                                        
                                          <tr>
                                            <td><?php echo $qid; ?></td>
                                            <td><?php echo $question; ?></td>
                                            <td><?php echo $answer1; ?></td>
                                            <td><?php echo $answer2; ?></td>
                                            <td><?php echo $answer3; ?></td>
                                            <td><?php echo $answer4; ?></td>
                                            <td><?php echo $correct_answer; ?></td>
                                            <td>
                                            <form method="POST" action="deleteOperation.php">
                                              <button type="submit" name="deleteMbbsQuestion" id="deleteMbbsQuestion" value="<?php echo $qid; ?>" class="btn btn-danger btn-xs" style="float: right;" >Delete</button>
                                            </form>
                                            </td>
                                          </tr>
                                  <?php
                                        }
                                      }
                                  ?>
                            </table>
                        </div>
                        <div id="divEngineering" class="tab-pane fade">
                          <table class="table table-striped table-hover">
                              <tr>
                                <th>ID</th>
                                <th>Questions</th>
                                <th>Option 1</th>
                                <th>Option 2</th>
                                <th>Option 3</th>
                                <th>Option 4</th>
                                <th>Right Answer</th>
                                <th>Action</th>
                              </tr>

                                 <?php            
                                     $connection=makeconnection();
                                    $sql="SELECT qid,question,ans1,ans2,ans3,ans4,correct_ans FROM engineering";
                                    $result = $connection->query($sql);
                                    if ($result->num_rows > 0) 
                                      {
                                        while($row = $result->fetch_assoc()) 
                                        { 
                                          $qid=$row["qid"];                            
                                          $question=$row["question"];
                                          $answer1=$row["ans1"];
                                          $answer2=$row["ans2"];
                                          $answer3=$row["ans3"];
                                          $answer4=$row["ans4"];
                                          $correct_answer=$row["correct_ans"];?>
                                        
                                          <tr>
                                            <td><?php echo $qid; ?></td>
                                            <td><?php echo $question; ?></td>
                                            <td><?php echo $answer1; ?></td>
                                            <td><?php echo $answer2; ?></td>
                                            <td><?php echo $answer3; ?></td>
                                            <td><?php echo $answer4; ?></td>
                                            <td><?php echo $correct_answer; ?></td>
                                            <td>
                                            <form method="POST" action="deleteOperation.php">
                                              <button type="submit" name="deleteEngineeringQuestion" id="deleteEngineeringQuestion" value="<?php echo $qid; ?>" class="btn btn-danger btn-xs" style="float: right;">Delete</button>
                                            </form>
                                            </td>
                                          </tr>
                                  <?php
                                        }
                                      }
                                  ?>
                            </table>
                        </div>
                        <div id="divWord" class="tab-pane fade">
                          <table class="table table-striped table-hover">
                              <tr>
                                <th>ID</th>
                                <th>Questions</th>
                                <th>Answer</th>
                                <th>Must Include</th>
                                <th>Action</th>
                              </tr>

                                 <?php            
                                     $connection=makeconnection();
                                    $sql="SELECT qno,question,answer,must_include FROM word_questions";
                                    $result = $connection->query($sql);
                                    if ($result->num_rows > 0) 
                                      {
                                        while($row = $result->fetch_assoc()) 
                                        { 
                                          $qid=$row["qno"];                            
                                          $question=$row["question"];
                                          $answer=$row["answer"];
                                          $must_include=$row["must_include"];
                                          ?>
                                        
                                          <tr>
                                            <td><?php echo $qid; ?></td>
                                            <td><?php echo $question; ?></td>
                                            <td><?php echo $answer; ?></td>
                                            <td><?php echo $must_include; ?></td>
                                            <td>
                                            <form method="POST" action="deleteOperation.php">
                                              <button type="submit" name="deleteWordQuestion" id="deleteWordQuestion" value="<?php echo $qid; ?>" class="btn btn-danger btn-xs" style="float: right;" >Delete</button>
                                            </form>
                                            </td>
                                          </tr>
                                  <?php
                                        }
                                      }
                                  ?>
                            </table>
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

<!--Add Question Modal-->
   <!--  <div class="modal fade" id="addQuestions" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
        
        <form method="POST" action="addQuestion.php">

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
              <input type="text" class="form-control" name="ans4" placeholder="Add Option 4"  required>
            </div>

            <div class="form-group">
              <label>Right Answer</label>
              <input type="text" class="form-control" name="correct_ans" placeholder="Add correct answer"  required>
            </div>
          
            <div class="checkbox-inline myCheck" >
              <label><input type="checkbox" value="csit required">BSc CSIT</label>
            </div>
            <div class="checkbox-inline myCheck">
              <label><input type="checkbox" value="mbbs">MBBS</label>
            </div>
            <div class="checkbox-inline myCheck">
              <label><input type="checkbox" value="engineering">Engineering</label>
            </div>  
          
            <button type="submit" class="btn btn-success">Add Questions</button>
          </div>
        </form>
        </div>
      </div>
    </div>
 -->
  

    <script>
         CKEDITOR.replace( 'editor1' );
    </script>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    
    <script src="js/bootstrap.min.js"></script>
   
  </body>
</html>
