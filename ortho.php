<html>
<head>
	<link rel="stylesheet" type="text/css" href="website.css">
	</head>
<title>Orthopaedics</title>
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
<h2 style="color:orange"> Elixir department of Orthopaedics</h2>
<hr>
<img src="or.jpg" alt="im" style="height:65%;width:40%;float:right">
<p>The Orthopaedic and Joint Replacement department specialises in arthroscopy, dealing with trauma recovery, spinal injuries and complicated joint replacement, are performed here to
 make sure that you derive maximum bone and joint health under our care. With an efficient line-up of leading orthopaedic doctors from around the country, we offer dedicated 
 treatments in all minor and major osteoarthritic issues. One of our leading treatment modules includes platelet-rich plasma transfusion for patients with osteoarthritis. Our 
 treatments involve minimally invasive surgeries for trauma recovery or even bone restructuring. Our team of anaesthesiologists, rheumatologists and rehabilitation experts are here 
 to make your recovery smooth and rapid.</p>
<hr>
	<div id="display">
<?php

$hostname = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($hostname, $username, $password,"hospital")  or die("Unable to connect to MySQL");

$query = "SELECT Dname FROM doctor where Field='Orthopaedics';";
	
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