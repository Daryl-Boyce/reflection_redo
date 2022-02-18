<?php

$dbhost = "127.0.0.1";
$dbuser = "root";
$dbpass = "";
$db = "news__content";


$conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);

$sql = "SELECT * FROM newscards";
$result = mysqli_query($conn, $sql);


//Checks to see if there is any rows at the start.
if ($result->num_rows > 0) {
  //sets the array to NULL to be called again with different items.
  $mycard = NULL;
  // output data of each row
  while($row = $result->fetch_assoc()) {
    //creates an array and asigns the different rows from database to easy to call names.
      $mycard = array("footerImage" => $row["footerImage"],"headerImage" => $row["headerImage"], "blurb" => $row["blurb"], "cardTitle" => $row["cardTitle"], "createdBy" => $row["createdBy"], "dateOfPost" => $row["dateOfPost"]);
      //Makes use of the ID  or each row to be able to call specific items.
      $cards[$row["ID"]] = $mycard;
      }
  }
else {
  //basic message to show that there is no row in the data base.
  echo "0 results";
}

mysqli_close($conn);
?>