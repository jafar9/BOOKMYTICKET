
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
  <link  rel="stylesheet" href="main1.css">
	<title>CREATE NEW ACCOUNT</title>
<style>

body{
background-color:#69283D;
}
</style>

</head>
<body>

<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
  $fstat=test_input($_POST["fname"]);
	$email=test_input($_POST["mail"]);
	$pwd1=test_input($_POST["pwd1"]);
	$day=$_POST["bdate"];
	$state=test_input($_POST["ste"]);
	$cell=test_input($_POST["cell"]);
}

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

$sql = "INSERT INTO LOGIN (FIRSTNAME,DOB,EMAIL,PHONENO,PASSWORD,ADDRESS)
VALUES ('$fstat', '$day','$email','$cell','$pwd1','$state')";

if (mysqli_query($conn, $sql)) {
    echo'<div style="margin-left:450px; margin-top:150px;">
					<form action="http://localhost/exm/welcome.html" method="post">
						<fieldset id="fieldset1" style="width:300px; height:auto;">	
							<h4>Welcome to bus ticket booking</h4><br/>
							<h4>Your account created suucessfully</h4><br/>
   						<h4>By pressing login page you can login into your account</h4><br/>
    					<br/>
    					<pre>            <input type="submit" value="Login_page"></pre>
							</fieldset>
							<form>
						</div>';
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


$conn->close();
?>
<br/><br/>

</body>
</html>



