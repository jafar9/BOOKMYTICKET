<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
  <link  rel="stylesheet" href="main1.css">
	<title>welcome to ticket booking</title>
<style>
table{
     border: 2px dotted black;
     padding:5px;
    
}
th,td
{
	border:2px solid black;
	padding:5px;
}
</style>
</head>
<body>
<div class="box effect5">
<h1>BUS TICKET BOOKING</h1>
</div>
<div id="topmenu">
 
		<div id="list"><a href="http://localhost/exm/profileup.php" class="one"><i class="fa fa-home fa-fw" aria-hidden="true" style="display:inline;background-color:transparent; font-size:24px;"></i>&nbsp;PROFILE</a></div><br/>
		<div id="list"><a href="http://localhost/exm/welcome.html" class="one"><i class="fa fa-phone fa-fw" aria-hidden="true" style="display:inline;background-color:transparent; font-size:24px;"></i>&nbspLOGOUT</a></div>
  
</div>
<br/>
<div class="mummy2" style="margin-left:160px;">
  <div class="f1" style="margin-top:20px;">
	<form action="http://localhost/exm/history.php"  method="post" autocomplete="on" autofocus="on">
  		<fieldset id="fieldset1" style="color:black; width:250px; height:auto;">
			<legend id="legend1" style="color:#FC045E;"><b>AVAILABILITY</b></legend><br/>
 			<label for="n1">FROM STATION: <br/><br/><input type="text" id="n1" name="fbus" placeholder="  STARTING  STATION" required="required" style="backgroung-color:red; border: 2px solid #6E6E6E; width:180px; border-radius:5px; height:15px;"><br/><br/>
			<label for="n2">TO STATION:<br/><br/><input type="text" id="n2" name="tbus" placeholder="  REACHING   STATION" required="required" style="backgroung-color:red; border: 2px solid #6E6E6E; width:180px; border-radius:5px; height:15px;"><br/><br/>
			<label for="n3">DATE OF JOURNEY:<br/><br/><input type="date" id="n3" name="jdate" required="required" style="backgroung-color:red; border: 2px solid #6E6E6E; width:180px; border-radius:5px; height:15px;"> <br/> <br/>
			<pre>  <input type="submit" value="CHECK" size="20px">   <input type="reset" value="RESET" size="20px"></pre>
		</fieldset>
	</form>
  </div>

<div class="f2">
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
  $fstat=strtoupper(test_input($_POST["fbus"]));
	$tstat=strtoupper(test_input($_POST["tbus"]));
	$day=test_input($_POST["jdate"]);
}
session_start();
$_SESSION["jdate"]=$day;

function test_input($data)
{
  $data=trim($data);
	$data=stripslashes($data);
	$data=htmlspecialchars($data);
 return $data;
}

$servername = "localhost";
$username = "root";
$password = "itsjafar9";
$dbname = "REDBUS";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT BUSID, FROMSTATION,TOSTATION,ARR_TIME, DEPT_TIME FROM MYTRIP WHERE FROMSTATION='$fstat' and TOSTATION='$tstat'";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
     echo "<table  style=\"margin-left:70px; margin-top:70px; color:black;\"><tr><th>BUSID</th><th>FROMSTATION</th><th>TOSTATION</th><th>ARR_TIME</th><th>DEPT_TIME</th><th>Seats_available</th></tr>";
     // output data of each row
     while($row = $result->fetch_assoc()) {
     	$bid=$row["BUSID"];


     	$sql1="SELECT 30-count(*) as AVAILABILITY from HISTORY WHERE BUSID='$bid' AND dateofj='$day'";
     	$result1=$conn->query($sql1);
     	$row1=$result1->fetch_assoc();
     	$ava=$row1['AVAILABILITY'];
     	echo '$ava'."<br/>";

     	     	 echo "<tr><td>$bid</td><td>" . $row["FROMSTATION"]."</td><td>".$row["TOSTATION"]."</td><td>" . $row["ARR_TIME"]. "</td><td>"  . $row["DEPT_TIME"]. "</td><td>"  .$row1['AVAILABILITY']. "</td></tr>";
     }
     echo "</table>";
} else {
     die("<p style=\"margin-left:60px; width:400px;color:black;\">NO&nbspDIRECT&nbspBUSES&nbspBETWEEN&nbspTHESE&nbspTWO&nbspSTATIONS.</p>");
}

$conn->close();
?>
<br/><br/>
<form action="http://localhost/exm/book.php" method="post">
	<input type="submit" value="BOOK NOW" style="height:40px; width:150px; background-color:#4CAF50; color:white; border-radius:11px; margin-left:300px;">
</form>
</div>
</div>

</body>
</html>
