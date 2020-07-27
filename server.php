<?php
  include __DIR__ . '/database.php';
  
  $sql = "SELECT * FROM `stanze`";
  $results = $conn->query($sql);
  if ($results && $results->num_rows > 0) {
    $rooms = [];
  // output data of each row
  while($row = $results->fetch_assoc()) {
    $rooms[] = $row;
  }
  } elseif ($results) {
    $rooms = [];
  echo "0 results";
  } else {
  die("query error");
  }
  $conn->close();

?>
