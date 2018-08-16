<?php
$username=$_REQUEST['username'];
$password=$_REQUEST['password'];
$firstname=$_REQUEST['firstname'];
$lastname=$_REQUEST['lastname'];
//echo "$username and $password";

$servername='localhost';
$dbusername='root';
$dbpassword='';
$dbname='projectdb';

$conn=new mysqli($servername,$dbusername,$dbpassword,$dbname);
if ($conn->connect_error) die($conn->connect_error);

//echo "PART01";

$query="SELECT * from login";
$result = $conn->query($query);
if(!$result) die($conn->error);

//echo "PART02";


$rows=$result->num_rows;
$flag="false";
for($i=0;$i<$rows;++$i)
{
	//echo $i;
	$result->data_seek($i);
	$row=$result->fetch_array(MYSQLI_ASSOC);
    if($username == $row['username']) 
	{
	    $flag="true";
	    break;
	}
}

//echo "PART03";
//echo "flag=$flag";

if ($flag=="false")
{
	$query="insert into login values('$firstname','$lastname', '$username','$password')";
	echo "query=$query";
	$result = $conn->query($query);
	if(!$result) die($conn->error);
	
	header('Location: index.php');
}
else
{
	header( 'Location: registration.php?error=userid_already_taken.' );
}
$result->close();
$conn->close();
//if ($flag==false) header('Location: index.php');
//else 	header( 'Location: registration.php?error=login_already_taken.' );

?>
