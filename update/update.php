<?php

  include __DIR__ . '/../database.php';

  $id_stanza = $_POST['room_id'];
  $number_stanza = $_POST['room_number'];
  $floor_stanza = $_POST['room_floor'];
  $beds_stanza = $_POST['room_beds'];

  $sql = "UPDATE `stanze`
          SET `room_number` = $number_stanza,
              `floor` = $floor_stanza,
              `beds` = $beds_stanza,
              `updated_at` = NOW()
          WHERE `id` = $id_stanza";
  $results = $conn->query($sql);

  if ($results) {
    header('Location:' . $path_base . '?uproom=' . $number_stanza);
  } else {
    die("query error");
  }
?>
