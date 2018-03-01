<html>
<head>
	<link rel="stylesheet" type="text/css" href="website.css">
	</head>
<title>Cardiology</title>
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
<h2 style="color:orange"> Elixir department of Endocrinology and diabetes</h2>
<hr>
<img src="dia.png" alt="im" style="height:80%;width:35%;float:right">
<p>Endocrinology is the science of hormones. It is one of the most rapidly evolving disciplines of medicine and encompasses a wide array of clinical conditions. Our facility provides
 the latest in diagnosis and treatment of widely prevalent disorders like diabetes, obesity, thyroid, PCOS, osteoporosis, as well as less common, highly complex hormonal disorders. 
 State of the art radiology, nuclear medicine and laboratory facilities, as well as our team of highly skilled surgeons from all disciplines enable us to provide comprehensive care
 for all endocrine disorders under one roof. </p>
<p> Realizing the importance of individualized care, the philosophy of our centre is "PATIENT EMPOWERMENT". To achieve the same the MEND clinic has a team of experts which include 
renowned endocrinologists, obesity experts, paediatric endocrinologists and certified diabetes and bone educators. We believe that lifestyle disorders warrant customized care, and 
'one size does not fit all'. We therefore provide individualized, pragmatic management plans for these disorders. Our ultimate goal is to empower all patients to manage their 
condition without compromising on quality of life. The team is also actively involved in clinical research and drug trials. Particular areas of interest include: Diabetes and heart
 disease, Transplant endocrinology and secondary prevention of fractures. 
</p>
<hr>
	<div id="display">
<?php

$hostname = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($hostname, $username, $password,"hospital")  or die("Unable to connect to MySQL");

$query = "SELECT Dname FROM doctor where Field='Endocrinologist';";
	
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