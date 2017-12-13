<?php
session_start();

$_SESSION=array();

if(ini_get("session.use.cookies"))
{
	$parms=session_get_cookie_params();
	setcookie(session_name(),'',time()-42000,
		$parms["path"],$parms["domain"],
		$parms['secure'],$parms['httponly']
		);
}

session_destroy();
header("Location: index.php");
?>