<?php
  include __DIR__ . '/../database.php';

  $id_stanza = $_POST['id_delete'];

  $sql = "DELETE FROM `stanze`
          WHERE `id` = $id_stanza";
  $results = $conn->query($sql);

  if ($results) {
    header('Location:' . $path_base . '?deleteroom=' . $number_stanza);
  } else {
    header('Location:' . $path_base . '?deleteroom=0');
  }
?>
