
         function blankDefault(_text, _this) {
    if(_text == _this.value)
        _this.value = '';
}
		 
			function validateForm()
					{
			var a=document.forms["myForm"]["hall"].value;
			var b=document.forms["myForm"]["Email"].value;
			var c=document.forms["myForm"]["mobile"].value;
			var d=document.forms["myForm"]["bmobile"].value;
			var e=document.forms["myForm"]["trxID"].value;
			var f=document.forms["myForm"]["bill"].value;
			var g=document.forms["myForm"]["nop"].value;
			var x=document.forms["myForm"]["name"].value;
			var y=document.forms["myForm"]["ProductID"].value;
			var z=document.forms["myForm"]["foods"].value;
			
			//var c= B&L&T&S&W;
		
			
			if (z==null || z=="")
			{
				alert(" Food type must be selected");
				return false;
				}
            
           if (a==null || a=="")
			{
				alert(" Hall name empty! Choose 'Others' option if you are outside of RUET ");
				return false;
				}	
            
            if (x==null || x=="")
			{
				alert(" name must be filled out");
				return false;
				}		

            if (y==null ||   y== "")
			{
				alert(" ProductID is empty");
				return false;
				}
								
				
			if (b==null || b=="")
			{
				alert(" Email field empty");
				return false;
				}
            
            if (c==null || c=="")
			{
				alert(" Mobile No field empty");
				return false;
				}			
			
			if (d==null || d=="")
			{
				alert("bKash Mobile no is empty!");
				return false;
				}
				
			if (e==null || e=="")
			{
				alert("Transaction ID must be filled out!");
				return false;
				}
				
				if (f==null || f=="")
			{
				alert("Enter you bill amount in BDT");
				return false;
				}
				
				if (g==null || g=="")
			{
				alert("Number of Products is empty!");
				return false;
				}
			
			
				}	
			