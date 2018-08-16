<?php
function clean($data) {
  $data = htmlspecialchars($data);
  $data = stripslashes($data);
  $data = trim($data);
  return $data;
}

$user = clean($_REQUEST['username']);
$pass = clean($_REQUEST['password']);

if ($user == "") {
    header( 'Location: index.php?error=empty-user' );
    session_destroy();
    exit();
}

if ($pass == "") {
    header( 'Location: index.php?error=empty-pass' );
    session_destroy();
    exit();
}
//---------------------------------------------
$flag=false;
include "login2.inc";
//----------------------------------------------
if($flag==true)
{
    session_start();
    $_SESSION['username'] = $user;
    $_SESSION['password'] = $pass;
    $_SESSION['on'] = true;
     $_SESSION['LAST_ACTIVITY'] = time(); 
    header( 'Location: index.html' ) ;
    exit();
}
  else 
{
    header( 'Location: index.php?error=longin-error' );
    session_destroy();
    exit();
}
  
//else 
//{
//    header( 'Location: index.php?error=login-error' );
//    session_destroy();
//    exit();
//}

?>
