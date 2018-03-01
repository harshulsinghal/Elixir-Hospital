
<?php

$hostname = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($hostname, $username , $password);

if(!$conn)
{
	die('Could not connect: '. mysqli_error() );
}

echo 'Connected successfully';

mysqli_select_db($conn,"hospital");

?>


