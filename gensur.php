<html>
<head>
	<link rel="stylesheet" type="text/css" href="website.css">
	</head>
<title>General surgery</title>
<body>
<div class="parent">
<div class="one">
<img id="one" src="logo.jpg" alt="logo">
<div class="banner">
Elixir Hospital
</div>
</div>
<div class="two">   
    <p id="two"><span class="glyphicon glyphicon-log-in" id="three"></span><a href="register.html"> 
	Login</a></p> 
</div>
<div class="three">
<ul class="list">
<li class="na"><a href="test.htm">HOME</a></li>
<li class="na"><a href="#ab">ABOUT</a></li>
<li class="na"><a href="#co">CONTACT</a></li>
<li class="na"><a href="main.html">MEDICINES</a></li>
</ul>
</div>

<div class="aone">
<h2 style="color:orange"> Elixir department of General Surgery</h2>
<hr>
<img src="gen.png" alt="im" style="height:65%;width:35%;float:right">
<p>The General and Laparoscopic Surgery Department is equipped with the latest technology and infrastructure, supported by an experienced team of surgeons. The department specialises
 in performing all major surgeries involving abdomen, skin, breast, soft tissues, and hernia. Laparoscopic surgery is also known as key-hole surgery or minimally invasive surgery. 
 It is widely used in gynaecology, gastroenterology and urology. Patients receive specialised assessment, latest treatments along with clinical post-operative care, medications and 
 a regular follow-up. The advantages of this technique over traditional open surgery include a shorter hospital stay and faster recovery time; less pain and bleeding after the 
 operation; and reduced scarring.
</p>
<hr>
	<div id="display">
<?php

$hostname = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($hostname, $username, $password,"hospital")  or die("Unable to connect to MySQL");

$query = "SELECT Dname FROM doctor where Field='General Surgery';";
	
$result =  mysqli_query($con,$query);

while($row =mysqli_fetch_array($result))
{ 
echo "<strong>Doctor name: </strong>".strtoupper($row['Dname']);
	echo "<br>";
}

?>

<div class="atwo">
Follow us online:-
<a href="http://www.twitter.com" target="_blank"><img src="images/icons/twi.png" id="atwo" style="width:8%;height:5%">
<a href="http://www.facebook.com" target="_blank"><img src="images/icons/fb.png" id="atwo" style="width:8%;height:5%">
<a href="http://www.linkedin.com" target="_blank"><img src="images/icons/link.png" id="atwo" style="width:8%;height:5%">
<a href="http://www.instagram.com" target="_blank"><img src="images/icons/insta.png" id="atwo" style="width:8%;height:5%">
</body>
</html>