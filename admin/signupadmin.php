<!DOCTYPE html>
<html>
<head>
<title>Admin Signup</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/bootstrap.min.css"/>


</head>

<body>
<style>
.heading{color: red;}
<?php
include("header.php");
extract($_POST);
include("database.php");
$rs=mysqli_query($con,"select * from mst_admin where login='$id'");


// Create connection
$conn = new mysqli("localhost", "root","","quiz_new");
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$query="insert into mst_admin(id,loginid,pass) values($id,'$lid','$pass')";
//$rs=mysqli_query($con,$query);

if ($conn->query($query) === TRUE) {
  echo "<h1>New record created successfully</h1>";
  echo "<h1 ><br><br><br><div class=head1>Your Login ID  $lid Created Sucessfully<h1></div>";
  echo "<br><div class=head1><h1>Please Login using your Login ID to take Quiz</h1></div>";
  echo "<br><div class=head1><a href=index.php>Login</a></div>";
  $subject="Registered Admin";
  mail($email,$subject,"You can create quiz now on quiz portal and having unique id :$id and password:$pass ");
} 
else {
  echo"<script> alert(' dublicate entry') </script>";
  echo "<br><div class=head1><a href=index.php><h1>Please try again <br> login</h1></a></div>";
}
  
  $conn->close();


?>
</body>      
</html>