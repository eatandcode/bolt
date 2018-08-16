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
    header( 'Location: login.php?error=empty-user' );
    session_destroy();
    exit();
}

if ($pass == "") {
    header( 'Location: login.php?error=empty-pass' );
    session_destroy();
    exit();
}

$content=simplexml_load_file("login.xml");

$xml_login = array("admin" => "test");

for ($i=0; $i<=10; $i++)
  {
  $username=$content->login[$i]->username;
  $password=$content->login[$i]->password;
  
  $xml_login["$username"] = (string) $password;
  }

print_r($xml_login);

if (isset($xml_login["$user"])) {
  if ($xml_login["$user"] == $pass) {
    session_start();
    $_SESSION['username'] = $user;
    $_SESSION['password'] = $xml_login["$user"];
    $_SESSION['on'] = true;
    $_SESSION['LAST_ACTIVITY'] = time(); 
    header( 'Location: index.php' ) ;
    exit();
  }
  else {
    header( 'Location: login.php?error=login-error' );
    session_destroy();
    exit();
}

}  
else {
    header( 'Location: login.php?error=login-error' );
    session_destroy();
    exit();
}

?>
