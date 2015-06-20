
<html>
  <head>
    <title>Thank you</title>
	<link rel="stylesheet"  href="styles/insert.css">
	
  </head>
  <body>
  
      <h1 align="center">Thank you! for your feedback.Your advices are always important to us.</h1>

	  <div id="head">
	  <center><a href="contact.php">Go Back</a><center>
	  <?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("ruetcafe", $con);
  
if (isset($_REQUEST['Email'])){ 
 $email = $_REQUEST['Email'] ;
  //$subject = $_REQUEST['name'] ;
  $message = $_REQUEST['comments'] ;
  mail( "$email", "Contact", "Thank you very much for your advice!", "From: ruetcafeteria10@gmail.com" );
}
$sql="INSERT INTO contact (Name, Email, Comments)
VALUES
('$_POST[name]','$_POST[Email]','$_POST[comments]')";
 //mail('Email','Name','Comments','From: ruetcafeteria10@gmail.com');

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
 //echo "Name:       $_POST[name] </br>"; 
// echo "Email:         $_POST[Email]</br>";
 
mysql_close($con);
?>
</div>

  
  </body>
</html>