<?php
function check_login()
{
if(strlen($_SESSION['dlogin'])==0)
	{	
		$host = $_SERVER['HTTP_HOST'];
		$uri  = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
		$extra="login.php";		
		header("Location: http://$host$uri/$extra");
		echo "<script>window.location.href='login.php';</script>";

	}
}
?>