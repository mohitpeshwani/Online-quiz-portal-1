<?php
session_start();
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Administrative Login - Online Exam</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="../quiz.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/bootstrap.min.css"/>

</head>

<body>
<?php
include("header.php");
?>

<h1 class="text-center bg-danger">Adminstrative Login</h1>

<form name="form1" method="post" action="login.php">
<table class="table table-striped">
  <tr>
    <td width="106"><span class="style2"></span></td>
    <td width="132"><span class="style2"><span class="head1"><img src="login1.jpg" width="450" height="300" ></span></span></td>
    <td width="238"><table width="219" border="0" align="center">
  <tr>
    <td width="163" class="style2">Login ID </td>
    <td width="149"><input class="form-control" name="loginid" type="text" id="loginid"></td>
  </tr>
  <tr></tr>
  <tr></tr>
  <tr></tr>
    <td class="style2">Password</td>
    <td><input class="form-control" name="pass" type="password" id="pass"></td>
  </tr>
  <tr></tr>
  <td class="style2"></td>
    <td><input class="btn btn-primary" name="submit" type="submit" id="submit" value="Login" ></td>
  <tr></tr>
  <tr></tr>
  <tr>
    <td class="style2">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  
</table></td>
  </tr>
</table>

</form>
<div align="center">
        <p class="style5"><a href="../index.php"><img src="button_go-to-user.jpg " height=100 width=250  "></a>          </p>
        </div>
        <div align="center">
        <p class="style5"><a href="signup.php"><img src="3.jpg" height=100 width=250 "></a>          </p>
        </div>
</body>
</html>
