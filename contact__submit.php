<?php

$dbhost = "127.0.0.1";
$dbuser = "root";
$dbpass = "";
$name = $_POST['name'];
$company__name = $_POST['company__name'];
$email = $_POST['email'];
$telephone__number = $_POST['telephone__number'];
$subject = $_POST['subject'];
$Message = $_POST['Message'];

$conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);


// database insert SQL code
$sql = "INSERT INTO `tbl_contact` (`Id`, `name`, `company__name`,  `email`, `telephone__number`, `subject`, `message`) VALUES ('0', '$name', '$company__name', '$email', '$telephone__number','$subject',$Message   )";

// insert in database 
$add__data = mysqli_query($con, $sql);





?>