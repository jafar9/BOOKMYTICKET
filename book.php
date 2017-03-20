<!doctype html>

<html>
<head>
<title>
LOGIN PAGE
</title>
</head>
<style>
body {
 background-image: url("3.jpg");
}

.mar1 {
margin-top: 30px;
margin-left: 50px;
margin-right: 50px;
 color: #A55B08;
 font-size: 35px;
 font-family: frost;
 font-weight: bold;

}
.error {color: #FF0000;}

#sub {
 color: #E51E1E;
 text-shadow: 3px 1px 3px #57A067;
 font-size: 30px;
 font-family: frosty;
}


#submits 
{
   background:transparent;
   border-color:transparent;
   color:white;
   font-size: 30px;
   margin-left: 780px;
   cursor: crosshair;
   font-family: frosty;
   border: 3px dashed black;
}

#submit 
{
   background:transparent;
   border-color:transparent;
   color:white;
   font-size: 25px;
   margin-left: 1700px;
   cursor: crosshair;
   font-family: frosty;
}

#quote{
 margin-top: 200px;
 margin-left: 250px;
 background-color: transparent;
 text-align: center;
}

#q {
 color: white;
 font-size: 35px;
 font-family:papyrus;
}

#q1 {
 color: white;
 font-size: 35px;
 font-family:cursive;
 margin-left:-15px;
}
#q::first-letter{
 color: red;
}

#login {
 margin-left: 600px;
 box-shadow: 5px 2px 9px black;
 padding: 10px;
 width: 700px;
 border-radius: 3px;
}

#new {
 color: white;
 font-size: 20px;
 font-family: cursive;
 
}

#move {
 margin-left: 460px;
}

</style>

<body>
  <?php
  session_start();
  $day=$_SESSION["jdate"];
  $_SESSION['fdate']=$day;
  ?>
<div class="mar1">
<marquee behaviour="scroll" scrollamount=20 direction="left"> WELCOME &nbsp TO &nbsp BOOK &nbsp MY &nbsp TICKET &nbsp </marquee>
</div>
<br>
<div id="login">
<form method="POST" action="http://localhost/exm/book2.php">
<input type="text" name="djay" value="<?php echo $day;?>" readonly required style="width:400px ; height:30px;"><br/><br/>  

<input type="text" placeholder="FULL NAME" name="name" style="width:400px ; height:30px;" required> <br/><br/>

<input type="text" placeholder="From station" name="fsname" style="width:400px ; height:30px;" required> <br/><br/>

<input type="text" placeholder="TO NAME" name="tsname" style="width:400px ; height:30px;" required> <br/><br/>

<input type="number" placeholder="age" name="age" style="width:400px ; height:30px;" required> <br/><br/>

<input type="number" placeholder="BUS NUMBER" name="bno" style="width:100px ; height:30px;" required><br/><br/>

<input type="number" placeholder="NUMBER OF TICKETS" name="ticket_count" value="1" style="width:100px ; height:30px;" required> <br> <br>

<input type="radio"  name="SEX" VALUE="MALE"> MALE &nbsp; &nbsp; &nbsp; 

<input type="radio"  name="SEX" VALUE="FEMALE" > FEMALE <br> <br>

<span id="move"> <input type="submit" value="login" style="width:100px ; height:30px;"> </span>

</form>
</div>


<br>
<br> <br> <br> <br> <br>
<div class="mar1">
<marquee behaviour="scroll" scrollamount=20 direction="right"> WELCOME &nbsp TO &nbsp BOOK &nbsp MY &nbsp TICKET &nbsp </marquee>
</div>

</body>
</html>


