<?php

// $dbhost = "127.0.0.1";
// $dbuser = "root";
// $dbpass = "";
// $db = "news__content";


// $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);

// $sql = "SELECT footerImage FROM newscards WHERE id = 1 ";
// $result = mysqli_query($conn, $sql);

// if ($result->num_rows > 0) {
//  <?php

$dbhost = "127.0.0.1";
$dbuser = "root";
$dbpass = "";
$db = "news__content";


$conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);

$sql = "SELECT * FROM allmycards";
$result = mysqli_query($conn, $sql);

// if ($result->num_rows > 0) {
//   $mycard = NULL;
//   // output data of each row
//   while($row = $result->fetch_assoc()) {
//       $mycard = array("footerImage" => $row["footerImage"],"headerImage" => $row["headerImage"], "blurb" => $row["blurb"], "title" => $row["cardTitle"]);
//       $cards->push($row["id"] => $mycard);
//       }
//   }
// } else {
//   echo "0 results";
// }

mysqli_close($conn);
?> // output data of each row
//   while($row = $result->fetch_assoc()) {
//       $image__src = $row["footerImage"];
//   }
// } else {
//   echo "0 results";
// }

// mysqli_close($conn);
// ?>

<!--  -->
<?php

// $dbhost = "127.0.0.1";
// $dbuser = "root";
// $dbpass = "";
// $db = "news__content";


// $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);

// $sql = "SELECT * FROM allmycards";
// $result = mysqli_query($conn, $sql);

// if ($result->num_rows > 0) {
//   // output data of each row
//   while($row = $result->fetch_assoc()) {
//   		switch ($row["id"]) {
//       	case ("1"):
//       		$card1__footer = $row["footerImage"];
//       		$card1__header = $row["headerImage"];
//       		$card1__blurb = $row["blurb"];
//       		$card1__title = $row["cardTitle"];
//         	break;
//         case ("2"):
//       		$card2__footer = $row["footerImage"];
//       		$card2__header = $row["headerImage"];
//       		$card2__blurb = $row["blurb"];
//       		$card2__title = $row["cardTitle"];
//         	break;
//         case ("3"):
//       		$card3__footer = $row["footerImage"];
//       		$card3__header = $row["headerImage"];
//       		$card3__blurb = $row["blurb"];
//       		$card3__title = $row["cardTitle"];
//         	break;
//         default:
//         	echo "Nope";
//         	break;
//       }
//   }
// } else {
//   echo "0 results";
// }
// mysqli_close($conn);
?>
<!--  -->
<?php