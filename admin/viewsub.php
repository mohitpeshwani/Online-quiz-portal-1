<?php
session_start();
?>
<!DOCTYPE HTML>
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
$sql=mysqli_query($con,"select * from mst_subject");	
	
	echo "<table class='table table-striped'>";
	echo "<tr><th><a class='btn btn-danger' href='subadd.php'>Add Subject</a></th></tr>";
	echo "<tr><th class='text-primary'>ID</th><th class='text-primary'>name</th>
	<th class='text-primary'>Update</th>
	<th class='text-primary'>Delete</th></tR>";
	
	while($result=mysqli_fetch_assoc($sql))
	{
$id=$result['sub_id'];
	
	echo "<tr>";	
	echo "<td>".$result['sub_id']. "</td>";
	echo "<td>".$result['sub_name']."</td>";
	echo "<td><a href='subupdate.php?sub_id=$id'><i class='material-icons'>&#xe3c9;</i></a></td>";
	echo "<td><a href='subdelete.php?sub_id=$id'><i class='material-icons'>&#xe872;</i></span></a></td>";
	echo "</tr>";
	}
	echo "</table>";


}
?>
</body>
</html>
