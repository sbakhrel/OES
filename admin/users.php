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
   
    <title>Admin Area | Members  </title>

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
            <li><a href="users.php">Users</a></Wli> -->
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
            <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Members <small>Manage Members </small></h1>
          </div>
          <div class="col-md-2">
            <div class="dropdown create">
              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown"   aria-haspopup="true" aria-expanded="true">
                Create Content
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <li><a type="button" data-toggle="modal" data-target="#addUsers">Add Members</a></li>
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
          <li class="active">Members</li>
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
                <h3 class="panel-title">Members</h3>
              </div>
              <div class="panel-body">

                <ul class="nav nav-tabs">
                  <li class="active"><a data-toggle="tab" href="#user">Users</a></li>
                  <li><a data-toggle="tab" href="#admin">Admin</a></li>
                </ul>

              <div class="tab-content">
                <div id="user" class="tab-pane fade in active">
                  <table class="table table-striped table-hover">
                     <tr>
                      <th>Id</th>
                      <th style="width: 30%">Full Name</th>
                      <th>User name</th>
                      <th>Email</th>
                      <th>Action</th>
                    </tr>

                    <tr>
                    <?php
                      $connection=makeconnection();
                      $sql="SELECT id,fname,lname,user_name,email FROM user";
                      $output=mysqli_query($connection,$sql);
                     while($row = mysqli_fetch_array($output)){
                          $id=$row['id'];
                          $fname= $row['fname'];
                          $lname=$row['lname'];
                          $user_name=$row['user_name'];
                          $email=$row['email'];
                    
                    echo"<tr>";
                      echo"<td>".$id." </td>";
                      echo"<td>".$fname."\t".$lname."</td>";
                      echo"<td>".$user_name."</td>";
                      echo"<td>".$email."</td>";
                    ?>
                      <td>
                       <form method="POST" action="deleteOperation.php">
                          <button type="submit" name="deleteUser" id="deleteUser" class="btn btn-danger btn-xs" value="<?php echo $id; ?>">Delete</button>
                        </form>
                      </td>
                    <?php
                     }
                    ?>
                    </tr>

                  </table>
                </div>
                <div id="admin" class="tab-pane fade">
                  <table class="table table-striped table-hover">
                     <tr>
                      <th>Id</th>
                      <!-- <th style="width: 30%">Full Name</th> -->
                      <th>User name</th>
                      <th>Email</th>
                      <th>Password</th>
                      <th>Action</th>
                    </tr>

                    <tr>
                    <?php
                      $connection=makeconnection();
                      $sql="SELECT id,fname,lname,user_name,password,email FROM admin";
                      $output=mysqli_query($connection,$sql);
                     while($row = mysqli_fetch_array($output)){
                          $id=$row['id'];
                          $fname= $row['fname'];
                          $lname=$row['lname'];
                          $user_name=$row['user_name'];
                          $password=$row['password'];
                          $email=$row['email'];
                    
                    echo"<tr>";
                      echo"<td>".$id." </td>";
                      // echo"<td>".$fname."\t".$lname."</td>";
                      echo"<td>".$user_name."</td>";
                      echo"<td>".$email."</td>";
                      echo"<td>".$password."</td>";
                    ?>
                      <td>
                       <form method="POST" action="deleteOperation.php">
                          <button type="submit" name="deleteUser" id="deleteUser" class="btn btn-danger btn-xs" value="<?php echo $id; ?>">Delete</button>
                        </form>
                      </td>
                    <?php
                     }
                    ?>
                    </tr>

                  </table>
                </div>
              </div>

                
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

<!--Add Question Modal-->
    <div class="modal fade" id="addUsers" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
        
        <form action="../log.php" method="post">

          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Add Admin</h4>
          </div>
         
          <div class="modal-body">

           <!--  <div class="form-group">
              <label for="exampleInputEmail1">First name</label>
              <input type="text" class="form-control" id="firstName" name="firstName" aria-describedby="emailHelp" placeholder="Enter first name">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Last name</label>
              <input type="text" class="form-control" id="lastName" name="lastName" aria-describedby="emailHelp" placeholder="Enter last name">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div> -->

            <div class="form-group">
              <label for="exampleInputEmail1">Admin name</label>
              <input type="text" class="form-control" id="userName" name="userName" aria-describedby="emailHelp" placeholder="Enter username">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1"> Admin Email address</label>
              <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>

            <div class="form-group">
              <label for="exampleInputPassword1">Admin Password</label>
              <input type="password" name="password" class="form-control" id="password" placeholder="Password">
            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" name="btnCreateAdmin" id="btnCreateAdmin" class="btn btn-success">Create New Admin</button>
            </div>
          </div>

        </form>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    
    <script src="js/bootstrap.min.js"></script>
   
  </body>
</html>
