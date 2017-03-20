<!DOCTYPE HTML>
<html lang="en">
<head>
  <style>

body{
background-color:#b0e0e6;
}

table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
    text-align: left;
}

</style>
</head>
<body>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{
  $day1=test_input($_POST["djay"]);
  $name=test_input($_POST["name"]);
  $fsname=test_input($_POST["fsname"]);
  $tsname=test_input($_POST["tsname"]);
  $age=test_input($_POST["age"]);
  $bno=test_input($_POST["bno"]);
  $gender=test_input($_POST["SEX"]);

}
$cons = "RCQ9P-" ;
$pnr = $cons.$bno;
$pnr = $pnr."-";
$pnr = $pnr.rand(1,200);


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

$sql = "INSERT INTO person(PNR,Name,Age,gender)VALUES('$pnr','$name',$age,'$gender')";
$sql1="INSERT INTO HISTORY(BUSID,dateofj,PNR)VALUES('$bno','$day1','$pnr')";
$sql2="SELECT ARR_TIME,DEPT_TIME FROM MYTRIP WHERE BUSID='$bno'";
if ($conn->query($sql) === TRUE) {
    //echo "person record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

if ($conn->query($sql1) === TRUE) {
    //echo "HISTORY record created successfully";
} else {
    echo "Error: " . $sql1 . "<br>" . $conn->error;
}
$result = $conn->query($sql2);
$row = $result->fetch_assoc();
$arrti=$row["ARR_TIME"];
$deptti=$row["DEPT_TIME"];

?>

  <h1>TICKET BOOKING SUCCESSFULL</h1>
<table border="1"  width="70%">
        <tr><td>Name</td><td><?php echo "$name";?></td><td>Sex</td><td><?php echo"$gender";?></td></tr>
        <tr><td>FROM STATION</td><td><?php echo "$fsname";?></td><td>BUSNO</td><td><?php echo "$bno";?></td></tr>
        <tr><td>date of journey</td><td><?php echo"$day1";?></td><td>ARR_TIME</td><td><?php echo "$arrti";?></td></tr>
        <tr><td>To STATION</td><td><?php echo "$tsname";?></td></td><td>DEPT_TIME</td><td><?php echo "$deptti";?></td></tr>
        <tr><td>PNR NUMBER</td><td><?php echo"$pnr";?></td><td>status</td><td>BOOKED</td></tr>
</table>


<br/><br/>
<form action="http://localhost/exm/welcome.html" method="post">
<pre>        <input type="submit" value="backtohome" style="height:40px; width:150px; background-color:#4CAF50; color:white; border-radius:11px;">  <input type="button" value="Print ticket" onclick="myFunction()" style="height:40px; width:150px; background-color:#4CAF50; color:white; border-radius:11px;"></pre>
</form>


<script>
function myFunction() {
    window.print();
}
</script>

</body>
</html>
