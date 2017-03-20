<!DOCTYPE HTML>
<html lang="en">
	<head>
	  <title>NEW REGISTRATION</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- -->
		<!-- Latest compiled minified css-->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!--optional theme -->
		<link rel="stylesheet" href="css/bootstrap-theme.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
		<link rel="stylesheet" href="main1.css"/>
	<title>welcome to ticket booking</title>
	
	</head>
	<body>
		
			<div class="box effect5">
                <h1>BUS TICKET BOOKING</h1>
           </div>
<div id="topmenu">
    
		<div id="list"><a href="http://localhost/exm/welcome.html" class="one"><i class="fa fa-home fa-fw" aria-hidden="true" style="display:inline;background-color:transparent; font-size:24px;"></i>&nbsp;HOME</a></div>
		<div id="list"><a href="http://localhost/exm/aboutus.html" class="one"><i class="fa fa-home fa-fw" aria-hidden="true" style="display:inline;background-color:transparent; font-size:24px;"></i>&nbsp;ABOUT&nbsp;US</a></div>
		<div id="list"><a href="#" class="one"><i class="fa fa-registered fa-fw" aria-hidden="true" style="display:inline;background-color:transparent; font-size:24px;"></i>&nbsp;NEW&nbsp;REGISTRATION</a></div>
		<div id="list"><a href="http://localhost/exm/gall.html" class="one"><i class="fa fa-picture-o fa-fw" aria-hidden="true" style="display:inline;background-color:transparent; font-size:24px;"></i>&nbsp;GALLERY</a></div>
		<div id="list"><a href="http://localhost/exm/package.html" class="one"><i class="fa fa-suitcase fa-fw" aria-hidden="true" style="display:inline;background-color:transparent; font-size:24px;"></i>&nbsp;PACKAGE&nbsp;TOURS</a></div>
		<div id="list"><a href="http://localhost/exm/sample.html" class="one"><i class="fa fa-phone fa-fw" aria-hidden="true" style="display:inline;background-color:transparent; font-size:24px;"></i>&nbsp;HELP&nbsp;LINE</a></div>
  
</div>

			<br/>
			<br/>
			
<div class="mummy2" style="background-color:#02a388;margin-left:50px;padding-left:100px; border-radius:10px;">

<div>
<form action="http://localhost/exm/insert.php" method="POST" style="width:400px;">
<fieldset id="fieldset">
<legend id="legend"><b style="color:black;">REGISTRATION</b></legend>
<b >FIRST NAME:</b><br/><br/>
<input type="text" name="fname" required="required"  style="color:black; border-radius:7px; width:400px; height:30px;"><br/><br/>
DATE OF BIRTH:<br/><br/>
<input type="date" name="bdate" required="required" style="color:black; border-radius:7px; width:400px; height:30px;"><br/><br/>
EMAIL:<br/><br/>
<input type="email" name="mail" required="required" style="color:black; border-radius:7px; width:400px; height:30px;"><br/><br/>
PASSWORD:<br/><br/>
<input type="password" name="pwd1" required="required" style="color:black; border-radius:7px; width:400px; height:30px;"><br/><br/>
RETYPE PASSWORD:<br/><br/>
<input type="password" name="pwd2" required="required" style="color:black; border-radius:7px; width:400px; height:30px;"><br/><br/>
STATE:<br/><br/>
<input type="text" name="ste" required="required" style="color:black; border-radius:7px; width:400px; height:30px;"><br/><br/>
MOBILE NO:<br/><br/>
<input type="number" name="cell" required="required" maxlength="10" style="color:black; border-radius:7px; width:400px; height:30px;"><br/><br/>
CAPTCHA:<br/><br/><?php
 $str='ABCDEFGHIJ123456789123456789XYZQRST';
 $string_shuffled=str_shuffle($str);
 $half=substr($string_shuffled,0,6);
 echo "<b style=\" color:red; font-size:20px; border: 2px solid black;padding: 3px; margin-left:25px; border-radius: 5px;\"><i>$half</i></b>";
 ?><br/><br/>
 <input type="text" name="captcha" required="required" style="color:black; border-radius:7px; width:400px; height:30px;"><br/><br/>

 <input type="checkbox" name="accept" required="required">i am accepting the terms and conditions<br/><br/>
<pre style="background-color:#02a388;">             <input type="submit" value="submit" style="height:40px; width:150px"> </pre>
</fieldset>
</form>
</div>
</div>
		
<br/>
<br/>
 <hr/>

<div id="bottom" style="margin-left:50px;">
  <div id="blist1">
   <h4 style="background-color:black;">Related&nbsp;links</h4><br/>
   <a href="http://www.apsrtconline.in/oprs-web/home/faq.do" target="_blank">FAQS</a><br/><br/>
	 <a href="http://www.tsrtconline.in/oprs-web/home/terms.do" target="_blank">Terms&amp;Conditions</a><br/><br/>
  <a href="http://www.apsrtconline.in/oprs-web/home/privacy.do" target="_blank">Privacy policy</a><br/><br/>
</div>
<div id="blists">
<a href="http:localhost/about.php" target="_blank" >About us</a><br/><br/>
<a href="http://localhost/welcome1.php" target="_blank" >Admin login</a><br/><br/>
<a href="http://localhost/mainpage1.php" target="_blank">User login</a><br/><br/>
</div>
<div id="blists">
Follow us:<br/><br/>
<a href="http://www.facebook.com/apsrtc" target="_blank"><i class="fa fa-facebook-square fa-fw" aria-hidden="true" style="font-size:36px; background-color:#0B73C4; border-radius:5px;"></i></a>
<a href="http://www.twittercom/apsrtc" target="_blank"><i class="fa fa-twitter-square  fa-fw" aria-hidden="true" style="font-size:36px; background-color:#0B73C4; border-radius:5px;"></i></a>
<a href="http://www.twittercom/apsrtc" target="_blank"><i class="fa fa-instagram   fa-fw" aria-hidden="true" style="font-size:36px; background-color:#BDB76B; border-radius:5px;"></i></a>
</div>
</div>


	<!-- Java script files should be linked at the bottom of the page-->
		<script src="js/jquery.min.js"></script>
	<!-- Latest compiled and minified Java script -->	
		<script src="js/bootstrap.min.js"></script>
		
	<script src="js1/ajax.js"></script>
	</body>