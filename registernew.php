<html>
<head>
<title>signed</title>
</head>

<body>

<?php

include 'conn.php';
$usr_name = $_POST['name']; 
$usr_email= $_POST['email'];
$usr_pwd  = $_POST['password'];
$usr_add  = $_POST['address'];

$query = "INSERT INTO user(username,email,address,password) VALUES('$usr_name', '$usr_email','$usr_add','$usr_pwd' );" ;

$var = mysqli_query($conn,$query);
if($var)
{
echo "<br><center><h1>Registration Successful</h1></center><br><center><h1><a href='main.html'>Go to Main page</a></h1></center>";
}
else
{
echo "fail";
}

mysqli_close($conn);
?>

</body>
</html>