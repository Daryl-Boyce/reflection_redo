<?php

$dbhost = "127.0.0.1";
$dbuser = "root";
$dbpass = "";
$db = "news__content";


$conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);

$sql = "SELECT * FROM newscards";
$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0) {
  $mycard = NULL;
  // output data of each row
  while($row = $result->fetch_assoc()) {
      $mycard = array("footerImage" => $row["footerImage"],"headerImage" => $row["headerImage"], "blurb" => $row["blurb"], "cardTitle" => $row["cardTitle"], "createdBy" => $row["createdBy"], "dateOfPost" => $row["dateOfPost"]);
      $cards[$row["ID"]] = $mycard;
      }
  }
else {
  echo "0 results";
}

mysqli_close($conn);
?>