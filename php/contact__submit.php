<?php
//
// Server Details
$dbhost = "127.0.0.1";
$dbuser = "root";
$dbpass = "76hWXu]H%[4j";
//
// Variables Needed for function
$name = $_POST['name'];
$company__name = $_POST['company__name'];
$email = $_POST['email'];
$telephone__number = $_POST['telephone__number'];
$subject = $_POST['subject'];
$Message = $_POST['Message'];
//
//
$conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
//
// Database Insert SQL Querie
$sql = "INSERT INTO `tbl_contact` (`Id`, `name`, `company__name`,  `email`, `telephone__number`, `subject`, `message`) VALUES ('0', '$name', '$company__name', '$email', '$telephone__number','$subject',$Message   )";
//
// Insert's Into Database 
$add__data = mysqli_query($con, $sql);
//
//
?>