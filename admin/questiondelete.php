<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Online Quiz - Quiz List</title>
<link href="../quiz.css" rel="stylesheet" type="text/css">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/bootstrap.min.css"/>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
<?php
include("header.php");
include("../database.php");
{
$sql=mysqli_query($con,"select * from mst_question");	
	
	echo "<table class='table table-striped'>";
	echo "<tr><th><a  class='btn btn-danger'href=\"questionadd.php\">Add Question </a>&emsp;&emsp;</th></tr>";
	echo "<tr><th class='text-primary'>ID</th><th class='text-primary'>Question</th>
	<th class='text-primary'>Update</th>
	<th class='text-primary'>Delete</th></tR>";
	
	while($result=mysqli_fetch_assoc($sql))
	{
$id=$result['que_id'];
	
	echo "<tr>";	
	echo "<td>".$result['que_id']. "</td>";
	echo "<td>".$result['que_desc']."</td>";
	echo "<td><a href='queupdate.php?que_id=$id'><i class='material-icons'>&#xe3c9;</i></a></td>";
	echo "<td><a href='quedelete.php?que_id=$id'><i class='material-icons'>&#xe872;</i></a></td>";
	echo "</tr>";
	}
	echo "</table>";
}
?>
</body>
</html>
