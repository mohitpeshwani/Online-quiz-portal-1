<?php
session_start();
?>
<!DOCTYPE html">
<html>
<head>
<title>Welcome to Online Exam</title>
<link rel="stylesheet" href="css/bootstrap.min.css"/>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/bootstrap.min.css"/>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide|Sofia|Trirong">
</head>
<style>
h1 {
  text-align: center;
}
img{
	display: block;
	margin-left: auto;
	margin-right: auto;
	
}
input {
  text-align: center;
}
table{
	text-align:center;
}
th,tr{
	text-align:center;
}
</style>
<body>
<?php
include("header.php");
include("database.php");
extract($_POST);

if(isset($submit))
{
	$rs=mysqli_query($con,"select * from mst_user where login='$loginid' and pass='$pass'");
	if(mysqli_num_rows($rs)<1)
	{
		$found="N";
	}
	else
	{
		$_SESSION[login]=$loginid;
	}
}
if (isset($_SESSION[login]))
{
echo "<h1  class='center text-center bg-danger'>Welcome to Online Exam</h1>";
		echo '<table width="28%"  border="0" align="center">
  <tr>
    <td width="7%" height="65" valign="bottom"><img src="image/HLPBUTT2.JPG" width="50" height="50" align="middle"></td>
    <td width="93%" valign="bottom" bordercolor="#0000FF"> <a href="sublist.php" class="style4">Subject for Quiz </a></td>
  </tr>
  <tr>
    <td height="58" valign="bottom"><img src="image/DEGREE.JPG" width="43" height="43" align="absmiddle"></td>
    <td valign="bottom"> <a href="result.php" class="style4">Result </a></td>
  </tr>
</table>';
   
		exit;
		

}


?>
<table width="100%" style="border:0">
  
  <tr>
    <td height="296" valign="top"><div >
        <h1 class="style8 center">Welcome to Online Quiz</h1>
      <span class="style5 center"><img src="image/paathshala.jpg" width="129" height="100"><span class="style7 center"><img src="image/HLPBUTT2.JPG" width="50" height="50"><img src="image/BOOKPG.JPG" width="43" height="43"></span>        </span>
        <param name="movie" value="english theams two brothers.dat">
        <param name="quality" value="high">
        <param name="movie" value="Drag to a file to choose it.">
        <param name="quality" value="high">
        <param name="BGCOLOR" value="#FFFFFF">
<p style="align:left" class="style5">&nbsp;</p>
        <b><h1 style="font-family: 'Audiowide', sans-serif; margin: 10px 50px 20px 0; width: 100%;"> 
          <p  class="style5"><span class="style7">WelCome to Online 
            exam. This Site will provide the quiz for various subject of interest. 
            You need to login for the take the online exam.</span></p> 
      </h1><b>
    </div></td>
    		<table class="center" WIDTH="50%" height="250">
			<h1 class="text-center bg-warning">LOGIN PAGE</h1>
		<form method="post" action="">
		
		<img class="img-circle" src="1.jpg"  title="this is my profile pic" width="240px" height="190px" class="center">
		<br>
				<tr>
					<th class="text-primary">LOGIN ID</th>
					<th>
					<input class="form-control"type="TEXT" title="enter your regitered LOGIN ID"  placeholder="LOGIN ID"  maxlength="10" size="25"  id="loginid2" name="loginid"/></tD>
				</th>
				<tr>
					<th class="text-primary center">ENTER PASSWORD</th>
					<th><input class="form-control" type="password" name="pass" id="pass2"/></th>
					</tr>
					       <?php
		  if(isset($found))
		  {
		  	echo "<script>alert('Invalid Username or Password') </script>";
		  }
		  ?>
          </span></td>
         <th></th>
				<th class="errors">
					<input class="btn btn-danger "type="submit" name="submit" id="submit" Value="Login"/>
				
        <a class="btn btn-success center " href="signup.php">New user ? click here</a></th>
      </table>
      <div class="center">
        <p class="style5"><a href="admin/index.php"><img src="3.jpg" ></a>          </p>
        </div>
    </form></td>
  </tr>
</table>

</body>
</html>
