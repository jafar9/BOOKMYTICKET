<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
  <link  rel="stylesheet" href="main1.css">
	<script src="js/ajax.js"></script>
	<title>welcome to ticket booking</title>
		
	
</head>
<body>
<div class="box effect5">
<h1>BUS TICKET BOOKING</h1>
</div>
<div id="topmenu">
 
		<div id="list"><a href="http://localhost/exm/welcome.html" class="one"><i class="fa fa-home fa-fw" aria-hidden="true" style="display:inline;background-color:transparent; font-size:24px;"></i>&nbsp;HOME</a></div>
	<div id="list"><a href="http://localhost/about.php" class="one"><i class="fa fa-history fa-fw" aria-hidden="true" style="display:inline;background-color:transparent; font-size:24px;"></i>&nbsp;ABOUT&nbsp;US</a></div>
		<div id="list"><a href="#" class="one"><i class="fa fa-registered fa-fw" aria-hidden="true" style="display:inline;background-color:transparent; font-size:24px;"></i>&nbsp;NEW&nbsp;REGISTRATION</a></div>
	<div id="list"><a href="http://localhost/tcancel.php" class="one"><i class="fa fa-ticket fa-fw" aria-hidden="true" style="display:inline;background-color:transparent; font-size:24px;"></i>&nbsp;TICKET&nbsp;CANCELLATION</a></div>
		<div id="list"><a href="http://localhost/gall.php" class="one"><i class="fa fa-picture-o fa-fw" aria-hidden="true" style="display:inline;background-color:transparent; font-size:24px;"></i>&nbsp;GALLERY</a></div>
		<div id="list"><a href="http://localhost/packtour.php" class="one"><i class="fa fa-suitcase fa-fw" aria-hidden="true" style="display:inline;background-color:transparent; font-size:24px;"></i>&nbsp;PACKAGE&nbsp;TOURS</a></div>
		<div id="list"><a href="http://localhost/helpline.php" class="one"><i class="fa fa-phone fa-fw" aria-hidden="true" style="display:inline;background-color:transparent; font-size:24px;"></i>&nbsp;HELP&nbsp;LINE</a></div>
  
</div>
<marquee  behavior="alternate" scrollamount="6" onmouseover="this.stop()" onmouseout="this.start()" style="color:#FF0110; padding-top:20px; font-size:20px; font-family:Times New Roman" id="bordering" ><marquee width="600"><b>Welcome to the our site you can check bus availability easily</b></marquee></marquee>


<div class="mummy1" style="padding-left:100px;">
<div style="margin-top:20px;">
 <img src="30.jpg" width="600px"  alt="no img"  id="wss" style="box-shadow:50px 30px 20px;background-color:transparent; border-radius:30px; border:5px ridge black">
 <script>wss_elem=document.getElementById("wss"); wssSlide();</script>
	<h1 style="color:rgb(100,80,40); text-align:center; padding-top:150px; font:40px italic Tahoma" ><i>HAPPY JOURNEY</i></h1>
</div>
<div id="newreg">
<form action="http://localhost/exm/insert.php" method="POST" style="width:400px;">
<fieldset id="fieldset1" style="color:black; height:auto;">
<legend id="legend1" style="color:black;"><b>SIGN&nbsp;UP</b></legend><br/>
FIRSTNAME:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;LASTNAME:<br/><br/>
<input type="text" name="fname" required="required"  style="border: 2px solid #6E6E6E; width:120px; border-radius:5px; height:15px;" onkeyup="lettersonly(this);">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="lname" required="required"  style="border: 2px solid #6E6E6E; width:120px; border-radius:5px; height:15px;"onkeyup="lettersonly(this);">
<br/><br/>
DATE OF BIRTH:<br/><br/>
<input type="date" name="bdate" required="required" style="border: 2px solid #6E6E6E; width:180px; border-radius:5px; height:15px;"><br/><br/>
EMAIL:<br/><br/>
<input type="email" name="mail" required="required" style="border: 2px solid #6E6E6E; width:180px; border-radius:5px; height:15px;"><br/><br/>
PASSWORD:<br/><br/>
<input type="password" name="pwd1" required="required" style="border: 2px solid #6E6E6E; width:180px; border-radius:5px; height:15px;"><br/><br/>
RETYPE PASSWORD:<br/><br/>
<input type="password" name="pwd2" required="required" style="border: 2px solid #6E6E6E; width:180px; border-radius:5px; height:15px;"><br/><br/>
STATE:<br/><br/>
<input type="text" name="ste" required="required" style="border: 2px solid #6E6E6E; width:180px; border-radius:5px; height:15px;" onkeyup="lettersonly(this);"><br/><br/>
MOBILE NO:<br/><br/>
<input type="text" name="cell" required="required" maxlength="10" style="border: 2px solid #6E6E6E; width:180px; border-radius:5px; height:15px;" onkeyup="numbersonly(this);"><br/><br/>
 CAPTCHA:<br/><br/><?php
 $str='ABCDEFGHIJ123456789123456789XYZQRST';
 $string_shuffled=str_shuffle($str);
 $half=substr($string_shuffled,0,6);
 echo "<b style=\" color:red; font-size:20px; border: 2px solid black;padding: 3px; margin-left:25px; border-radius: 5px;\"><i>$half</i></b>";
 ?><br/><br/>
 <input type="text" name="captcha" required="required" style="border: 2px solid #6E6E6E; width:180px; border-radius:5px; height:15px;"><br/><br/>
 <input type="checkbox" name="accept" required="required">i am accepting the terms and conditions<br/><br/>
<pre>          <input type="submit" value="SUBMIT">  <input type="submit" value="RESET"></pre>
</fieldset>
</form>
</div>
</div>
<br/>
<br/>
<hr/>
<div id="bottom" style="padding-left:150px;">
  <div id="blist1">
   <h4 style="background-color:black;">Related&nbsp;links</h4><br/>
   <a href="http://www.apsrtconline.in/oprs-web/home/faq.do" target="_blank">FAQS</a><br/><br/>
	 <a href="http://www.tsrtconline.in/oprs-web/home/terms.do" target="_blank">Terms&amp;Conditions</a><br/><br/>
  <a href="http://www.apsrtconline.in/oprs-web/home/privacy.do" target="_blank">Privacy policy</a><br/><br/>
</div>
<div id="blists">
<a href="http://localhost/exm/about.php" target="_blank" >About us</a><br/><br/>
<a href="http://localhost/exm/welcome.html" target="_blank" >Admin login</a><br/><br/>
<a href="http://localhost/exm/welcome.html" target="_blank">User login</a><br/><br/>
</div>
<div id="blists">
Follow us:<br/><br/>
<a href="http://www.facebook.com/apsrtc" target="_blank"><i class="fa fa-facebook-square fa-fw" aria-hidden="true" style="font-size:36px; background-color:#0B73C4; border-radius:5px;"></i></a>
<a href="http://www.twittercom/apsrtc" target="_blank"><i class="fa fa-twitter-square  fa-fw" aria-hidden="true" style="font-size:36px; background-color:#0B73C4; border-radius:5px;"></i></a>
<a href="http://www.twittercom/apsrtc" target="_blank"><i class="fa fa-instagram   fa-fw" aria-hidden="true" style="font-size:36px; background-color:#BDB76B; border-radius:5px;"></i></a>
</div>
</div>

</body>
</html>
