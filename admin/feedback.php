<?php 
  session_start();
 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <title>Admin Area | Feedback  </title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/admin_style.css" rel="stylesheet">
    <script src="https://cdn.ckeditor.com/4.7.0/standard/ckeditor.js"></script>


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
          <div class="col-md-12">
            <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Feedback <small>Manage Users </small></h1>
          </div>
          <!-- <div class="col-md-2">
            <div class="dropdown create">
              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown"   aria-haspopup="true" aria-expanded="true">
                Create Content
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <li><a type="button" data-toggle="modal" data-target="#addUsers">Add Users</a></li>
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
          <li class="active">Feedback</li>
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
                <h3 class="panel-title">Feedback</h3>
              </div>
              <div class="panel-body">
                <table class="table table-striped table-hover">
                <tr>
                  <th>Fid</th>
                  <th>Name</th>
                  <th style="width: 30%">Email</th>
                  <th>Feedback</th>
                  <th>Action</th>
                </tr>

                <tr>
                <?php
                  $server="localhost";
                  $user="root";
                  $pass="";
                  $db="online_exam";
                  $conn=new mysqli($server,$user,$pass,$db);
                  if($conn->connect_error){
                    die("Connection Failed ".$conn->connect_error);
                  }
                  $sql=mysqli_query($conn,"SELECT feedno,name,email,feedback FROM feedback");
                 while($row = mysqli_fetch_array($sql)){
                      $id=$row['feedno'];
                      $name= $row['name'];
                      $email=$row['email'];
                      $feedback=$row['feedback'];
                      
                     
                 
                echo"<tr>";
                //echo"<td><input type='radio' name='feedno' value='".$id."' required></td>";
                  echo"<td>".$id." </td>";
                  echo"<td>".$name."</td>";
                  echo"<td>".$email."</td>";
                  echo"<td>".$feedback."</td>";
                ?>
               
                  <td>
                      <form method="POST" action="deleteOperation.php">
                        <button type="submit" name="delFeedback" id="delFeedback" class="btn btn-danger btn-xs" value="<?php echo $id; ?>">Delete</button>
                      </form>
                   </td>
                  </tr>
                <?php
                 }?>
                  

              </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

<footer id="footer">
  <p>Copyright OES, &copy; 2017</p>
</footer>

<!--Modals-->



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    
    <script src="js/bootstrap.min.js"></script>
   
  </body>
</html>
