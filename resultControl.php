<?php
require("dbconnect.php");
$account = $_GET['account'];
$period=mysqli_real_escape_string($conn,$_POST['period']);
$num=mysqli_real_escape_string($conn,$_POST['num']);
$price=mysqli_real_escape_string($conn,$_POST['price']);
$key=mysqli_real_escape_string($conn,$_POST['key']);

if ($key) { //if title is not empty
	$sql = "insert into record (account, period, num, price) values ('$account','$period', '$num', '$price');";
	mysqli_query($conn, $sql) or die("Insert failed, SQL query error"); //執行SQL
} else {
	$msg = "key cannot be empty <br>";
}
header("Location:betResult.php");

?>