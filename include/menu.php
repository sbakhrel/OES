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

      <ul class="nav navbar-nav ">
         <li><a href="#home">Home</a></li>
        <li><a href="#feature">Features</a></li>
        <li><a href="#syllabus">Syllabus</a></li>
        <li><a href="#feedback">Feedback</a></li>
      </ul>

      <form class="navbar-form navbar-right">
       
          <button type="button" class="btn btn-sm"  data-toggle="modal" data-target="#loginModal" >Login</button>

          <button type="button" class="btn btn-sm" data-toggle="modal" data-target="#signupModal" ">Register</button>

      </form>
     
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>