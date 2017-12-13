<?php include 'global.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<?php include 'include/lib.php'; ?>
	<link rel="stylesheet" href="<?=$base_url?>/lib/css/login.css">
	<title>Sign In | OES</title>
</head>
<body style="background-color: #d8cbcb">
<?php //include('function.php'); ?>

<!--ebackground-color: #eee;-->
<div class="container">
<div ><br><br><br></div>
	<div class="row">
	<div class="col-md-4"></div>
		<div class="col-md-4">
			<div >
			<form method="POST" action="log.php">
				
			<!--class="form-signin"class="form-signin-heading" -->
		        <h2 align="center" >Already a member!</h2>

		        <h3  align="center" class="form-signin-heading">Sign In</h3>

		        <div class="row">
		        
					
						<?php 
						if(!isset($_SESSION['loginError'])==null):?>
							<div class="alert alert-danger alert-dismissible fade in" role="alert">
							<button type="button" class="close" data-dismiss="alert" aria-label="close">
								<span aria-hidden="true">&times;</span>
							</button>
							<div align="center"><?=$_SESSION['loginError'];?></div>
							</div>
					<?php endif; $_SESSION['loginError']=null;?>
				</div>
				

		        <label for="inputEmail" class="sr-only">User name or Email address</label>
		        <input type="text" id="inputEmail" class="form-control" placeholder="User name or Email address" required autofocus name="userName"><br>
		        <label for="inputPassword" class="sr-only">Password</label>
		        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required name="password">
		        <br>
		        <button class="btn btn-lg btn-secondary btn-block" type="submit" name="btnLogin">Log In</button><br>
				 <a href="index.php"><input type="button" class="btn btn-lg btn-danger btn-block" value="Go To Home"></span></a>
		        
	      	</form>
	      	</div>
		</div>
		<div class="col-md-4"></div>
	</div>
</div>
<script>
$( document ).click(function() {
  $( "#toggle" ).effect( "shake" );
});
</script>
<br>
<footer>
	<div class="container text-center">All Rights Reserved 2016-2020 <br>© OES team. Team Online Examination System 2017  </div>
</footer>	
</body>
</html>