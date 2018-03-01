<html>
<head>
	<link rel="stylesheet" type="text/css" href="website.css">
	</head>
<title>Physiotherapy</title>
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
<h2 style="color:orange"> Elixir department of Physiotherapy</h2>
<hr>
<img src="phy.png" alt="im" style="height:55%;width:40%;float:right">
<p>Quality and excellence in patient care are first and foremost at Fortis Physiotherapy where we treat orthopedic, neurological, Cardiac, pediatric and geriatric-related problems.
 Our commitment is to do the best we can to get you back to your high level of activity in a minimal amount of time. We will work towards your goal of returning to work or 
 participate in everyday events without physical limitations or pain. Our therapists are trained professionals in neurology (Adult & pediatric), orthopedic, cardiopulmonary, sport 
 medicine, women’s wellness, Weight loss, Ergonomics, geriatric rehabilitation and critical care.</p>
<hr>
	<div id="display">
<?php

$hostname = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($hostname, $username, $password,"hospital")  or die("Unable to connect to MySQL");

$query = "SELECT Dname FROM doctor where Field='Physiotherapist';";
	
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