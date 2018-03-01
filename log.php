<html>
<head>

<title>logged</title>
</head>
<body>

<?php
//session_start();
function load($page)
{
	header("Location:$page");

	exit();
}
function reg($page='register.php')
{
	header("Location:$page");
	echo "Invalid username or password";
	exit();
}

include'conn.php';
$cur_usr = $_POST['email']; // username entered from form
$cur_pwd = $_POST['password'];
$chk = 0;

$query = "SELECT username,email,password FROM user where email='$cur_usr' and password='$cur_pwd';";
	
if ($source = mysqli_query($conn,$query))
{
	while($row = mysqli_fetch_assoc($source)) // fetch associated array
	{
		$chk=1;
			$usr_val=$row['username'];
			
			break;
		
	}
}

//echo "$chk";

if($chk==1)
{
	echo"<h1><center>login successful !!</center></h1>";
	echo"<h3><center>$usr_val</center></h3>";
	echo"<h1><center><a href= \"main.php\">Redirect to Main</a></center></h1>";
	load('main.php');
}

else
{
//$errors=$row;	
	echo"<h1><center>Invalid username or password</center></h1>";
	echo"<h1><center><a href= \"register.php\">Login again</a></center></h1>";
	reg('register.php');
	//echo "<script>alert("Invalid username or password")</script>";
	echo"<h1><center>Invalid username or password</center></h1>";
}
mysqli_close($conn);

?>
</body>
</html>
