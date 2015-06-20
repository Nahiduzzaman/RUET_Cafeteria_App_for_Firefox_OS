
<?php include "base.php"; ?> 

<!doctype html>
<meta charset="utf-8">

<html>
<head>  

<title>Customer's Order</title>
<link  rel="stylesheet" href="styles/cafeteria.css"/>
<link rel="stylesheet"  href="styles/form.css"/>
	<script src="myForm.js"></script>

	
	
</head>  
<body> 

<h1 align="center">Welcome! to our Kitchen</h1>
<center><small>Fill the form below and confirm your order</small></center>
<br>
<hr>
<hr>
<br>
 
<div id="maino">





	  

        <form id="fstyle" name="myForm" action="insert.php" onsubmit ="return validateForm()" method="post">
      
	  
	  
			Choose&nbspyour&nbspFood:
          			
			<select name="foods" id="foods" style="width:300px;font-size:80%" value="select one">
            <option value="">Select One</option>
            <option value = "Breakfast">Breakfast</option>
            <option value = "Lunch">Lunch</option>
            <option value = "TeaTime">TeaTime</option>
            <option value = "Supper">Supper</option>
			 <option value = "WeeklySpecials">Weekly Specials</option>
			
			   </select>
	
<br>
	
	<br>
		Choose&nbspyour&nbspHall/Location:
          			
			<select name="hall" id="hall" style="width:300px;font-size:80%">
            <option value="">Select One</option>
            <option value = "selim">Shahid Lt. Selim Hall</option>
            <option value = "zia">Shahid President Ziaur Rahman Hall</option>
            <option value = "shahidul">Shahid Shahidul Islam Hall</option>
            <option value = "hamid">Shahid Abdul Hamid Hall</option>
            <option value = "hasina">Sheik Hasina Hall</option>
            <option value = "tinshed">Tinshed Hall</option>
			  <option value = "others">Others</option>
		
			   </select>
<br>	
	
	
		<br>
			Extras:
			<br>
			<input type="radio" name="extras" value="giftwrap"/><small>Gift&nbspWrap </small>
			<br>
			<input type="radio" name="extras" value="catalog"/><small>Include&nbspCatalog&nbspwith&nbspOrder </small>
			
			
			
			

	  
	     <br>
		 <br>
         <center><h2><b>Send to:</b></h2></center>
		  
            
			<br>
              
			  
			  
                
                  Name:
                  
                    <input type="text" name="name" id="name" onClick="blankDefault('Enter Your Name', this)" style="width:296px;height:23px" value="" />
                  
                
				<br>
			
				<br>
                  Product&nbspId:
                  <br>
                    <input type="text" onfocus="this.value=''; return false;" style="width:296px;height:23px" name="ProductID" id="ProductID"  maxlength="6"  title="You can find the Product Id by hovering the cursor over foods name,You can order maximum 3 products!!" value="Example: B1,L1,W3 etc." />
                                                 
					   
				  
                
				<br>
                <br>
                  E-mail:
                  <br>
                    <input type="text" name="Email" id="Email" style="width:296px;height:23px" value="" />
                  
                
				<br>
                <br>
                  Room No:
                  <br>
                    <input type="text" name="roomno" id="roomno" style="width:296px;height:23px" value="" />
                  
                
				<br>
				<br>
                  Mobile:
                  <br>
                    <input type="text" name="mobile" id="mobile" style="width:296px;height:23px" value="" />
                
                <br>				
                <br>
				  Address(If Outside of RUET):
                  <br>
                    <textarea name="Address" style="width:296px" onfocus="this.value=''; return false;" title="Please write your full address here" id="Address" rows="10" cols="28">
Dear Outside Customers,
Please write here your full address where you want to accept your order...</textarea>
              
            
	  

                

	  
		
			
			
			


          <!--tr>
            <th>Comments:</th>
            
              <textarea name="comments" id="comments" rows="10" cols="48"></textarea>
            
          </tr-->
		  
		  
		  <br>
		  <br>
		  <h2 align="center"> Payment: </h2>
		  <center><small>We accept payment via <em>"bKash"</em>.Please fill required sectors below to confirm your order :-</small>
		  <br>
		  <br><img align="center" src="images/index.jpg" title="Bkash" width=100px height=64px>
		  <br>
                  <b><h4 align="center">Our account no:</h4></b> <big><big>01840053231</big></big>.</center> <br><br>		  
                  Mobile_No (Which you used to pay):<br>
                    <input type="text" name="bmobile" id="bmobile"  style="width:296px;height:23px" value="" /><br><br>
                  bKash Transaction ID (TrxID):<br>
                    <input type="text" name="trxID" id="trxID" style="width:296px;height:23px" value="" /><br><br>
					 Paid Amount(BDT):<br>
					    <input type="text" name="bill" id="bill" style="width:296px;height:23px" value="" /><br><br>
					 Number of Products:<br>
					    <input type="text" name="nop" id="nop" style="width:296px;height:23px" value="" /><br>
					    
                 
				<br>
            
              <center><input type="submit" value="Confirm Order"  class="fbutton" onclick= "return validateForm()"  /></center>
            
          
		
      </form>


<br>
 <a  href="../iindex.php"> <img align="right" src="images/home.png" title="Back To Home" width=50px height=50px></a><br><br>

 </div>
 

	
		
	<div class="back">
 <a href="javascript:history.go(-1)"><img style="padding:0px;margin-left:0px" src="images/back.png" title="Back To Home" width=35px height=40px></a> 
 
 <a href="javascript:window.close()"><img align="right" style="padding:4px;margin-left:5px" src="images/close.jpg" title="Back To Home" width=30px height=30px></a> 
 
 </div>	

<div id="footer">
      &copy; 2013, RUET CAFETERIA
      <br />
      All trademarks and registered trademarks appearing on 
      this site are the property of their respective owners.
    </div>




</body>
</html>
