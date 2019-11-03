<!DOCTYPE html>
<html>
<head>
	<title>gas this is docker</title>
</head>
<body>
	some say stupid thinds infront of you babe mee
	<h1>Hello Cloudreach!</h1>
<h4>Attempting MySQL connection from php...</h4>
<?php
$host = "host";
$user = "username";
$pass = "password";
$mysqli = new mysqli($host, $user, $pass, 'DB Name');
if ($mysqli->connect_error) {
  echo $mysqli->connect_error;
  exit();
} else {
  $mysqli->set_charset("utf8");
  echo 'go';
}
 
 
$sql = "SELECT * FROM table";
if ($result = $mysqli->query($sql)) {
  while ($row = $result->fetch_assoc()) {
    echo $row["row1"] ."&nbsp;". $row["row2"] . "<br>";
  }
  $result->close();
}
 
$mysqli->close();
?>
</body>
</html>