<!doctype html>
<meta charset="utf-8">

<html> 
 <head> 
    <title>Cafeteria Home </title>
	<link  rel="stylesheet" href="rcapp_files/styles/cafeteria.css"/>
	<!--script src="rcapp_files/jquery-1.10.1.js"></script-->
    <!--script src="rcapp_files/back.js"></script-->
	</head>
   <body>
   
  <div id="coverimg">  
 <img  src ="rcapp_files/images/cafefront.jpg" alt="cafeteria picture" width=100% height=90px>
 </div>
 
 <div id="cscroll">
		 <marquee  behavior="scroll"  scrollamount="3" direction="left">
		
		Welcome to RUET CAFETERIA. Enjoy Our foods! Follow us in Social Network sites. Leave Your reviews in SERVICES section. Be with us. Our
		Cafeteria is OPEN 24/7 for your service.Order Online Enjoy with your friends.
		</marquee>
		</div>
		
  <!--a href= "rcapp_files/foods.html"> <div id="menu">
 MENU
 </div></a-->
 <div id="menu">
 <a href="rcapp_files/foods.html"> <button style="margin-top:10px;border-radius:5px 5px 0 0" class="button" >MENU</button></a>
 <a href="rcapp_files/weeklyspecial.html"> <button class="button" >SERVICES</button></a>
 <a href="rcapp_files/foods.html"> <button class="button" >CONTACT</button></a>
 <a href="rcapp_files/foods.html"> <button class="button" >ABOUT US</button></a>
 <a href="rcapp_files/foods.html"> <button class="button" >SPECIALS</button></a>
 </div>
 
 <!--div class="backline">
 <hr style="visibility:hidden">
 </div-->
 
 <div class="back">
 <a href="javascript:history.go(-1)">Back</a> 
 </div> 
 
 
 
 

 
 <div id="footer">
      &copy; <?php echo date ("Y") ?>, RUET CAFETERIA
      <br />
      All trademarks and registered trademarks appearing on 
      this site are the property of their respective owners.
    </div>
 
 </body>

</html>