<?php session_start();?>
<?php
	$_SESSION= array();
	if(isset($_COOKIE[session_name()]){
		setcookie(session_name(),'',time()-42000,'/');
	}
	session_destroy();
	header("Location:admin_login.php");
?>