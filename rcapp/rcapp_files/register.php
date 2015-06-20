<?php include "base.php"; ?>
<!doctype html>
<meta charset="utf-8">

<html> 
 <head> 
    <title> RUET CAFETERIA </title> 
	<!--link  rel="stylesheet" href="styles/register.css"/-->
	<link  rel="stylesheet" href="styles/cafeteria.css"/>
   </head>
   <body>

		
<div style="margin-top:15px" id="cafelogin">
<?php
if(!empty($_POST['username']) && !empty($_POST['password']))
{
	$username = mysql_real_escape_string($_POST['username']);
    $password = md5(mysql_real_escape_string($_POST['password']));
    $email = mysql_real_escape_string($_POST['email']);
    
	 $checkusername = mysql_query("SELECT * FROM users WHERE Username = '".$username."'");
     
     if(mysql_num_rows($checkusername) == 1)
     {
     	echo "<h1>Error</h1>";
        echo "<p>Sorry, that username is taken. Please go back and try again.</p>";
     }
     else
     {
     	$registerquery = mysql_query("INSERT INTO users (Username, Password, EmailAddress) VALUES('".$username."', '".$password."', '".$email."')");
        if($registerquery)
        {
        	echo "<h1>Success</h1>";
        	echo "<p>Your account was successfully created. Please <a href=\"../iindex.php\">click here to login</a>.</p>";
        }
        else
        {
     		echo "<h1>Error</h1>";
        	echo "<p>Sorry, your registration failed. Please go back and try again.</p>";    
        }    	
     }
}
else
{
	?>
    
   <h1 align="center">SIGN UP</h1>
    
   <p align="center">Please enter your details below to sign up.</p>
    
	<form align="center" method="post" action="register.php" name="registerform" id="registerform">
	<fieldset>
		<label for="username">Username:</label><input style="width:200px;height:25px" type="text" name="username" style="width:260px;" id="username" /><br><br>
		<label for="password">Password:</label><input style="width:200px;height:25px" type="password" name="password"  style="width:260px;" id="password" /><br><br>
        <label for="email">Email Address:</label><input style="width:200px;height:25px" type="text" name="email" style="width:260px;" id="email" /><br><br>
		<input type="submit" name="register" style="width:120px;border-radius:4px" value="SIGN UP" class="button" />
		<br><br>Already have an account! <a href="http://localhost/rcapp/iindex.php">Sign in</a> now!

	</fieldset>
	
	</form>
    
    <?php
}
?>
</div>

<div class="back">
 <a href="javascript:history.go(-1)"><img style="padding:0px;margin-left:5px" src="images/back.png" title="Back To Home" width=40px height=40px></a> 
 
 
 
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
