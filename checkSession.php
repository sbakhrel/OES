<?php 
session_start();
include('global.php');
include('connection.php');
	
	if (isset($_POST['gettingStarted'])) 
	{
		if ($_SESSION['userName']==true)
		 {
			header("Location:" .$base_url. "subject.php");
		} 
		else
		{
			header("Location:" .$base_url. "index.php");
		}
	}
		
?>