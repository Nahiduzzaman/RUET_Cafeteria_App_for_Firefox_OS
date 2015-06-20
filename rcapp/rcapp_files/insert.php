
<html>
  <head>
    <title>Thank you</title>
	<link rel="stylesheet"  href="styles/insert.css">
  </head>
  <body>
  
      <h1>Thank you! for your order. We have received your order!</h1>

	  <div id="head">
	  
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
  //$message = $_REQUEST['comments'] ;
  mail( "$email", "Ruet Cafeteria Order Confirmation", "An Order has just been confirmed from this mail.You will receive your order within a few time", "From: ruetcafeteria10@gmail.com" );
}

$foods = $_POST["foods"];
$hall = $_POST["hall"];
@$b=$_POST['extras'];
/*if(@$_POST['Order Now'])
{
 $s="insert into tblcust3(sex2) values('$b')";
echo "Your Data Inserted";
mysql_query($s);
}*/

$sql="INSERT INTO customerorder (Date,Time,Name, Address, ProductID, Email, roomno, mobile, Hall, Extras, Foods, bmobile, trxID, bill, nop)
VALUES
(CURDATE(), CURTIME(),'$_POST[name]', '$_POST[Address]','$_POST[ProductID]','$_POST[Email]','$_POST[roomno]','$_POST[mobile]','$hall','$b','$foods','$_POST[bmobile]','$_POST[trxID]','$_POST[bill]','$_POST[nop]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
 echo "Name:       $_POST[name] </br>";
 //echo "Address:       $_POST[Address] </br>";
   //echo "Product id:         $_POST[ProductID]</br>";
 echo "Email:         $_POST[Email]</br>";
 //echo "Room No:          $_POST[roomno]</br>";
 echo "Mobile:     $_POST[mobile]<br>";
 //echo "Hall Name: $hall</br>";
 echo "Extras: $b</br>";
 echo "Food Type: $foods</br>";
mysql_close($con);
?>
<center><a href="../index.php"> <img src="images/home.png" width=50px height=50px></a></center>

</div>



  
  </body>
</html>