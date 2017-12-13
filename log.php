<?php 
session_start();
include('global.php');
include('connection.php');
	//for Login
	if (isset($_POST['btnLogin'])) 
	{

		$con=makeconnection();
		
		$sql="SELECT * FROM members WHERE password='".$_POST['password']."' AND (email='".$_POST['userName']."' OR user_name='".$_POST['userName']."')";
		$query=mysqli_query($con,$sql);
		$row=mysqli_num_rows($query);
		$data=mysqli_fetch_array($query);
		mysqli_close($con);
		if ($row>0)
		{
			$_SESSION['userId']= $data[0];
			$_SESSION['fullName']= ucwords($data[1])." ".ucwords($data[2]);
			$_SESSION['userName']= $data[3];
			$_SESSION['userEmail']= $data[4];
			$_SESSION['rollNo']= $data[5];
			$_SESSION['status']= $data[6];

			if ( $_SESSION['status'] == 0 ) 
			{
				header("Location:" .$base_url. "subject.php");
			} 

			elseif ( $_SESSION['status'] == 1 )
			 {
				header("Location:" .$base_url. "admin/index.php");
			}

			else 
			{ 
				echo "Error";
			}
		}
		else
		{
			$_SESSION['loginError']="Username/Email or password not found";
			header("Location:login.php");
		}
	}

	//for SignUp
	if(isset($_POST['btnSignUp']))
	{
		$fname=$_POST['firstName'];
		$lname=$_POST['lastName'];
		$uname=$_POST['userName'];
		$email=$_POST['email'];
		$pass=$_POST['password'];
		$status=0;
		$con=makeconnection();
		$sql="INSERT INTO user SET fname='".$fname."', lname='".$lname."', user_name='".$uname."', email='".$email."', password='".$pass."', status='".$status."'";
		$query=mysqli_query($con,$sql);
		echo $sql."<br>";
		if(!$query)
		{
			$_SESSION['signUpError']="Username or Email already exist.";
			header("Location:index.php");
		}
		else
		{
			$_SESSION['signUpOk']="User created sucessfully! Please log in with your credentials.";
			header("Location:index.php");
		}

	}

	if(isset($_POST['btnCreateAdmin']))
	{
		
		$fname=$_POST['firstName'];
		$lname=$_POST['lastName'];
		$uname=$_POST['userName'];
		$email=$_POST['email'];
		$pass=$_POST['password'];
		$status=1;
		$con=makeconnection();
		$sql="INSERT INTO admin SET fname='".$fname."', lname='".$lname."', user_name='".$uname."', email='".$email."', password='".$pass."', status='".$status."'";
		$query=mysqli_query($con,$sql);
		if(!$query)
		{
			
			header("Location:" .$base_url."admin/users.php");
		}
		else
		{
			// $_SESSION['loginOk']="Welcome to the admin panel";
			header("Location:" .$base_url."admin/index.php");
		}

	}

	if(isset($_POST['addQues']))
	{
		$sub = $_POST['sub'];
		$question = $_POST['question'];
		$ans1 = $_POST['ans1'];
		$ans2 = $_POST['ans2'];
		$ans3 = $_POST['ans3'];
		$ans4 = $_POST['ans4'];
		$corr = $_POST['correct_ans'];

		if( ($ans1== $corr) || ($ans2== $corr) || ($ans3== $corr) || ($ans4== $corr) )  
		{
			$con=makeconnection();
			$sql="INSERT INTO $sub SET question='".$question."', ans1='".$ans1."', ans2='".$ans2."', ans3='".$ans3."', ans4='".$ans4."', correct_ans='".$corr."'";

			$query=mysqli_query($con,$sql);
			header("location:" .$base_url."admin/questions.php");
		}
		else
		{
			$_SESSION['addQuestionError']="Enter correct answer matching to one of the four options.";
			header("Location:".$base_url."admin/addQuestion.php");
		}

	}

	if(isset($_POST['addWordQues']))
	{
		$question = $_POST['question'];
		$answer = $_POST['answer'];
		$must = $_POST['must_include'];
		$con=makeconnection();
		$sql="INSERT INTO word_questions SET question='".$question."', answer='".$answer."', must_include='".$must."'";
		$query=mysqli_query($con,$sql);
		header("location:" .$base_url."admin/questions.php");
	}

	if(isset($_POST['deleteQuestion']))
	{
		$sub = $_POST['sub'];
		$question = $_POST['question'];
		$ans1 = $_POST['ans1'];
		$ans2 = $_POST['ans2'];
		$ans3 = $_POST['ans3'];
		$ans4 = $_POST['ans4'];
		$corr = $_POST['correct_ans'];

		if( ($ans1== $corr) || ($ans1== $corr) || ($ans1== $corr) || ($ans1== $corr) )  
		{
			$con=makeconnection();
			$sql="DELETE FROM `csit` WHERE `csit`.`qid` = 100";

			$query=mysqli_query($con,$sql);
			header("location:" .$base_url."admin/questions.php");
		}
		else
		{
			$_SESSION['addQuestionError']="Enter correct answer matching to one of the four options.";
			header("Location:".$base_url."admin/addQuestion.php");
		}

	}

	 if (isset($_POST['btnFeedback']))
     {
		$username=$_POST['userName'];
		$email=$_POST['email'];
		$comment=$_POST['comment'];
		$con=makeconnection();
		$sql = "INSERT INTO feedback SET name='".$username."', email='".$email."', feedback='".$comment."'";
		$query=mysqli_query($con,$sql);
		if(!$query)
		{
			$_SESSION['btnFeedbackError']="Something went wrong.";
		}
		else
		{
			$_SESSION['btnFeedbackOk']="Feedback successfully sent.";
			header("Location:".$base_url."index.php");
		}
	}
 ?>

