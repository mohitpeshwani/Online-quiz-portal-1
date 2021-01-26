<!DOCTYPE html>
<html>
<head>
<title>User Signup</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
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
extract($_POST);
include("database.php");
$rs=mysqli_query($con,"select * from mst_user where login='$lid'");
if (mysqli_num_rows($rs)>0)
{
	echo "<br><br><br><div class=head1>Login Id Already Exists</div>";
	exit;

}
$query="insert into mst_user(user_id,login,pass,username,address,city,phone,email) values('$uid','$lid','$pass','$name','$address','$city','$phone','$email')";
$rs=mysqli_query($con,$query)or die("Could Not Perform the Query");
mail($to,"congratulations","Your account has been registered");
echo "<br><br><br><div class=head1>Your Login ID  $lid Created Sucessfully</div>";
echo "<br><div class=head1>Please Login using your Login ID to take Quiz</div>";
echo "<br><div class=head1><a href=index.php>Login</a></div>";
mail($email,"Conragtulation u are registered ","Login with $lid and password is $pass");
 

?>

</body>
</html>

