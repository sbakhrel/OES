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
          <!-- <div class="col-md-2">
            <div class="dropdown create">
              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown"   aria-haspopup="true" aria-expanded="true">
                Create Content
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <li><a type="button" data-toggle="modal" data-target="#addQuestions">Add Questions</a></li>
              </ul>
            </div>
          </div> -->
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
                <h3 class="panel-title">Add Word Questions</h3>
              </div>
              <div class="panel-body">
                  <form method="POST" action="../log.php">

                    <div>
                      <?php 
                      if(!isset($_SESSION['addQuestionError'])==null):?>
                        <div class="alert alert-danger alert-dismissible fade in" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                          <div align="center"><?=$_SESSION['addQuestionError'];?></div>
                        </div>
                      <?php endif; $_SESSION['addQuestionError']=null;?>
                    </div>

                    <div class="form-group">
                      <label>Add Question</label>
                      <input type="text" class="form-control" name="question" placeholder="Type question here" required>
                    </div>

                    <div class="form-group">
                      <label>Answer </label>
                      <input type="text" class="form-control" name="answer" placeholder="Type answer here"  required>
                    </div>

                    <div class="form-group">
                      <label>Must Include</label>
                      <input type="text" class="form-control" name="must_include" placeholder="Type must include answer here"  required>
                    </div>


                  
                    <button type="submit" name="addWordQues" id="addWordQues" class="btn btn-success" style="float: right;">Save changes</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer id="footer">
      <p>Copyright OES, &copy; 2017</p>
    </footer>
   
  </body>
</html>

