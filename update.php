<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
  <link  rel="stylesheet" href="main1.css">
	<title>CREATE NEW ACCOUNT</title>
<style>

body{
background-color:#b0e0e6;
color:black;
}
</style>

</head>
<body>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{
  
	$email=test_input($_POST["jfr"]);
	$con=test_input($_POST["jfr1"]);
	$pwd1=test_input($_POST["pwd"]);
	
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
	/*echo $email.'  '.$pwd1;*/
	$sql = "SELECT * FROM LOGIN WHERE EMAIL='$email'";
	$result = $conn->query($sql);
	//echo "no fo rows is $result->num_rows";
	if ($result->num_rows > 0) 
	{
		$sql = "UPDATE  LOGIN SET PASSWORD='$pwd1' WHERE EMAIL='$email'";
		$result = $conn->query($sql);
        if ($result==true) {

		    echo '<br/><br/>
		<div style="margin-left:450px; margin-top:150px;">
		<form action="http://localhost/exm/welcome.html" method="post">
			<fieldset id="fieldset1" style="width:300px; height:auto; border:2px solid black;">


		   <h4>Welcome to bus ticket booking</h4><br/>
		   <h4>Your Password updated suucessfully</h4><br/>
		   <h4>By pressing login page you can login into your account</h4><br/><br/>    
		<pre>      <input type="submit" value="HOME" style="height:40px; width:150px; background-color:#4CAF50; color:white; border-radius:11px;"></pre>
		</fieldset>
		</form>
		</div>
		';
		}
	}
	 else {
    echo '<br/><br/>
<div style="margin-left:450px; margin-top:150px;">
<form action="http://localhost/exm/pwdupdate.php" method="post">
	<fieldset id="fieldset1" style="width:300px; height:auto; border:2px solid black;">


   <h4>Username doest not exist in our database</h4><br/><br/>    
<pre>      <input type="submit" value="HOME" style="height:40px; width:150px; background-color:#4CAF50; color:white; border-radius:11px;"></pre>
</fieldset>
</form>
</div>
';
}


$conn->close();
?>

</div>
</body>
</html>

