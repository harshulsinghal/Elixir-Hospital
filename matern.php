<html>
<head>
	<link rel="stylesheet" type="text/css" href="website.css">
	</head>
<title>Opthamology</title>
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
<h2 style="color:orange"> Elixir department of Opthamology</h2>
<hr>
<img src="op.png" alt="im" style="height:80%;width:40%;float:right">
<p>Ophthalmology Division at Elixir is designed to provide a comprehensive range of medical and surgical eye care for the protection, preservation, enhancement and restoration of
 vision, for any age group. 
</p>
<p>Our Division uses a multidisciplinary approach when caring for the eye problems of our patients. We offer a full range of ophthalmic services including expertise in cataracts,
 laser refractive surgery, cornea and external disease, eye infections, paediatrics, glaucoma, vitreo-retinal disease, neuro-ophthalmology, squint, oculo-plastics, ocular tumors,
 contact lenses, and comprehensive medical & surgical ophthalmology. Our faculty are recognized both nationally and internationally for their dedication to patient care.
 </p>
 <p>The division is equipped with all the latest diagnostic & therapeutic tools, including cutting edge technology like the new Cataract Suite, which is specially designed to 
 optimize and maximize the procedures of cataract surgery. This is the first installation in Asia & one of the first few in the world. The division is pioneered to individually map 
 every eye, accurately predict surgical outcome, precisely align new lenses, cut down on the length of surgery and cause minimal trauma.</p>
 <p>In keeping with Elixir's philosophy, every individual's needs are given prime attention in the Ophthalmology Division too, and patients are treated with only their complete 
 recovery and well-being in mind. As a response to the social needs of the community across all sections of society, the Elixir Division of Ophthalmology conducts Eye & Healthcare 
 Camps in various areas in Delhi NCR.</p>
<hr>
	<div id="display">
<?php

$hostname = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($hostname, $username, $password,"hospital")  or die("Unable to connect to MySQL");

$query = "SELECT Dname FROM doctor where Field='Ophthalmologist';";
	
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