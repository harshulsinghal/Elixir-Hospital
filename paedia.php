<html>
<head>
	<link rel="stylesheet" type="text/css" href="website.css">
	</head>
<title>ENT and head neck surgery
</title>
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
<h2 style="color:orange"> Elixir department of ENT and head neck surgery</h2>
<hr>
<img src="ear.jpg" alt="im" style="height:85%;width:40%;float:right">
<p>Department of ENT and Head Neck surgery is equipped with the finest technology and the best manpower to provide the best possible facilities for the patients. It has state-of-the-
art facilities for voice disorders, phonosurgery and laryngology and is one of the few exclusive centres in the country and abroad doing so. 
</p>
<p>
 It is carrying on treatment of Head and Neck Cancer along with the radiation medicine and medical oncology teams. There is collaboration with neurosurgeons for the treatment of 
 skull base lesions. </p>
 <p>The latest generation Lumenis Acupulse (Surgitouch) CO2 Laser System will provide latest and cutting edge technology for treatment of Juvenile papillomas, Bilateral abductor 
 cord paralysis, vascular lesions, premalignant lesions, cancer of larynx, oral cavity, oropharynx and hypopharynx, and Laryngotracheal stenosis.
 </p>
 <p>The Department is well-equipped to take care of all Ear, Nose and Throat emergencies and has teams available round the clock to do so. The Department also provides audiology,
 voice and speech therapy as allied services.
 </p>
 <p>The Department plans to further strengthen itself by launching teaching and research programmes including fellowships in specialised areas so that speciality colleagues from all 
 over can take advantage of the available facilities.
 </p>
<hr>
	<div id="display">
<?php

$hostname = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($hostname, $username, $password,"hospital")  or die("Unable to connect to MySQL");

$query = "SELECT Dname FROM doctor where Field='ENT';";
	
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