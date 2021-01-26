<?php
session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Online Quiz - Quiz List</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php
include("header.php");
include("../database.php");
 $id=$_GET['test_id'];

$sql=mysqli_query($con,"delete from mst_test where test_id='$id'");
header('location:testview.php');
?>