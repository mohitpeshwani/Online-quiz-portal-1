<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>New Admin signup </title>
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
  return true;
  }
  
</script>
<style type="text/css">
	.TFtableCol{
    width:100%;
    height:100%; 
		border-collapse:; 
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

<link href="quiz.css" rel="stylesheet" type="text/css">
</head>

<body class="bg-success">
<param name="movie" value="english theams two brothers.dat">
        <param name="quality" value="high">
        <param name="movie" value="Drag to a file to choose it.">
        <param name="quality" value="high">
        <param name="BGCOLOR" value="#FFFFFF">
<?php
include("header.php");
?>
 <table width="100%" border="0" class="TFtableCol">
   
   <tr>
     <td><form name="form1" method="post" action="signupadmin.php" onSubmit="return check();">
       <center>
		<img class="img-circle" src="login1.jpg"  width="240px" height="190px" border="1" />
		</center>	<br>
			<table class=" table table-striped">
		
          <tr>
           <td class="style7">ID</div></td>
           <td><input class="form-control"type="text" size=30 width=30% name="id"></td>
         </tr>
         
         <tr>
           <td class="style7">LOGIN ID</div></td>
           <td><input class="form-control"type="text" size=30 width=30% name="lid"></td>
         </tr>
         <tr>
           <td class="style7">Password</td>
           <td><input class="form-control"type="password" size=30 width=30% name="pass"></td>
         </tr>
         <tr>
           <td class="style7" >Confirm Password </td>
           <td><input class="form-control" name="cpass" size=30 type="password" width=30% id="cpass"></td>
         </tr>
         <tr>
           <td valign="top" class="style7">E-mail</td>
           <td><input class="form-control" name="email" type="text" id="email"></td>
         </tr>
           <td>&nbsp;</td>
           <td align="center"><a href='signupadmin.php'><input class="btn btn-danger" type="submit" name="Submit" value="Signup" width=></a>
           </td>
         </tr>
       </table>
     </form></td>
   </tr>
 </table>
 <p>&nbsp; </p>
</body>
</html>
