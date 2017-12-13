<?php
session_start();
include('../global.php');
include('../connection.php');

	if(isset($_POST['deleteCsitQuestion']))
	{
		$qid=$_POST['deleteCsitQuestion'];
		$con=makeconnection();
		$sql = "DELETE FROM csit WHERE qid = '$qid'";
		$query=mysqli_query($con,$sql);
		if(!$query)
		{
			echo "Error";
		}
		else
		{
			header("Location:".$base_url."admin/questions.php");
		}	
	}
	
	if(isset($_POST['deleteMbbsQuestion']))
	{
		$qid=$_POST['deleteMbbsQuestion'];
		$con=makeconnection();
		$sql = "DELETE FROM mbbs WHERE qid = '$qid'";
		$query=mysqli_query($con,$sql);
		if(!$query)
		{
			echo "Error";
		}
		else
		{
			header("Location:".$base_url."admin/questions.php");
		}	
	}


	if(isset($_POST['deleteEngineeringQuestion']))
	{
		$qid=$_POST['deleteEngineeringQuestion'];
		$con=makeconnection();
		$sql = "DELETE FROM engineering WHERE qid = '$qid'";
		$query=mysqli_query($con,$sql);
		if(!$query)
		{
			echo "Error";
		}
		else
		{
			header("Location:".$base_url."admin/questions.php");
		}	
	}

	if(isset($_POST['deleteWordQuestion']))
	{
		$qid=$_POST['deleteWordQuestion'];
		$con=makeconnection();
		$sql = "DELETE FROM word_questions WHERE qno = '$qid'";
		$query=mysqli_query($con,$sql);
		if(!$query)
		{
			echo "Error";
		}
		else
		{
			header("Location:".$base_url."admin/questions.php");
		}	
	}

	if(isset($_POST['deleteUser']))
	{
		$uid=$_POST['deleteUser'];
		$con=makeconnection();
		$sql = "DELETE FROM user WHERE id = '$uid'";
		$query=mysqli_query($con,$sql);
		if(!$query)
		{
			echo "Error";
		}
		else
		{
			header("Location:".$base_url."admin/users.php");
		}	
	}

	if(isset($_POST['deleteAdmin']))
	{
		$aid=$_POST['deleteAdmin'];
		$con=makeconnection();
		$sql = "DELETE FROM admin WHERE id = '$aid'";
		$query=mysqli_query($con,$sql);
		if(!$query)
		{
			echo "Error";
		}
		else
		{
			header("Location:".$base_url."admin/users.php");
		}	
	}
	if(isset($_POST['delFeedback']))
	{
		$fid=$_POST['delFeedback'];
		$con=makeconnection();
		$sql = "DELETE FROM feedback WHERE feedno = '$fid'";
		$query=mysqli_query($con,$sql);
		if(!$query)
		{
			echo "Error";
		}
		else
		{
			header("Location:".$base_url."admin/feedback.php");
		}	
	}
?>