<?php session_start() ?>
<!doctype html>
<meta charset="utf-8">
<html>
  <head>
    <title>Contact Us</title>
	<link  rel="stylesheet" href="styles/cafeteria.css"/>
	<link rel="stylesheet"  href="styles/contact.css">
  </head>
  <body>
  <div id="coverimg">  
 <img  src ="images/cafefront.jpg" alt="cafeteria picture" width=100% height=90px>
 </div>

		
		<div id="main">
		
		<br>
		<h1> Contact Us </h1>
		
		<form name="myForm" action="contactinsert.php" onsubmit ="return validateForm()"method="post">
		<hr align="left" height="2px" width="95%" color="#310906">
		
		
		<br>
		
		
		<h2> <a id="cform">Contact Form</a></h2><br>
		
				
					<b>First Name:</b><br>
					
                    <input type="text" name="name" id="name" style="width:285px;height:22px" value="" />
					<br>
					<br>
					
				  
					<b>E-mail:</b><br>
					
						<input type="text" name="Email" id="Email" style="width:285px;height:22px" value="" />
					<br>
					<br>
					
					<b>Your Message:</b><br>
					
					<textarea style="width:285px" name="comments" id="comments" rows="6" cols="38"></textarea>
					<br>
					<br>
					<input type="submit" value="Send" style="width:90px;font-size:120%;border-radius:3px;padding:5px;height:35px" class="button"  />
					
					<br>
					<h2>Our Location</h2>
		
		
		<b><h4>Address</h4></b>
		<small>
		Rajshahi University of Engineering & Technology<br>
		Dhaka-Natore Road<br>
		Talaimari,Rajshahi<br></small>
		
		<b><h4>Telephone/Mobile/E-mail</h4></b>
		
		<small><b>Ph:</b>(0721)75042-3,751320-1,<br><b>Mobile:</b>(+880)1736675869-71<br><b>E-mail:</b>ruet.cafeteria@ruetbd.org</small>
				
				  
				  
		</form>
		
		
		<br>
		

	
		 <a  href="../iindex.php"> <img align="right" src="images/home.png" style="margin-right:15px" title="Back To Home" width=50px height=50px></a><br><br><br>
		
		</div >
		
		
		
	<div class="back">
 <a href="javascript:history.go(-1)"><img align="left" *style="padding:0px;margin-left:5px" src="images/back.png" title="Back To Home" width=35px height=40px></a> 
 
 <a href="javascript:window.close()"><img align="right" style="padding:4px;margin-left:5px" src="images/close.jpg" title="Back To Home" width=30px height=30px></a> 
 
 </div>	
		
		
		   <div id="footer">
      &copy; <?php echo date ("Y") ?>, RUET CAFETERIA
      <br />
      All trademarks and registered trademarks appearing on 
      this site are the property of their respective owners.
    </div>
		
		</body>
</html>
