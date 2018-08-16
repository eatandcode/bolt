<?php
//$username=$_REQUEST['username'];
//$password=$_REQUEST['password'];
####################################################
$servername='localhost';
$dbusername='root';
$dbpassword='';
$dbname='projectdb';
####################################################
$conn=new mysqli($servername,$dbusername,$dbpassword,$dbname);
if ($conn->connect_error) die($conn->connect_error);
####################################################
$query="SELECT * from login";
$result = $conn->query($query);
if(!$result) die($conn->error);
####################################################
$rows=$result->num_rows;
for($i=0;$i<$rows;++$i)
{
	$result->data_seek($i);
	$row=$result->fetch_array(MYSQLI_ASSOC);
    if(  ($user == $row['username'])&&($pass == $row['password'] ) ) 
	{
	    $flag=true;
		 break;
	}
	//echo 'USERNAME:'.$row['username'].' ';
	//echo 'PASSWORD:'.$row['password'].'<br>';	
}
####################################################
$result->close();
$conn->close();
?>
