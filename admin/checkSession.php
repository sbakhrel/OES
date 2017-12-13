<?php 
session_start();
include('global.php');
include('connection.php');
	
	if (isset($_POST['gettingStarted'])) 
	{
		if ($_SESSION['userName']==true)
		{
			if ($_SESSION['status']==1)
			{
			 	header("Location:" .$base_url. "admin/index.php");
			} 
			else 
			{
				header("Location:" .$base_url. "admin/index.php");	
			}
			
		} 

		elseif($_SESSION['userName']==false) 
		{
			header("Location:" .$base_url. "login.php");
		}
		else
		{
			echo "Fatal Error";
		}
	}

?>