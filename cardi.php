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
<h2 style="color:orange"> Elixir department of cardialogy</h2>
<hr>
<img src="cardi.png" alt="im" style="height:80%;width:35%;float:right">
<p>Cardiology is a branch of medicine dealing with disorders of the heart as well as parts of the circulatory system. The field includes medical diagnosis and treatment of congenital 
heart defects, coronary artery disease, heart failure, valvular heart disease and electrophysiology</p>
<p> The Cardiology Department provides the best of services in terms of accurate diagnosis and professional treatment. The experienced team of doctor's specialises in cardiac by-pass 
surgery, minimally invasive surgery, interventional cardiology, and non-invasive cardiology. We also provide ambulatory systems for emergencies along with non-invasive image processing, 
echocardiography, stress tests, cardiovascular CT’s and thallium heart mapping among many others. Our paediatric division also diagnoses and treats cardiac issues in new-borns and foetuses 
alike.</p><p>The Department has an ensemble of top cardiologists in India with advanced technology and the best practices in Non-invasive cardiology, Interventional Cardiology,
 Electrophysiology and Paediatric Cardiology.
</p>
<hr>
	<div id="display">
<?php

$hostname = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($hostname, $username, $password,"hospital")  or die("Unable to connect to MySQL");

$query = "SELECT Dname FROM doctor where Field='Cardiologist';";
	
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