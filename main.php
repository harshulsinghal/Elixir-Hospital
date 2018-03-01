<!DOCTYPE HTML>
<html>
<head>
	<title>DBMS PROJECT</title>
	<link rel="stylesheet" href="utkarsh.css">
	
</head>
<body>
	<div id="heading">
		<h1>Purchase Medicines</h1>
	</div>
	<div id="background">
	<div>
		<form method="POST" action="" id="Input">
		<input type="text" name="search" placeholder="search" ><br>
		<input type="image" src="s.png" name="SEARCH" width="10%"><br>
		<h3 id="flr"> ----Filter by purpose: ----</h3>
		<input type="radio" name="purpose" value="all">        <strong >all</strong>
		<input type="radio" name="purpose" value="fever">      <strong >fever</strong>
		<input type="radio" name="purpose" value="antiseptic"> <strong >antiseptic</strong>
		<input type="radio" name="purpose" value="digestion">  <strong >digestion</strong>
		<br>
		<h3 id="flr"> ----Filter by type: ----</h3>
		<input type="radio" name="type" value="all">           <strong >all</strong>
		<input type="radio" name="type" value="tablet">        <strong >tablet</strong>
		<input type="radio" name="type" value="tube">          <strong >tube</strong>
		<input type="radio" name="type" value="liquid">        <strong >liquid</strong>
		</form>
		<br>
	</div>
	<div id="display">
<?php

$hostname = "localhost";
$username = "root";
$password = "";
$sum=0;

$con = mysqli_connect($hostname, $username, $password,"hospital")  or die("Unable to connect to MySQL");
if(isset($_POST['purpose']) == null || strcmp($_POST['purpose'],'all') ==0 )
{
	if(isset($_POST['type']) == null || strcmp($_POST['type'],'all') ==0 ){
		$sql = "SELECT name,quantity_of_single_piece,cost_per_piece,stock,exp_date,purpose,type FROM medicines;";
	}
	else{
	$x=$_POST['type'];
		$sql = "SELECT name,quantity_of_single_piece,cost_per_piece,stock,exp_date,purpose,type FROM medicines where medicines.type like '%$x%';";
	}
	} 
else {
	$y=$_POST['purpose'];
	if(isset($_POST['type']) == null || strcmp($_POST['type'],'all') ==0 ){
		$sql = "SELECT name,quantity_of_single_piece,cost_per_piece,stock,exp_date,purpose,type FROM medicines where medicines.purpose like '%$y%';";
	}
	else{
		$x=$_POST['type'];
		$sql = "SELECT name,quantity_of_single_piece,cost_per_piece,stock,exp_date,purpose,type FROM medicines where medicines.type like '%$x%' and medicines.purpose like '%$y%';";
	}
}
$result =  mysqli_query($con,$sql);

while($row =mysqli_fetch_array($result))
{ 
	if(@$_POST['search']!=null && $row['name']!=@$_POST['search']){
		continue;
	}

echo "<strong>Medicine name: </strong>".strtoupper($row['name']);
	echo "<br>";
echo " &nbsp &nbsp <strong>Quantity of its single piece: </strong>".$row['quantity_of_single_piece'];
	echo " &nbsp ";
echo " &nbsp <strong>Cost per piece&nbsp </strong> &nbsp Rs.".$row['cost_per_piece'];
	echo " &nbsp ";
echo " &nbsp <strong>Available in stock: </strong>".$row['stock'];
	echo " &nbsp ";
echo " &nbsp <strong>Expire date: </strong>".$row['exp_date'];
	echo " &nbsp ";
echo " &nbsp <strong>Usual purpose: </strong>".$row['purpose'];
	echo " &nbsp ";
echo " &nbsp <strong>Type: </strong>".$row['type'];
	echo " &nbsp ";
	echo "<br><hr><br>";
}

?>

	<div style="margin-bottom: 50px;">
	<form method="POST" action="cccuuu.php" id="bill">
		<b>Enter medicine name: </b><input type="text" name="medicine" placeholder="Enter medicine to buy"/><br><br>
		<b>Enter its quantity : </b><input type="text" name="quantity" placeholder="Quantity of medicine you want to buy"/>
		<select name="type" >
		<option value="tablet">Tablet</option>
		<option value="liquid">Liquid</option>
		<option value="tube">Tube</option>
		</select>
		<input type="submit" name="buy" value="BUY">
	</form>
	</div>
	</div>
	</div>

</body>
</html>
