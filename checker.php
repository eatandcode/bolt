<?php
session_start();
if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 10)) 
{
    if (ini_get("session.use_cookies")) 
    {
		$params = session_get_cookie_params();
		setcookie(session_name(), '', time() - 42000,
			$params["path"], $params["domain"],
			$params["secure"], $params["httponly"]
		);
	}
	session_unset();     // unset $_SESSION variable for the run-time 
    session_destroy();   // destroy session data in storage
	header( 'Location: index.php?error=session-expiration' );
	exit();
}

if ($_SESSION['on'] ==false || $_SESSION['on']==null) {
  header( 'Location: index.php?error=invalid-login' );
  session_unset();
  session_destroy();
  exit();
}
?>
