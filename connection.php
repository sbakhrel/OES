<?php

function makeconnection()
{
	$connection=mysqli_connect("localhost", "root","","online_Exam");
		if (mysqli_connect_errno()) 
		{
			echo "failed to connect to mysqli:".mysqli_connect_error();
		}
		return $connection;
}

?>