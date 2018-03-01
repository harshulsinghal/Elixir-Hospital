<?php

$hostname = "localhost";
$username = "root";
$password = "";

echo "<h1><a href=\"main.php\">GO BACK</a></h1>";

$con = mysqli_connect($hostname, $username, $password,"hospital")  or die("Unable to connect to MySQL");
if($_POST['medicine']==null || $_POST['quantity'] ==null ){
	echo "<script> alert ('Please enter data '); </script>";
}
else
{
	$x=$_POST['medicine'];
	$y=$_POST['type'];
$sql = "SELECT name,cost_per_piece,stock,type FROM medicines 
		where medicines.name like '%$x%' 
		and medicines.type = '$y'";
//echo "$sql";
$result =  mysqli_query($con,$sql) or die("<h1>No Medicine Found</h1>");
$row =mysqli_fetch_assoc($result) or die ("<h1>No Medicine Selected</h1>");
if($row['stock'] < $_POST['quantity'])
{	//echo "<script> alert ($row['stock'] is); </script>";
	echo "<script> alert ('Stock is less'); </script>";
}
else{
	$z=$_POST['quantity'];
	$sql = "INSERT INTO bill VALUES (NULL,'$x', '$y', $z)";
	//echo "$sql";
	$result =  mysqli_query($con,$sql) or die("<h1>No Medicine Inserted</h1>");
	$cc=$row['cost_per_piece'];
	$pp=$z*$cc;
	echo "<h2>Purchase Successful <br> Please pay Rs. ".$z." x ".$cc." = Rs. ".$pp."</h2>";
	}
}
?>