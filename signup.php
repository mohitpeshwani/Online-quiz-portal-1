<!DOCTYPE html>
<html>
<head>
<title>New user signup </title>
<link rel="stylesheet" href="css/bootstrap.min.css"/>
<script language="javascript">
function check()
{

 if(document.form1.lid.value=="")
  {
    alert("Plese Enter Login Id");
	document.form1.lid.focus();
	return false;
  }
 
 if(document.form1.pass.value=="")
  {
    alert("Plese Enter Your Password");
	document.form1.pass.focus();
	return false;
  } 
  if(document.form1.cpass.value=="")
  {
    alert("Plese Enter Confirm Password");
	document.form1.cpass.focus();
	return false;
  }
  if(document.form1.pass.value!=document.form1.cpass.value)
  {
    alert("Confirm Password does not matched");
	document.form1.cpass.focus();
	return false;
  }
  if(document.form1.name.value=="")
  {
    alert("Plese Enter Your Name");
	document.form1.name.focus();
	return false;
  }
  if(document.form1.address.value=="")
  {
    alert("Plese Enter Address");
	document.form1.address.focus();
	return false;
  }
  if(document.form1.city.value=="")
  {
    alert("Plese Enter City Name");
	document.form1.city.focus();
	return false;
  }
  if(document.form1.phone.value=="")
  {
    alert("Plese Enter Contact No");
	document.form1.phone.focus();
	return false;
  }
  if( document.form1.phone.value == "" || isNaN( document.form1.phone.value) || document.form1.phone.value.length != 10 )
{
alert( "Please provide a Phone No in the format 123." );
document.form1.phone.focus() ;
return false;
}
  if(document.form1.email.value=="")
  {
    alert("Plese Enter your Email Address");
	document.form1.email.focus();
	return false;
  }
  e=document.form1.email.value;
		f1=e.indexOf('@');
		f2=e.indexOf('@',f1+1);
		e1=e.indexOf('.');
		e2=e.indexOf('.',e1+1);
		n=e.length;

		if(!(f1>0 && f2==-1 && e1>0 && e2==-1 && f1!=e1+1 && e1!=f1+1 && f1!=n-1 && e1!=n-1))
		{
			alert("Please Enter valid Email");
			document.form1.email.focus();
			return false;
		}
  return true;
  }
  
</script>
<style type="text/css">
	.TFtableCol{
		width:100%; 
		border-collapse:collapse;
    align:center; 
	}
	.TFtableCol td{ 
		padding:7px; border:#4e95f4 1px solid;
	}
	/* improve visual readability for IE8 and below */
	.TFtableCol tr{
		background: #b8d1f3;
	}
	/*  Define the background color for all the ODD table columns  */
	.TFtableCol tr td:nth-child(odd){ 
		background: #F0F8FF
	}
	/*  Define the background color for all the EVEN table columns  */
	.TFtableCol tr td:nth-child(even){
		background: #FAEBD7;
  }
  
</style>


</style>
  
<link href="quiz.css" rel="stylesheet" type="text/css">
</head>

<body class="bg-success">
<?php
include("header.php");
?>
 <table width="100%" style="border:0px" class="TFtableCol">
   <tr>
     <td width="132" rowspan="2" valign="top"><span class="style8"><img src="images/connected_multiple_big.jpg" width="131" height="155"></span></td>
     <h1 class="text-center bg-primary">REGISTRATION PAGE</h1>
   </tr>
   <tr>
     <td><form name="form1" method="post" action="signupuser.php" onSubmit="return check();">
    
		<img class="img-circle" src="2.jpg"  width="240px" height="190px" style="border:0; align:center"/>
			<br>
			<table class=" table table-striped">
		
         <tr>
           <td class="style7">LOGIN ID</div></td>
           <td><input class="form-control"type="text" name="lid"></td>
         </tr>
         <tr>
           <td class="style7">Password</td>
           <td><input class="form-control"type="password" name="pass"></td>
         </tr>
         <tr>
           <td class="style7" >Confirm Password </td>
           <td><input class="form-control" name="cpass" type="password" id="cpass"></td>
         </tr>
         <tr>
           <td class="style7">Name</td>
           <td><input class="form-control" name="name" type="text" id="name"></td>
         </tr>
         <tr>
           <td valign="top" class="style7">Address</td>
           <td><textarea class="form-control" name="address" id="address"></textarea></td>
         </tr>
         <tr>
           <td valign="top" class="style7">City</td>
           <td><input class="form-control" name="city" type="text" id="city"></td>
         </tr>
         <tr>
           <td valign="top" class="style7">Phone</td>
           <td><input class="form-control" name="phone" type="text" id="phone"></td>
         </tr>
         <tr>
           <td valign="top" class="style7">E-mail</td>
           <td><input class="form-control" name="email" type="text" id="email"></td>
         </tr>
         <tr>
           <td>&nbsp;</td>
           <td><input class="btn btn-danger" type="submit" name="Submit" value="Signup">
           </td>
         </tr>
       </table>
     </form></td>
   </tr>
 </table>
 <p>&nbsp; </p>
</body>
</html>
