<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>update pwd</title>
<style>

body{
background-color:#b0e0e6;
}
</style>
</head>
<body>

<div style="margin-left:450px; margin-top:150px;">
<form action="http://localhost/exm/profile.php" method="post">
	<fieldset id="fieldset1" style="width:300px; height:auto; border:2px solid black;">

<?php
session_start();
$name=$_SESSION["jafar"];
$MAIL1=$_SESSION["gmail"];
$PHONE=$_SESSION["cont"];
$DOB=$_SESSION["life"];
$ADDR=$_SESSION["det"];
$ADDR=$_SESSION["det"];


?>
Name:<input type="text" name="fname"value='<?php echo "$name";?>' required style="width:300px; height:30px; border-radius:5px;"><br/><br/>
Email:<input type="email" name="jfr" value='<?php echo "$MAIL1";?>' required readonly style="width:300px; height:30px; border-radius:5px;"><br/><br/>
Contact:<input type="number" name="jfr1" value='<?php echo "$PHONE";?>' required style="width:300px; height:30px; border-radius:5px;"><br/><br/>
Addr:<input type="text" name="addr" value='<?php echo "$ADDR";?>' required style="width:300px; height:30px; border-radius:5px;"><br/><br/>
Date Of Birth:<input type="date" name="dob" value='<?php echo "$DOB";?>' required style="width:300px; height:30px; border-radius:5px;">   
<pre>      <input type="submit" value="update" style="height:40px; width:150px; background-color:#4CAF50; color:white; border-radius:11px;"></pre>
</fieldset>
</form>
<form action="http://localhost/exm/welcome.html"><input type="submit" value="back"/></form>
</div>
