<?php include "base.php"; ?> 


<!doctype html>
<meta charset="utf-8">

<html> 
 <head> 
    <title> RUET CAFETERIA </title> 
	<link  rel="stylesheet" href="cafeteria.css"/>
	
   </head>
   <body>
   
   <div id="cafelogin">

<?php
if(!empty($_SESSION['LoggedIn']) && !empty($_SESSION['Username']))
{
	 ?>
	 
	  <form method="post" action="ruetcafeteria_files/logout.php" name="loginform" id="loginform">
	 <input type="submit" name="logout" id="logout" class="button" value="Logout" />
     </form>


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
        
    	echo "<h1>Success</h1>";
        echo "<p>We are now redirecting you to the member area.</p>";
        echo "<meta http-equiv='refresh' content='=2;../../index.php' />";
    }
    else
    {
    	echo "<h1>Error</h1>";
        echo "<p>Sorry, your account could not be found. Please <a href=\"../../index.php\">click here to try again</a>.</p>";
    }
}
else
{
	?>
    
   <h1>Member Login</h1>
    
   <p>Thanks for visiting! Please either login below, or <a href="register.php">click here to register</a>.</p>
    
	<form method="post" action="../../index.php" name="loginform" id="loginform">
	<fieldset>
		<label for="username">Username:&nbsp</label><input type="text" name="username" id="username" /><br /><br>
		<label for="password">Password:&nbsp&nbsp</label><input type="password" name="password" id="password" /><br><br>
		<input  type="submit" name="login" id="login" class="button" value="Login" />
	</fieldset>
	</form>
    
   <?php
}
?>

</div>

</body>



</html>


