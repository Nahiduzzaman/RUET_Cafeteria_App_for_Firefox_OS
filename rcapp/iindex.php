<?php include "rcapp_files/base.php"; ?> 
<?php header('Cache-Control:max-age=900'); ?> 

<!doctype html>
<meta charset="utf-8">

<html>


<head> 
    <title>Cafeteria Home </title>
	<link  rel="stylesheet" href="rcapp_files/styles/cafeteria.css"/>
	<!--script src="rcapp_files/jquery-1.10.1.js"></script-->
    <!--script src="rcapp_files/back.js"></script-->
	<script>
	function myfunc(){
	self.close();
	confirm("quit?");
	</script>

	
	
</head>  
<body>  
<div>




<?php
if(!empty($_SESSION['LoggedIn']) && !empty($_SESSION['Username']))
{
	 ?>

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
 <a href="rcapp_files/table.html"> <button style="margin-top:10px;border-radius:5px 5px 0 0" class="button" >MENU</button></a>
 <a href="rcapp_files/weeklyspecial.html"> <button class="button" >SPECIALS</button></a>
 <a href="rcapp_files/contact.php"> <button class="button" >CONTACT</button></a>
 <a href="rcapp_files/form.php"> <button class="button" >SERVICES</button></a>
 <a href="rcapp_files/about.php"> <button class="button" >ABOUT US</button></a>
 </div>
 
 <!--div class="backline">
 <hr style="visibility:hidden">
 </div-->
 
 <div class="back">
 <a href="javascript:history.go(-1)"><img style="padding:0px;margin-left:5px" src="rcapp_files/images/back.png" title="Back To Home" width=40px height=40px></a> 
 
 
 
 <a href="javascript:window.close()"><img align="right" style="padding:4px;margin-left:5px" src="rcapp_files/images/close.jpg" title="Back To Home" width=30px height=30px></a> 
 </div>
 
 
<!--input src="rcapp_files/images/close.png" type="image"  value="close window" onclick="self.close()" width=35px height=40px-->
 

 
 <div id="footer">
 
     <form method="post" action="rcapp_files/logout.php" name="loginform" id="loginform">
	 <input type="submit" name="logout" class="logoutbutton" id="logout" value="Sign Out" />
     </form>
	 
      &copy; <?php echo date ("Y") ?>, RUET CAFETERIA
      <br />
      All trademarks and registered trademarks appearing on 
      this site are the property of their respective owners.
	  
    </div>
	

 

     <?php
}
elseif(!empty($_POST['username']) && !empty($_POST['password']))
{
	$username = mysql_real_escape_string($_POST['username']);
    $password = md5(mysql_real_escape_string($_POST['password']));
    
	$checklogin = mysql_query("SELECT * FROM users WHERE Username = '".$username."' AND Password = '".$password."'");
    
    if(mysql_num_rows($checklogin) == 1)
    {
    	$row = mysql_fetch_array($checklogin);
        $email = $row['EmailAddress'];
        
        $_SESSION['Username'] = $username;
        $_SESSION['EmailAddress'] = $email;
        $_SESSION['LoggedIn'] = 1;
        
    	//echo "<h1>Success</h1>";
        //echo "<p>We are now redirecting you to the member area.</p>";
        echo "<meta http-equiv='refresh' content='=2;iindex.php' />";
    }
    else
    {
    	echo "<h1>Error</h1>";
        echo "<p>Sorry, your account could not be found. Please <a href=\"iindex.php\">click here to try again</a>.</p>";
    }
}
else
{
	?>
	
	<div id="cafelogin">
    
   <h1>SIGN IN</h1>
    
   <p>Please either signin below, or <a href="rcapp_files/register.php">click here to register</a>.</p>
    
	<form method="post" action="iindex.php" name="loginform" id="loginform">
	<fieldset>
		<label for="username">Username:</label><input style="width:200px;height:25px" type="text" name="username" id="username" /><br><br>
		<label for="password">Password:&nbsp</label><input style="width:200px;height:25px" type="password" name="password" id="password" /><br><br>
		<input type="submit" name="login" style="width:100px;border-radius:4px" id="login" value="SIGN IN"  class="button" />
	</fieldset>
	</form>
	
	</div>
	<div class="back">
 <a href="javascript:history.go(-1)"><img style="padding:0px;margin-left:5px" src="rcapp_files/images/back.png" title="Back To Home" width=40px height=40px></a> 
 
 
 
 <a href="javascript:window.close()"><img align="right" style="padding:4px;margin-left:5px" src="rcapp_files/images/close.jpg" title="Back To Home" width=30px height=30px></a> 
 </div>
 
 <div id="footer">
  
      &copy; <?php echo date ("Y") ?>, RUET CAFETERIA
      <br />
      All trademarks and registered trademarks appearing on 
      this site are the property of their respective owners.
	  
    </div>
    
   <?php
}
?>

</div>



</body>
</html>
