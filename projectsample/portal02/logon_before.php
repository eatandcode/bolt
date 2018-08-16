<?php
$user =$_GET['username'];
$pass =$_GET['password'];
if ($user == "johndoe" && $pass == "1234") 
{
  session_start();
  $_SESSION['username'] = $user;
  $_SESSION['password'] = $pass;

  $_SESSION['ON'] = "TRUE";

  //$lifetime=10;
  //setcookie(session_name(),session_id(),time()+$lifetime);
  $_SESSION['LAST_ACTIVITY'] = time(); 
  header( 'Location: inside.php' ) ;
  //exit();
}
else 
{
	 header( 'Location: index.php?error=invalid-login' );
	session_unset();
	session_destroy();
	exit();
}
?>
