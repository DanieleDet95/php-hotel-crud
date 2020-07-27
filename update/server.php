<?php

  include __DIR__ . '/../database.php';

  $id_stanza = $_GET['id'];
  $sql = "SELECT * FROM `stanze` WHERE `id` = $id_stanza";
  $results = $conn->query($sql);

  if ($results && $results->num_rows > 0) {
    // Ci sono risultati
    $rooms = $results->fetch_assoc();
  }
  elseif ($results) {
    // La select é vuota
    $rooms = [];
  } else {
    die("query error");
  }
  $conn->close();
?>
